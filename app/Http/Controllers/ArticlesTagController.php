<?php

namespace Fully\Http\Controllers;

use Fully\Http\Requests\CreateArticlesTagRequest;
use Fully\Http\Requests\UpdateArticlesTagRequest;
use Fully\Repositories\ArticlesTagRepository;
use Fully\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ArticlesTagController extends AppBaseController
{
    /** @var  ArticlesTagRepository */
    private $articlesTagRepository;

    public function __construct(ArticlesTagRepository $articlesTagRepo)
    {
        $this->articlesTagRepository = $articlesTagRepo;
    }

    /**
     * Display a listing of the ArticlesTag.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->articlesTagRepository->pushCriteria(new RequestCriteria($request));
        $articlesTags = $this->articlesTagRepository->all();

        return view('articles_tags.index')
            ->with('articlesTags', $articlesTags);
    }

    /**
     * Show the form for creating a new ArticlesTag.
     *
     * @return Response
     */
    public function create()
    {
        return view('articles_tags.create');
    }

    /**
     * Store a newly created ArticlesTag in storage.
     *
     * @param CreateArticlesTagRequest $request
     *
     * @return Response
     */
    public function store(CreateArticlesTagRequest $request)
    {
        $input = $request->all();

        $articlesTag = $this->articlesTagRepository->create($input);

        Flash::success('Articles Tag saved successfully.');

        return redirect(route('articlesTags.index'));
    }

    /**
     * Display the specified ArticlesTag.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $articlesTag = $this->articlesTagRepository->findWithoutFail($id);

        if (empty($articlesTag)) {
            Flash::error('Articles Tag not found');

            return redirect(route('articlesTags.index'));
        }

        return view('articles_tags.show')->with('articlesTag', $articlesTag);
    }

    /**
     * Show the form for editing the specified ArticlesTag.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $articlesTag = $this->articlesTagRepository->findWithoutFail($id);

        if (empty($articlesTag)) {
            Flash::error('Articles Tag not found');

            return redirect(route('articlesTags.index'));
        }

        return view('articles_tags.edit')->with('articlesTag', $articlesTag);
    }

    /**
     * Update the specified ArticlesTag in storage.
     *
     * @param  int              $id
     * @param UpdateArticlesTagRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArticlesTagRequest $request)
    {
        $articlesTag = $this->articlesTagRepository->findWithoutFail($id);

        if (empty($articlesTag)) {
            Flash::error('Articles Tag not found');

            return redirect(route('articlesTags.index'));
        }

        $articlesTag = $this->articlesTagRepository->update($request->all(), $id);

        Flash::success('Articles Tag updated successfully.');

        return redirect(route('articlesTags.index'));
    }

    /**
     * Remove the specified ArticlesTag from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $articlesTag = $this->articlesTagRepository->findWithoutFail($id);

        if (empty($articlesTag)) {
            Flash::error('Articles Tag not found');

            return redirect(route('articlesTags.index'));
        }

        $this->articlesTagRepository->delete($id);

        Flash::success('Articles Tag deleted successfully.');

        return redirect(route('articlesTags.index'));
    }
}
