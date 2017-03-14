<?php

namespace Fully\Repositories;

use Fully\Models\Video;
use InfyOm\Generator\Common\BaseRepository;

class VideoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'video_id',
        'type',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Video::class;
    }
}
