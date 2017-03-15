<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompanyFeatureRequest;
use App\Http\Requests\UpdateCompanyFeatureRequest;
use App\Repositories\CompanyFeatureRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CompanyFeatureController extends AppBaseController
{
    /** @var  CompanyFeatureRepository */
    private $companyFeatureRepository;

    public function __construct(CompanyFeatureRepository $companyFeatureRepo)
    {
        $this->companyFeatureRepository = $companyFeatureRepo;
    }

    /**
     * Display a listing of the CompanyFeature.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->companyFeatureRepository->pushCriteria(new RequestCriteria($request));
        $companyFeatures = $this->companyFeatureRepository->all();

        return view('company_features.index')
            ->with('companyFeatures', $companyFeatures);
    }

    /**
     * Show the form for creating a new CompanyFeature.
     *
     * @return Response
     */
    public function create()
    {
        return view('company_features.create');
    }

    /**
     * Store a newly created CompanyFeature in storage.
     *
     * @param CreateCompanyFeatureRequest $request
     *
     * @return Response
     */
    public function store(CreateCompanyFeatureRequest $request)
    {
        $input = $request->all();

        $companyFeature = $this->companyFeatureRepository->create($input);

        Flash::success('Company Feature saved successfully.');

        return redirect(route('companyFeatures.index'));
    }

    /**
     * Display the specified CompanyFeature.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $companyFeature = $this->companyFeatureRepository->findWithoutFail($id);

        if (empty($companyFeature)) {
            Flash::error('Company Feature not found');

            return redirect(route('companyFeatures.index'));
        }

        return view('company_features.show')->with('companyFeature', $companyFeature);
    }

    /**
     * Show the form for editing the specified CompanyFeature.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $companyFeature = $this->companyFeatureRepository->findWithoutFail($id);

        if (empty($companyFeature)) {
            Flash::error('Company Feature not found');

            return redirect(route('companyFeatures.index'));
        }

        return view('company_features.edit')->with('companyFeature', $companyFeature);
    }

    /**
     * Update the specified CompanyFeature in storage.
     *
     * @param  int              $id
     * @param UpdateCompanyFeatureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCompanyFeatureRequest $request)
    {
        $companyFeature = $this->companyFeatureRepository->findWithoutFail($id);

        if (empty($companyFeature)) {
            Flash::error('Company Feature not found');

            return redirect(route('companyFeatures.index'));
        }

        $companyFeature = $this->companyFeatureRepository->update($request->all(), $id);

        Flash::success('Company Feature updated successfully.');

        return redirect(route('companyFeatures.index'));
    }

    /**
     * Remove the specified CompanyFeature from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $companyFeature = $this->companyFeatureRepository->findWithoutFail($id);

        if (empty($companyFeature)) {
            Flash::error('Company Feature not found');

            return redirect(route('companyFeatures.index'));
        }

        $this->companyFeatureRepository->delete($id);

        Flash::success('Company Feature deleted successfully.');

        return redirect(route('companyFeatures.index'));
    }
}
