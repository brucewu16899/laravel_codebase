<?php

namespace App\Repositories;

use App\Models\VirtualProduct;
use InfyOm\Generator\Common\BaseRepository;

class VirtualProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'key',
        'url',
        'amount',
        'expiration_date',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return VirtualProduct::class;
    }
}
