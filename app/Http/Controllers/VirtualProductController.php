<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVirtualProductRequest;
use App\Http\Requests\UpdateVirtualProductRequest;
use App\Repositories\VirtualProductRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class VirtualProductController extends AppBaseController
{
    /** @var  VirtualProductRepository */
    private $virtualProductRepository;

    public function __construct(VirtualProductRepository $virtualProductRepo)
    {
        $this->virtualProductRepository = $virtualProductRepo;
    }

    /**
     * Display a listing of the VirtualProduct.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->virtualProductRepository->pushCriteria(new RequestCriteria($request));
        $virtualProducts = $this->virtualProductRepository->all();

        return view('virtual_products.index')
            ->with('virtualProducts', $virtualProducts);
    }

    /**
     * Show the form for creating a new VirtualProduct.
     *
     * @return Response
     */
    public function create()
    {
        return view('virtual_products.create');
    }

    /**
     * Store a newly created VirtualProduct in storage.
     *
     * @param CreateVirtualProductRequest $request
     *
     * @return Response
     */
    public function store(CreateVirtualProductRequest $request)
    {
        $input = $request->all();

        $virtualProduct = $this->virtualProductRepository->create($input);

        Flash::success('Virtual Product saved successfully.');

        return redirect(route('virtualProducts.index'));
    }

    /**
     * Display the specified VirtualProduct.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $virtualProduct = $this->virtualProductRepository->findWithoutFail($id);

        if (empty($virtualProduct)) {
            Flash::error('Virtual Product not found');

            return redirect(route('virtualProducts.index'));
        }

        return view('virtual_products.show')->with('virtualProduct', $virtualProduct);
    }

    /**
     * Show the form for editing the specified VirtualProduct.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $virtualProduct = $this->virtualProductRepository->findWithoutFail($id);

        if (empty($virtualProduct)) {
            Flash::error('Virtual Product not found');

            return redirect(route('virtualProducts.index'));
        }

        return view('virtual_products.edit')->with('virtualProduct', $virtualProduct);
    }

    /**
     * Update the specified VirtualProduct in storage.
     *
     * @param  int              $id
     * @param UpdateVirtualProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVirtualProductRequest $request)
    {
        $virtualProduct = $this->virtualProductRepository->findWithoutFail($id);

        if (empty($virtualProduct)) {
            Flash::error('Virtual Product not found');

            return redirect(route('virtualProducts.index'));
        }

        $virtualProduct = $this->virtualProductRepository->update($request->all(), $id);

        Flash::success('Virtual Product updated successfully.');

        return redirect(route('virtualProducts.index'));
    }

    /**
     * Remove the specified VirtualProduct from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $virtualProduct = $this->virtualProductRepository->findWithoutFail($id);

        if (empty($virtualProduct)) {
            Flash::error('Virtual Product not found');

            return redirect(route('virtualProducts.index'));
        }

        $this->virtualProductRepository->delete($id);

        Flash::success('Virtual Product deleted successfully.');

        return redirect(route('virtualProducts.index'));
    }
}
