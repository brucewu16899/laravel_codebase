<?php

namespace Fully\Http\Controllers;

use Fully\Http\Requests\CreateFormPostRequest;
use Fully\Http\Requests\UpdateFormPostRequest;
use Fully\Repositories\FormPostRepository;
use Fully\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FormPostController extends AppBaseController
{
    /** @var  FormPostRepository */
    private $formPostRepository;

    public function __construct(FormPostRepository $formPostRepo)
    {
        $this->formPostRepository = $formPostRepo;
    }

    /**
     * Display a listing of the FormPost.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->formPostRepository->pushCriteria(new RequestCriteria($request));
        $formPosts = $this->formPostRepository->all();

        return view('form_posts.index')
            ->with('formPosts', $formPosts);
    }

    /**
     * Show the form for creating a new FormPost.
     *
     * @return Response
     */
    public function create()
    {
        return view('form_posts.create');
    }

    /**
     * Store a newly created FormPost in storage.
     *
     * @param CreateFormPostRequest $request
     *
     * @return Response
     */
    public function store(CreateFormPostRequest $request)
    {
        $input = $request->all();

        $formPost = $this->formPostRepository->create($input);

        Flash::success('Form Post saved successfully.');

        return redirect(route('formPosts.index'));
    }

    /**
     * Display the specified FormPost.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $formPost = $this->formPostRepository->findWithoutFail($id);

        if (empty($formPost)) {
            Flash::error('Form Post not found');

            return redirect(route('formPosts.index'));
        }

        return view('form_posts.show')->with('formPost', $formPost);
    }

    /**
     * Show the form for editing the specified FormPost.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $formPost = $this->formPostRepository->findWithoutFail($id);

        if (empty($formPost)) {
            Flash::error('Form Post not found');

            return redirect(route('formPosts.index'));
        }

        return view('form_posts.edit')->with('formPost', $formPost);
    }

    /**
     * Update the specified FormPost in storage.
     *
     * @param  int              $id
     * @param UpdateFormPostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFormPostRequest $request)
    {
        $formPost = $this->formPostRepository->findWithoutFail($id);

        if (empty($formPost)) {
            Flash::error('Form Post not found');

            return redirect(route('formPosts.index'));
        }

        $formPost = $this->formPostRepository->update($request->all(), $id);

        Flash::success('Form Post updated successfully.');

        return redirect(route('formPosts.index'));
    }

    /**
     * Remove the specified FormPost from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $formPost = $this->formPostRepository->findWithoutFail($id);

        if (empty($formPost)) {
            Flash::error('Form Post not found');

            return redirect(route('formPosts.index'));
        }

        $this->formPostRepository->delete($id);

        Flash::success('Form Post deleted successfully.');

        return redirect(route('formPosts.index'));
    }
}
