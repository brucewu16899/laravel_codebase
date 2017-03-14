<?php

namespace Fully\Repositories;

use Fully\Models\News;
use InfyOm\Generator\Common\BaseRepository;

class NewsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'content',
        'slug',
        'datetime',
        'is_published',
        'path',
        'file_name',
        'file_size',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return News::class;
    }
}
