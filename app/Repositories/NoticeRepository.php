<?php

namespace App\Repositories;

use App\Models\Notice;
use InfyOm\Generator\Common\BaseRepository;

class NoticeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'sender_id',
        'action_type_id',
        'source_id',
        'status',
        'user_id',
        'sender_id',
        'action_type_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Notice::class;
    }
}
