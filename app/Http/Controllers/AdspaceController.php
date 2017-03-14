<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdspaceRequest;
use App\Http\Requests\UpdateAdspaceRequest;
use App\Repositories\AdspaceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AdspaceController extends AppBaseController
{
    /** @var  AdspaceRepository */
    private $adspaceRepository;

    public function __construct(AdspaceRepository $adspaceRepo)
    {
        $this->adspaceRepository = $adspaceRepo;
    }

    /**
     * Display a listing of the Adspace.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->adspaceRepository->pushCriteria(new RequestCriteria($request));
        $adspaces = $this->adspaceRepository->all();

        return view('adspaces.index')
            ->with('adspaces', $adspaces);
    }

    /**
     * Show the form for creating a new Adspace.
     *
     * @return Response
     */
    public function create()
    {
        return view('adspaces.create');
    }

    /**
     * Store a newly created Adspace in storage.
     *
     * @param CreateAdspaceRequest $request
     *
     * @return Response
     */
    public function store(CreateAdspaceRequest $request)
    {
        $input = $request->all();

        $adspace = $this->adspaceRepository->create($input);

        Flash::success('Adspace saved successfully.');

        return redirect(route('adspaces.index'));
    }

    /**
     * Display the specified Adspace.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $adspace = $this->adspaceRepository->findWithoutFail($id);

        if (empty($adspace)) {
            Flash::error('Adspace not found');

            return redirect(route('adspaces.index'));
        }

        return view('adspaces.show')->with('adspace', $adspace);
    }

    /**
     * Show the form for editing the specified Adspace.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $adspace = $this->adspaceRepository->findWithoutFail($id);

        if (empty($adspace)) {
            Flash::error('Adspace not found');

            return redirect(route('adspaces.index'));
        }

        return view('adspaces.edit')->with('adspace', $adspace);
    }

    /**
     * Update the specified Adspace in storage.
     *
     * @param  int              $id
     * @param UpdateAdspaceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdspaceRequest $request)
    {
        $adspace = $this->adspaceRepository->findWithoutFail($id);

        if (empty($adspace)) {
            Flash::error('Adspace not found');

            return redirect(route('adspaces.index'));
        }

        $adspace = $this->adspaceRepository->update($request->all(), $id);

        Flash::success('Adspace updated successfully.');

        return redirect(route('adspaces.index'));
    }

    /**
     * Remove the specified Adspace from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $adspace = $this->adspaceRepository->findWithoutFail($id);

        if (empty($adspace)) {
            Flash::error('Adspace not found');

            return redirect(route('adspaces.index'));
        }

        $this->adspaceRepository->delete($id);

        Flash::success('Adspace deleted successfully.');

        return redirect(route('adspaces.index'));
    }
}
