<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStatRequest;
use App\Http\Requests\UpdateStatRequest;
use App\Repositories\StatRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class StatController extends AppBaseController
{
    /** @var  StatRepository */
    private $statRepository;

    public function __construct(StatRepository $statRepo)
    {
        $this->statRepository = $statRepo;
    }

    /**
     * Display a listing of the Stat.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->statRepository->pushCriteria(new RequestCriteria($request));
        $stats = $this->statRepository->all();

        return view('stats.index')
            ->with('stats', $stats);
    }

    /**
     * Show the form for creating a new Stat.
     *
     * @return Response
     */
    public function create()
    {
        return view('stats.create');
    }

    /**
     * Store a newly created Stat in storage.
     *
     * @param CreateStatRequest $request
     *
     * @return Response
     */
    public function store(CreateStatRequest $request)
    {
        $input = $request->all();

        $stat = $this->statRepository->create($input);

        Flash::success('Stat saved successfully.');

        return redirect(route('stats.index'));
    }

    /**
     * Display the specified Stat.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $stat = $this->statRepository->findWithoutFail($id);

        if (empty($stat)) {
            Flash::error('Stat not found');

            return redirect(route('stats.index'));
        }

        return view('stats.show')->with('stat', $stat);
    }

    /**
     * Show the form for editing the specified Stat.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $stat = $this->statRepository->findWithoutFail($id);

        if (empty($stat)) {
            Flash::error('Stat not found');

            return redirect(route('stats.index'));
        }

        return view('stats.edit')->with('stat', $stat);
    }

    /**
     * Update the specified Stat in storage.
     *
     * @param  int              $id
     * @param UpdateStatRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStatRequest $request)
    {
        $stat = $this->statRepository->findWithoutFail($id);

        if (empty($stat)) {
            Flash::error('Stat not found');

            return redirect(route('stats.index'));
        }

        $stat = $this->statRepository->update($request->all(), $id);

        Flash::success('Stat updated successfully.');

        return redirect(route('stats.index'));
    }

    /**
     * Remove the specified Stat from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $stat = $this->statRepository->findWithoutFail($id);

        if (empty($stat)) {
            Flash::error('Stat not found');

            return redirect(route('stats.index'));
        }

        $this->statRepository->delete($id);

        Flash::success('Stat deleted successfully.');

        return redirect(route('stats.index'));
    }
}
