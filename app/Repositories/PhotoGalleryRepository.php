<?php

namespace Fully\Repositories;

use Fully\Models\PhotoGallery;
use InfyOm\Generator\Common\BaseRepository;

class PhotoGalleryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'content',
        'is_published',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PhotoGallery::class;
    }
}
