<?php

namespace App\Repositories;

use App\Models\Stat;
use InfyOm\Generator\Common\BaseRepository;

class StatRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'day',
        'register_count',
        'thread_count',
        'reply_count',
        'image_count'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Stat::class;
    }
}
