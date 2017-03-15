<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFreeProductParticipantRequest;
use App\Http\Requests\UpdateFreeProductParticipantRequest;
use App\Repositories\FreeProductParticipantRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FreeProductParticipantController extends AppBaseController
{
    /** @var  FreeProductParticipantRepository */
    private $freeProductParticipantRepository;

    public function __construct(FreeProductParticipantRepository $freeProductParticipantRepo)
    {
        $this->freeProductParticipantRepository = $freeProductParticipantRepo;
    }

    /**
     * Display a listing of the FreeProductParticipant.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->freeProductParticipantRepository->pushCriteria(new RequestCriteria($request));
        $freeProductParticipants = $this->freeProductParticipantRepository->all();

        return view('free_product_participants.index')
            ->with('freeProductParticipants', $freeProductParticipants);
    }

    /**
     * Show the form for creating a new FreeProductParticipant.
     *
     * @return Response
     */
    public function create()
    {
        return view('free_product_participants.create');
    }

    /**
     * Store a newly created FreeProductParticipant in storage.
     *
     * @param CreateFreeProductParticipantRequest $request
     *
     * @return Response
     */
    public function store(CreateFreeProductParticipantRequest $request)
    {
        $input = $request->all();

        $freeProductParticipant = $this->freeProductParticipantRepository->create($input);

        Flash::success('Free Product Participant saved successfully.');

        return redirect(route('freeProductParticipants.index'));
    }

    /**
     * Display the specified FreeProductParticipant.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $freeProductParticipant = $this->freeProductParticipantRepository->findWithoutFail($id);

        if (empty($freeProductParticipant)) {
            Flash::error('Free Product Participant not found');

            return redirect(route('freeProductParticipants.index'));
        }

        return view('free_product_participants.show')->with('freeProductParticipant', $freeProductParticipant);
    }

    /**
     * Show the form for editing the specified FreeProductParticipant.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $freeProductParticipant = $this->freeProductParticipantRepository->findWithoutFail($id);

        if (empty($freeProductParticipant)) {
            Flash::error('Free Product Participant not found');

            return redirect(route('freeProductParticipants.index'));
        }

        return view('free_product_participants.edit')->with('freeProductParticipant', $freeProductParticipant);
    }

    /**
     * Update the specified FreeProductParticipant in storage.
     *
     * @param  int              $id
     * @param UpdateFreeProductParticipantRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFreeProductParticipantRequest $request)
    {
        $freeProductParticipant = $this->freeProductParticipantRepository->findWithoutFail($id);

        if (empty($freeProductParticipant)) {
            Flash::error('Free Product Participant not found');

            return redirect(route('freeProductParticipants.index'));
        }

        $freeProductParticipant = $this->freeProductParticipantRepository->update($request->all(), $id);

        Flash::success('Free Product Participant updated successfully.');

        return redirect(route('freeProductParticipants.index'));
    }

    /**
     * Remove the specified FreeProductParticipant from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $freeProductParticipant = $this->freeProductParticipantRepository->findWithoutFail($id);

        if (empty($freeProductParticipant)) {
            Flash::error('Free Product Participant not found');

            return redirect(route('freeProductParticipants.index'));
        }

        $this->freeProductParticipantRepository->delete($id);

        Flash::success('Free Product Participant deleted successfully.');

        return redirect(route('freeProductParticipants.index'));
    }
}
