<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePaypalOrderRequest;
use App\Http\Requests\UpdatePaypalOrderRequest;
use App\Repositories\PaypalOrderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PaypalOrderController extends AppBaseController
{
    /** @var  PaypalOrderRepository */
    private $paypalOrderRepository;

    public function __construct(PaypalOrderRepository $paypalOrderRepo)
    {
        $this->paypalOrderRepository = $paypalOrderRepo;
    }

    /**
     * Display a listing of the PaypalOrder.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->paypalOrderRepository->pushCriteria(new RequestCriteria($request));
        $paypalOrders = $this->paypalOrderRepository->all();

        return view('paypal_orders.index')
            ->with('paypalOrders', $paypalOrders);
    }

    /**
     * Show the form for creating a new PaypalOrder.
     *
     * @return Response
     */
    public function create()
    {
        return view('paypal_orders.create');
    }

    /**
     * Store a newly created PaypalOrder in storage.
     *
     * @param CreatePaypalOrderRequest $request
     *
     * @return Response
     */
    public function store(CreatePaypalOrderRequest $request)
    {
        $input = $request->all();

        $paypalOrder = $this->paypalOrderRepository->create($input);

        Flash::success('Paypal Order saved successfully.');

        return redirect(route('paypalOrders.index'));
    }

    /**
     * Display the specified PaypalOrder.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $paypalOrder = $this->paypalOrderRepository->findWithoutFail($id);

        if (empty($paypalOrder)) {
            Flash::error('Paypal Order not found');

            return redirect(route('paypalOrders.index'));
        }

        return view('paypal_orders.show')->with('paypalOrder', $paypalOrder);
    }

    /**
     * Show the form for editing the specified PaypalOrder.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paypalOrder = $this->paypalOrderRepository->findWithoutFail($id);

        if (empty($paypalOrder)) {
            Flash::error('Paypal Order not found');

            return redirect(route('paypalOrders.index'));
        }

        return view('paypal_orders.edit')->with('paypalOrder', $paypalOrder);
    }

    /**
     * Update the specified PaypalOrder in storage.
     *
     * @param  int              $id
     * @param UpdatePaypalOrderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaypalOrderRequest $request)
    {
        $paypalOrder = $this->paypalOrderRepository->findWithoutFail($id);

        if (empty($paypalOrder)) {
            Flash::error('Paypal Order not found');

            return redirect(route('paypalOrders.index'));
        }

        $paypalOrder = $this->paypalOrderRepository->update($request->all(), $id);

        Flash::success('Paypal Order updated successfully.');

        return redirect(route('paypalOrders.index'));
    }

    /**
     * Remove the specified PaypalOrder from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $paypalOrder = $this->paypalOrderRepository->findWithoutFail($id);

        if (empty($paypalOrder)) {
            Flash::error('Paypal Order not found');

            return redirect(route('paypalOrders.index'));
        }

        $this->paypalOrderRepository->delete($id);

        Flash::success('Paypal Order deleted successfully.');

        return redirect(route('paypalOrders.index'));
    }
}
