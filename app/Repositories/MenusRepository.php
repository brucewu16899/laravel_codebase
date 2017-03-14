<?php

namespace Fully\Repositories;

use Fully\Models\Menus;
use InfyOm\Generator\Common\BaseRepository;

class MenusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'url',
        'order',
        'parent_id',
        'type',
        'option',
        'is_published',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Menus::class;
    }
}
