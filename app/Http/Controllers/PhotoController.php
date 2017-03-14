<?php

namespace Fully\Http\Controllers;

use Fully\Http\Requests\CreatePhotoRequest;
use Fully\Http\Requests\UpdatePhotoRequest;
use Fully\Repositories\PhotoRepository;
use Fully\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PhotoController extends AppBaseController
{
    /** @var  PhotoRepository */
    private $photoRepository;

    public function __construct(PhotoRepository $photoRepo)
    {
        $this->photoRepository = $photoRepo;
    }

    /**
     * Display a listing of the Photo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->photoRepository->pushCriteria(new RequestCriteria($request));
        $photos = $this->photoRepository->all();

        return view('photos.index')
            ->with('photos', $photos);
    }

    /**
     * Show the form for creating a new Photo.
     *
     * @return Response
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created Photo in storage.
     *
     * @param CreatePhotoRequest $request
     *
     * @return Response
     */
    public function store(CreatePhotoRequest $request)
    {
        $input = $request->all();

        $photo = $this->photoRepository->create($input);

        Flash::success('Photo saved successfully.');

        return redirect(route('photos.index'));
    }

    /**
     * Display the specified Photo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $photo = $this->photoRepository->findWithoutFail($id);

        if (empty($photo)) {
            Flash::error('Photo not found');

            return redirect(route('photos.index'));
        }

        return view('photos.show')->with('photo', $photo);
    }

    /**
     * Show the form for editing the specified Photo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $photo = $this->photoRepository->findWithoutFail($id);

        if (empty($photo)) {
            Flash::error('Photo not found');

            return redirect(route('photos.index'));
        }

        return view('photos.edit')->with('photo', $photo);
    }

    /**
     * Update the specified Photo in storage.
     *
     * @param  int              $id
     * @param UpdatePhotoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePhotoRequest $request)
    {
        $photo = $this->photoRepository->findWithoutFail($id);

        if (empty($photo)) {
            Flash::error('Photo not found');

            return redirect(route('photos.index'));
        }

        $photo = $this->photoRepository->update($request->all(), $id);

        Flash::success('Photo updated successfully.');

        return redirect(route('photos.index'));
    }

    /**
     * Remove the specified Photo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $photo = $this->photoRepository->findWithoutFail($id);

        if (empty($photo)) {
            Flash::error('Photo not found');

            return redirect(route('photos.index'));
        }

        $this->photoRepository->delete($id);

        Flash::success('Photo deleted successfully.');

        return redirect(route('photos.index'));
    }
}
