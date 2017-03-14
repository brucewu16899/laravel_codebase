<?php

namespace App\Repositories;

use App\Models\Advertisement;
use InfyOm\Generator\Common\BaseRepository;

class AdvertisementRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'adspace_id',
        'enabled',
        'body'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Advertisement::class;
    }
}
