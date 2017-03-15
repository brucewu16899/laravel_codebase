<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductOfferRequest;
use App\Http\Requests\UpdateProductOfferRequest;
use App\Repositories\ProductOfferRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProductOfferController extends AppBaseController
{
    /** @var  ProductOfferRepository */
    private $productOfferRepository;

    public function __construct(ProductOfferRepository $productOfferRepo)
    {
        $this->productOfferRepository = $productOfferRepo;
    }

    /**
     * Display a listing of the ProductOffer.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productOfferRepository->pushCriteria(new RequestCriteria($request));
        $productOffers = $this->productOfferRepository->all();

        return view('product_offers.index')
            ->with('productOffers', $productOffers);
    }

    /**
     * Show the form for creating a new ProductOffer.
     *
     * @return Response
     */
    public function create()
    {
        return view('product_offers.create');
    }

    /**
     * Store a newly created ProductOffer in storage.
     *
     * @param CreateProductOfferRequest $request
     *
     * @return Response
     */
    public function store(CreateProductOfferRequest $request)
    {
        $input = $request->all();

        $productOffer = $this->productOfferRepository->create($input);

        Flash::success('Product Offer saved successfully.');

        return redirect(route('productOffers.index'));
    }

    /**
     * Display the specified ProductOffer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productOffer = $this->productOfferRepository->findWithoutFail($id);

        if (empty($productOffer)) {
            Flash::error('Product Offer not found');

            return redirect(route('productOffers.index'));
        }

        return view('product_offers.show')->with('productOffer', $productOffer);
    }

    /**
     * Show the form for editing the specified ProductOffer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productOffer = $this->productOfferRepository->findWithoutFail($id);

        if (empty($productOffer)) {
            Flash::error('Product Offer not found');

            return redirect(route('productOffers.index'));
        }

        return view('product_offers.edit')->with('productOffer', $productOffer);
    }

    /**
     * Update the specified ProductOffer in storage.
     *
     * @param  int              $id
     * @param UpdateProductOfferRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductOfferRequest $request)
    {
        $productOffer = $this->productOfferRepository->findWithoutFail($id);

        if (empty($productOffer)) {
            Flash::error('Product Offer not found');

            return redirect(route('productOffers.index'));
        }

        $productOffer = $this->productOfferRepository->update($request->all(), $id);

        Flash::success('Product Offer updated successfully.');

        return redirect(route('productOffers.index'));
    }

    /**
     * Remove the specified ProductOffer from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productOffer = $this->productOfferRepository->findWithoutFail($id);

        if (empty($productOffer)) {
            Flash::error('Product Offer not found');

            return redirect(route('productOffers.index'));
        }

        $this->productOfferRepository->delete($id);

        Flash::success('Product Offer deleted successfully.');

        return redirect(route('productOffers.index'));
    }
}
