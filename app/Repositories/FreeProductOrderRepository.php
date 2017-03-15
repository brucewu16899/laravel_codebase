<?php

namespace App\Repositories;

use App\Models\FreeProductOrder;
use InfyOm\Generator\Common\BaseRepository;

class FreeProductOrderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'freeproduct_id',
        'order_id',
        'order_id',
        'freeproduct_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FreeProductOrder::class;
    }
}
