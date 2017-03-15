<?php

namespace App\Repositories;

use App\Models\ActionType;
use InfyOm\Generator\Common\BaseRepository;

class ActionTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'source_type',
        'action'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ActionType::class;
    }
}
