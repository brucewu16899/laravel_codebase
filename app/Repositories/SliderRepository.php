<?php

namespace Fully\Repositories;

use Fully\Models\Slider;
use InfyOm\Generator\Common\BaseRepository;

class SliderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'path',
        'file_name',
        'file_size',
        'order',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Slider::class;
    }
}
