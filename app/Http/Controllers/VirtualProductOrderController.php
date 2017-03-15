<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVirtualProductOrderRequest;
use App\Http\Requests\UpdateVirtualProductOrderRequest;
use App\Repositories\VirtualProductOrderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class VirtualProductOrderController extends AppBaseController
{
    /** @var  VirtualProductOrderRepository */
    private $virtualProductOrderRepository;

    public function __construct(VirtualProductOrderRepository $virtualProductOrderRepo)
    {
        $this->virtualProductOrderRepository = $virtualProductOrderRepo;
    }

    /**
     * Display a listing of the VirtualProductOrder.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->virtualProductOrderRepository->pushCriteria(new RequestCriteria($request));
        $virtualProductOrders = $this->virtualProductOrderRepository->all();

        return view('virtual_product_orders.index')
            ->with('virtualProductOrders', $virtualProductOrders);
    }

    /**
     * Show the form for creating a new VirtualProductOrder.
     *
     * @return Response
     */
    public function create()
    {
        return view('virtual_product_orders.create');
    }

    /**
     * Store a newly created VirtualProductOrder in storage.
     *
     * @param CreateVirtualProductOrderRequest $request
     *
     * @return Response
     */
    public function store(CreateVirtualProductOrderRequest $request)
    {
        $input = $request->all();

        $virtualProductOrder = $this->virtualProductOrderRepository->create($input);

        Flash::success('Virtual Product Order saved successfully.');

        return redirect(route('virtualProductOrders.index'));
    }

    /**
     * Display the specified VirtualProductOrder.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $virtualProductOrder = $this->virtualProductOrderRepository->findWithoutFail($id);

        if (empty($virtualProductOrder)) {
            Flash::error('Virtual Product Order not found');

            return redirect(route('virtualProductOrders.index'));
        }

        return view('virtual_product_orders.show')->with('virtualProductOrder', $virtualProductOrder);
    }

    /**
     * Show the form for editing the specified VirtualProductOrder.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $virtualProductOrder = $this->virtualProductOrderRepository->findWithoutFail($id);

        if (empty($virtualProductOrder)) {
            Flash::error('Virtual Product Order not found');

            return redirect(route('virtualProductOrders.index'));
        }

        return view('virtual_product_orders.edit')->with('virtualProductOrder', $virtualProductOrder);
    }

    /**
     * Update the specified VirtualProductOrder in storage.
     *
     * @param  int              $id
     * @param UpdateVirtualProductOrderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVirtualProductOrderRequest $request)
    {
        $virtualProductOrder = $this->virtualProductOrderRepository->findWithoutFail($id);

        if (empty($virtualProductOrder)) {
            Flash::error('Virtual Product Order not found');

            return redirect(route('virtualProductOrders.index'));
        }

        $virtualProductOrder = $this->virtualProductOrderRepository->update($request->all(), $id);

        Flash::success('Virtual Product Order updated successfully.');

        return redirect(route('virtualProductOrders.index'));
    }

    /**
     * Remove the specified VirtualProductOrder from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $virtualProductOrder = $this->virtualProductOrderRepository->findWithoutFail($id);

        if (empty($virtualProductOrder)) {
            Flash::error('Virtual Product Order not found');

            return redirect(route('virtualProductOrders.index'));
        }

        $this->virtualProductOrderRepository->delete($id);

        Flash::success('Virtual Product Order deleted successfully.');

        return redirect(route('virtualProductOrders.index'));
    }
}
