<?php

namespace Fully\Repositories;

use Fully\Models\Tag;
use InfyOm\Generator\Common\BaseRepository;

class TagRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tag::class;
    }
}
