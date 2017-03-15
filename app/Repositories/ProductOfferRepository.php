<?php

namespace App\Repositories;

use App\Models\ProductOffer;
use InfyOm\Generator\Common\BaseRepository;

class ProductOfferRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'day_start',
        'day_end',
        'precentage',
        'price',
        'quantity',
        'product_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProductOffer::class;
    }
}
