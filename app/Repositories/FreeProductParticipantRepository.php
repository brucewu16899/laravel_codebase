<?php

namespace App\Repositories;

use App\Models\FreeProductParticipant;
use InfyOm\Generator\Common\BaseRepository;

class FreeProductParticipantRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'freeproduct_id',
        'user_id',
        'status',
        'user_id',
        'freeproduct_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FreeProductParticipant::class;
    }
}
