<?php

namespace Fully\Repositories;

use Fully\Models\Photo;
use InfyOm\Generator\Common\BaseRepository;

class PhotoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'file_name',
        'title',
        'path',
        'file_size',
        'type',
        'relationship_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Photo::class;
    }
}
