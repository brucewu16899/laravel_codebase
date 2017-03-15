<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateActionTypeRequest;
use App\Http\Requests\UpdateActionTypeRequest;
use App\Repositories\ActionTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ActionTypeController extends AppBaseController
{
    /** @var  ActionTypeRepository */
    private $actionTypeRepository;

    public function __construct(ActionTypeRepository $actionTypeRepo)
    {
        $this->actionTypeRepository = $actionTypeRepo;
    }

    /**
     * Display a listing of the ActionType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->actionTypeRepository->pushCriteria(new RequestCriteria($request));
        $actionTypes = $this->actionTypeRepository->all();

        return view('action_types.index')
            ->with('actionTypes', $actionTypes);
    }

    /**
     * Show the form for creating a new ActionType.
     *
     * @return Response
     */
    public function create()
    {
        return view('action_types.create');
    }

    /**
     * Store a newly created ActionType in storage.
     *
     * @param CreateActionTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateActionTypeRequest $request)
    {
        $input = $request->all();

        $actionType = $this->actionTypeRepository->create($input);

        Flash::success('Action Type saved successfully.');

        return redirect(route('actionTypes.index'));
    }

    /**
     * Display the specified ActionType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $actionType = $this->actionTypeRepository->findWithoutFail($id);

        if (empty($actionType)) {
            Flash::error('Action Type not found');

            return redirect(route('actionTypes.index'));
        }

        return view('action_types.show')->with('actionType', $actionType);
    }

    /**
     * Show the form for editing the specified ActionType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $actionType = $this->actionTypeRepository->findWithoutFail($id);

        if (empty($actionType)) {
            Flash::error('Action Type not found');

            return redirect(route('actionTypes.index'));
        }

        return view('action_types.edit')->with('actionType', $actionType);
    }

    /**
     * Update the specified ActionType in storage.
     *
     * @param  int              $id
     * @param UpdateActionTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateActionTypeRequest $request)
    {
        $actionType = $this->actionTypeRepository->findWithoutFail($id);

        if (empty($actionType)) {
            Flash::error('Action Type not found');

            return redirect(route('actionTypes.index'));
        }

        $actionType = $this->actionTypeRepository->update($request->all(), $id);

        Flash::success('Action Type updated successfully.');

        return redirect(route('actionTypes.index'));
    }

    /**
     * Remove the specified ActionType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $actionType = $this->actionTypeRepository->findWithoutFail($id);

        if (empty($actionType)) {
            Flash::error('Action Type not found');

            return redirect(route('actionTypes.index'));
        }

        $this->actionTypeRepository->delete($id);

        Flash::success('Action Type deleted successfully.');

        return redirect(route('actionTypes.index'));
    }
}
