<?php

namespace App\Repositories;

use App\Models\TypeReference;
use InfyOm\Generator\Common\BaseRepository;

class TypeReferenceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'type',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TypeReference::class;
    }
}
