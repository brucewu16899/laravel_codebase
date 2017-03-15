<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFreeProductOrderRequest;
use App\Http\Requests\UpdateFreeProductOrderRequest;
use App\Repositories\FreeProductOrderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FreeProductOrderController extends AppBaseController
{
    /** @var  FreeProductOrderRepository */
    private $freeProductOrderRepository;

    public function __construct(FreeProductOrderRepository $freeProductOrderRepo)
    {
        $this->freeProductOrderRepository = $freeProductOrderRepo;
    }

    /**
     * Display a listing of the FreeProductOrder.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->freeProductOrderRepository->pushCriteria(new RequestCriteria($request));
        $freeProductOrders = $this->freeProductOrderRepository->all();

        return view('free_product_orders.index')
            ->with('freeProductOrders', $freeProductOrders);
    }

    /**
     * Show the form for creating a new FreeProductOrder.
     *
     * @return Response
     */
    public function create()
    {
        return view('free_product_orders.create');
    }

    /**
     * Store a newly created FreeProductOrder in storage.
     *
     * @param CreateFreeProductOrderRequest $request
     *
     * @return Response
     */
    public function store(CreateFreeProductOrderRequest $request)
    {
        $input = $request->all();

        $freeProductOrder = $this->freeProductOrderRepository->create($input);

        Flash::success('Free Product Order saved successfully.');

        return redirect(route('freeProductOrders.index'));
    }

    /**
     * Display the specified FreeProductOrder.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $freeProductOrder = $this->freeProductOrderRepository->findWithoutFail($id);

        if (empty($freeProductOrder)) {
            Flash::error('Free Product Order not found');

            return redirect(route('freeProductOrders.index'));
        }

        return view('free_product_orders.show')->with('freeProductOrder', $freeProductOrder);
    }

    /**
     * Show the form for editing the specified FreeProductOrder.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $freeProductOrder = $this->freeProductOrderRepository->findWithoutFail($id);

        if (empty($freeProductOrder)) {
            Flash::error('Free Product Order not found');

            return redirect(route('freeProductOrders.index'));
        }

        return view('free_product_orders.edit')->with('freeProductOrder', $freeProductOrder);
    }

    /**
     * Update the specified FreeProductOrder in storage.
     *
     * @param  int              $id
     * @param UpdateFreeProductOrderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFreeProductOrderRequest $request)
    {
        $freeProductOrder = $this->freeProductOrderRepository->findWithoutFail($id);

        if (empty($freeProductOrder)) {
            Flash::error('Free Product Order not found');

            return redirect(route('freeProductOrders.index'));
        }

        $freeProductOrder = $this->freeProductOrderRepository->update($request->all(), $id);

        Flash::success('Free Product Order updated successfully.');

        return redirect(route('freeProductOrders.index'));
    }

    /**
     * Remove the specified FreeProductOrder from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $freeProductOrder = $this->freeProductOrderRepository->findWithoutFail($id);

        if (empty($freeProductOrder)) {
            Flash::error('Free Product Order not found');

            return redirect(route('freeProductOrders.index'));
        }

        $this->freeProductOrderRepository->delete($id);

        Flash::success('Free Product Order deleted successfully.');

        return redirect(route('freeProductOrders.index'));
    }
}
