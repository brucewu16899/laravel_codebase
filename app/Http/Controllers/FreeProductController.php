<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFreeProductRequest;
use App\Http\Requests\UpdateFreeProductRequest;
use App\Repositories\FreeProductRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FreeProductController extends AppBaseController
{
    /** @var  FreeProductRepository */
    private $freeProductRepository;

    public function __construct(FreeProductRepository $freeProductRepo)
    {
        $this->freeProductRepository = $freeProductRepo;
    }

    /**
     * Display a listing of the FreeProduct.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->freeProductRepository->pushCriteria(new RequestCriteria($request));
        $freeProducts = $this->freeProductRepository->all();

        return view('free_products.index')
            ->with('freeProducts', $freeProducts);
    }

    /**
     * Show the form for creating a new FreeProduct.
     *
     * @return Response
     */
    public function create()
    {
        return view('free_products.create');
    }

    /**
     * Store a newly created FreeProduct in storage.
     *
     * @param CreateFreeProductRequest $request
     *
     * @return Response
     */
    public function store(CreateFreeProductRequest $request)
    {
        $input = $request->all();

        $freeProduct = $this->freeProductRepository->create($input);

        Flash::success('Free Product saved successfully.');

        return redirect(route('freeProducts.index'));
    }

    /**
     * Display the specified FreeProduct.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $freeProduct = $this->freeProductRepository->findWithoutFail($id);

        if (empty($freeProduct)) {
            Flash::error('Free Product not found');

            return redirect(route('freeProducts.index'));
        }

        return view('free_products.show')->with('freeProduct', $freeProduct);
    }

    /**
     * Show the form for editing the specified FreeProduct.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $freeProduct = $this->freeProductRepository->findWithoutFail($id);

        if (empty($freeProduct)) {
            Flash::error('Free Product not found');

            return redirect(route('freeProducts.index'));
        }

        return view('free_products.edit')->with('freeProduct', $freeProduct);
    }

    /**
     * Update the specified FreeProduct in storage.
     *
     * @param  int              $id
     * @param UpdateFreeProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFreeProductRequest $request)
    {
        $freeProduct = $this->freeProductRepository->findWithoutFail($id);

        if (empty($freeProduct)) {
            Flash::error('Free Product not found');

            return redirect(route('freeProducts.index'));
        }

        $freeProduct = $this->freeProductRepository->update($request->all(), $id);

        Flash::success('Free Product updated successfully.');

        return redirect(route('freeProducts.index'));
    }

    /**
     * Remove the specified FreeProduct from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $freeProduct = $this->freeProductRepository->findWithoutFail($id);

        if (empty($freeProduct)) {
            Flash::error('Free Product not found');

            return redirect(route('freeProducts.index'));
        }

        $this->freeProductRepository->delete($id);

        Flash::success('Free Product deleted successfully.');

        return redirect(route('freeProducts.index'));
    }
}
