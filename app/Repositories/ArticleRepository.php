<?php

namespace Fully\Repositories;

use Fully\Models\Article;
use InfyOm\Generator\Common\BaseRepository;

class ArticleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'content',
        'slug',
        'category_id',
        'meta_keywords',
        'meta_description',
        'is_published',
        'path',
        'file_name',
        'file_size'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Article::class;
    }
}
