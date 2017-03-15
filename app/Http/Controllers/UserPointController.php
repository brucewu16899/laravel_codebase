<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserPointRequest;
use App\Http\Requests\UpdateUserPointRequest;
use App\Repositories\UserPointRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserPointController extends AppBaseController
{
    /** @var  UserPointRepository */
    private $userPointRepository;

    public function __construct(UserPointRepository $userPointRepo)
    {
        $this->userPointRepository = $userPointRepo;
    }

    /**
     * Display a listing of the UserPoint.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userPointRepository->pushCriteria(new RequestCriteria($request));
        $userPoints = $this->userPointRepository->all();

        return view('user_points.index')
            ->with('userPoints', $userPoints);
    }

    /**
     * Show the form for creating a new UserPoint.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_points.create');
    }

    /**
     * Store a newly created UserPoint in storage.
     *
     * @param CreateUserPointRequest $request
     *
     * @return Response
     */
    public function store(CreateUserPointRequest $request)
    {
        $input = $request->all();

        $userPoint = $this->userPointRepository->create($input);

        Flash::success('User Point saved successfully.');

        return redirect(route('userPoints.index'));
    }

    /**
     * Display the specified UserPoint.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userPoint = $this->userPointRepository->findWithoutFail($id);

        if (empty($userPoint)) {
            Flash::error('User Point not found');

            return redirect(route('userPoints.index'));
        }

        return view('user_points.show')->with('userPoint', $userPoint);
    }

    /**
     * Show the form for editing the specified UserPoint.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userPoint = $this->userPointRepository->findWithoutFail($id);

        if (empty($userPoint)) {
            Flash::error('User Point not found');

            return redirect(route('userPoints.index'));
        }

        return view('user_points.edit')->with('userPoint', $userPoint);
    }

    /**
     * Update the specified UserPoint in storage.
     *
     * @param  int              $id
     * @param UpdateUserPointRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserPointRequest $request)
    {
        $userPoint = $this->userPointRepository->findWithoutFail($id);

        if (empty($userPoint)) {
            Flash::error('User Point not found');

            return redirect(route('userPoints.index'));
        }

        $userPoint = $this->userPointRepository->update($request->all(), $id);

        Flash::success('User Point updated successfully.');

        return redirect(route('userPoints.index'));
    }

    /**
     * Remove the specified UserPoint from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userPoint = $this->userPointRepository->findWithoutFail($id);

        if (empty($userPoint)) {
            Flash::error('User Point not found');

            return redirect(route('userPoints.index'));
        }

        $this->userPointRepository->delete($id);

        Flash::success('User Point deleted successfully.');

        return redirect(route('userPoints.index'));
    }
}
