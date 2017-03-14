<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessengerThreadRequest;
use App\Http\Requests\UpdateMessengerThreadRequest;
use App\Repositories\MessengerThreadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MessengerThreadController extends AppBaseController
{
    /** @var  MessengerThreadRepository */
    private $messengerThreadRepository;

    public function __construct(MessengerThreadRepository $messengerThreadRepo)
    {
        $this->messengerThreadRepository = $messengerThreadRepo;
    }

    /**
     * Display a listing of the MessengerThread.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->messengerThreadRepository->pushCriteria(new RequestCriteria($request));
        $messengerThreads = $this->messengerThreadRepository->all();

        return view('messenger_threads.index')
            ->with('messengerThreads', $messengerThreads);
    }

    /**
     * Show the form for creating a new MessengerThread.
     *
     * @return Response
     */
    public function create()
    {
        return view('messenger_threads.create');
    }

    /**
     * Store a newly created MessengerThread in storage.
     *
     * @param CreateMessengerThreadRequest $request
     *
     * @return Response
     */
    public function store(CreateMessengerThreadRequest $request)
    {
        $input = $request->all();

        $messengerThread = $this->messengerThreadRepository->create($input);

        Flash::success('Messenger Thread saved successfully.');

        return redirect(route('messengerThreads.index'));
    }

    /**
     * Display the specified MessengerThread.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $messengerThread = $this->messengerThreadRepository->findWithoutFail($id);

        if (empty($messengerThread)) {
            Flash::error('Messenger Thread not found');

            return redirect(route('messengerThreads.index'));
        }

        return view('messenger_threads.show')->with('messengerThread', $messengerThread);
    }

    /**
     * Show the form for editing the specified MessengerThread.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $messengerThread = $this->messengerThreadRepository->findWithoutFail($id);

        if (empty($messengerThread)) {
            Flash::error('Messenger Thread not found');

            return redirect(route('messengerThreads.index'));
        }

        return view('messenger_threads.edit')->with('messengerThread', $messengerThread);
    }

    /**
     * Update the specified MessengerThread in storage.
     *
     * @param  int              $id
     * @param UpdateMessengerThreadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMessengerThreadRequest $request)
    {
        $messengerThread = $this->messengerThreadRepository->findWithoutFail($id);

        if (empty($messengerThread)) {
            Flash::error('Messenger Thread not found');

            return redirect(route('messengerThreads.index'));
        }

        $messengerThread = $this->messengerThreadRepository->update($request->all(), $id);

        Flash::success('Messenger Thread updated successfully.');

        return redirect(route('messengerThreads.index'));
    }

    /**
     * Remove the specified MessengerThread from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $messengerThread = $this->messengerThreadRepository->findWithoutFail($id);

        if (empty($messengerThread)) {
            Flash::error('Messenger Thread not found');

            return redirect(route('messengerThreads.index'));
        }

        $this->messengerThreadRepository->delete($id);

        Flash::success('Messenger Thread deleted successfully.');

        return redirect(route('messengerThreads.index'));
    }
}
