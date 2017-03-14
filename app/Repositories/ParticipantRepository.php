<?php

namespace App\Repositories;

use App\Models\Participant;
use InfyOm\Generator\Common\BaseRepository;

class ParticipantRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'thread_id',
        'user_id',
        'last_read'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Participant::class;
    }
}
