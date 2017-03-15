<?php

namespace App\Repositories;

use App\Models\VirtualProductOrder;
use InfyOm\Generator\Common\BaseRepository;

class VirtualProductOrderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order_id',
        'virtual_product_id',
        'status',
        'email',
        'order_id',
        'virtual_product_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return VirtualProductOrder::class;
    }
}
