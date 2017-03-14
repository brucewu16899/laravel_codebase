<?php

namespace App\Repositories;

use App\Models\MessengerThread;
use InfyOm\Generator\Common\BaseRepository;

class MessengerThreadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'subject'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MessengerThread::class;
    }
}
