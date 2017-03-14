<?php

namespace App\Repositories;

use App\Models\Adspace;
use InfyOm\Generator\Common\BaseRepository;

class AdspaceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'adblock_id',
        'order',
        'position',
        'route'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Adspace::class;
    }
}
