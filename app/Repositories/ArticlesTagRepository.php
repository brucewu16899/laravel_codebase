<?php

namespace Fully\Repositories;

use Fully\Models\ArticlesTag;
use InfyOm\Generator\Common\BaseRepository;

class ArticlesTagRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'article_id',
        'tag_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ArticlesTag::class;
    }
}
