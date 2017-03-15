<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTypeReferenceRequest;
use App\Http\Requests\UpdateTypeReferenceRequest;
use App\Repositories\TypeReferenceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TypeReferenceController extends AppBaseController
{
    /** @var  TypeReferenceRepository */
    private $typeReferenceRepository;

    public function __construct(TypeReferenceRepository $typeReferenceRepo)
    {
        $this->typeReferenceRepository = $typeReferenceRepo;
    }

    /**
     * Display a listing of the TypeReference.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->typeReferenceRepository->pushCriteria(new RequestCriteria($request));
        $typeReferences = $this->typeReferenceRepository->all();

        return view('type_references.index')
            ->with('typeReferences', $typeReferences);
    }

    /**
     * Show the form for creating a new TypeReference.
     *
     * @return Response
     */
    public function create()
    {
        return view('type_references.create');
    }

    /**
     * Store a newly created TypeReference in storage.
     *
     * @param CreateTypeReferenceRequest $request
     *
     * @return Response
     */
    public function store(CreateTypeReferenceRequest $request)
    {
        $input = $request->all();

        $typeReference = $this->typeReferenceRepository->create($input);

        Flash::success('Type Reference saved successfully.');

        return redirect(route('typeReferences.index'));
    }

    /**
     * Display the specified TypeReference.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $typeReference = $this->typeReferenceRepository->findWithoutFail($id);

        if (empty($typeReference)) {
            Flash::error('Type Reference not found');

            return redirect(route('typeReferences.index'));
        }

        return view('type_references.show')->with('typeReference', $typeReference);
    }

    /**
     * Show the form for editing the specified TypeReference.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $typeReference = $this->typeReferenceRepository->findWithoutFail($id);

        if (empty($typeReference)) {
            Flash::error('Type Reference not found');

            return redirect(route('typeReferences.index'));
        }

        return view('type_references.edit')->with('typeReference', $typeReference);
    }

    /**
     * Update the specified TypeReference in storage.
     *
     * @param  int              $id
     * @param UpdateTypeReferenceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTypeReferenceRequest $request)
    {
        $typeReference = $this->typeReferenceRepository->findWithoutFail($id);

        if (empty($typeReference)) {
            Flash::error('Type Reference not found');

            return redirect(route('typeReferences.index'));
        }

        $typeReference = $this->typeReferenceRepository->update($request->all(), $id);

        Flash::success('Type Reference updated successfully.');

        return redirect(route('typeReferences.index'));
    }

    /**
     * Remove the specified TypeReference from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $typeReference = $this->typeReferenceRepository->findWithoutFail($id);

        if (empty($typeReference)) {
            Flash::error('Type Reference not found');

            return redirect(route('typeReferences.index'));
        }

        $this->typeReferenceRepository->delete($id);

        Flash::success('Type Reference deleted successfully.');

        return redirect(route('typeReferences.index'));
    }
}
