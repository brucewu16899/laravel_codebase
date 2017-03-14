<?php

namespace App\Repositories;

use App\Models\Message;
use InfyOm\Generator\Common\BaseRepository;

class MessageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'thread_id',
        'user_id',
        'body'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Message::class;
    }
}
