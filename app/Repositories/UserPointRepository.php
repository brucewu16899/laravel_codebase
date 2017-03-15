<?php

namespace App\Repositories;

use App\Models\UserPoint;
use InfyOm\Generator\Common\BaseRepository;

class UserPointRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'action_type_id',
        'source_id',
        'points',
        'user_id',
        'action_type_id',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserPoint::class;
    }
}
