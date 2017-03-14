<?php

namespace Fully\Http\Controllers;

use Fully\Http\Requests\CreatePhotoGalleryRequest;
use Fully\Http\Requests\UpdatePhotoGalleryRequest;
use Fully\Repositories\PhotoGalleryRepository;
use Fully\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PhotoGalleryController extends AppBaseController
{
    /** @var  PhotoGalleryRepository */
    private $photoGalleryRepository;

    public function __construct(PhotoGalleryRepository $photoGalleryRepo)
    {
        $this->photoGalleryRepository = $photoGalleryRepo;
    }

    /**
     * Display a listing of the PhotoGallery.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->photoGalleryRepository->pushCriteria(new RequestCriteria($request));
        $photoGalleries = $this->photoGalleryRepository->all();

        return view('photo_galleries.index')
            ->with('photoGalleries', $photoGalleries);
    }

    /**
     * Show the form for creating a new PhotoGallery.
     *
     * @return Response
     */
    public function create()
    {
        return view('photo_galleries.create');
    }

    /**
     * Store a newly created PhotoGallery in storage.
     *
     * @param CreatePhotoGalleryRequest $request
     *
     * @return Response
     */
    public function store(CreatePhotoGalleryRequest $request)
    {
        $input = $request->all();

        $photoGallery = $this->photoGalleryRepository->create($input);

        Flash::success('Photo Gallery saved successfully.');

        return redirect(route('photoGalleries.index'));
    }

    /**
     * Display the specified PhotoGallery.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $photoGallery = $this->photoGalleryRepository->findWithoutFail($id);

        if (empty($photoGallery)) {
            Flash::error('Photo Gallery not found');

            return redirect(route('photoGalleries.index'));
        }

        return view('photo_galleries.show')->with('photoGallery', $photoGallery);
    }

    /**
     * Show the form for editing the specified PhotoGallery.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $photoGallery = $this->photoGalleryRepository->findWithoutFail($id);

        if (empty($photoGallery)) {
            Flash::error('Photo Gallery not found');

            return redirect(route('photoGalleries.index'));
        }

        return view('photo_galleries.edit')->with('photoGallery', $photoGallery);
    }

    /**
     * Update the specified PhotoGallery in storage.
     *
     * @param  int              $id
     * @param UpdatePhotoGalleryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePhotoGalleryRequest $request)
    {
        $photoGallery = $this->photoGalleryRepository->findWithoutFail($id);

        if (empty($photoGallery)) {
            Flash::error('Photo Gallery not found');

            return redirect(route('photoGalleries.index'));
        }

        $photoGallery = $this->photoGalleryRepository->update($request->all(), $id);

        Flash::success('Photo Gallery updated successfully.');

        return redirect(route('photoGalleries.index'));
    }

    /**
     * Remove the specified PhotoGallery from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $photoGallery = $this->photoGalleryRepository->findWithoutFail($id);

        if (empty($photoGallery)) {
            Flash::error('Photo Gallery not found');

            return redirect(route('photoGalleries.index'));
        }

        $this->photoGalleryRepository->delete($id);

        Flash::success('Photo Gallery deleted successfully.');

        return redirect(route('photoGalleries.index'));
    }
}
