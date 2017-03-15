<?php

namespace App\Repositories;

use App\Models\ProductDetail;
use InfyOm\Generator\Common\BaseRepository;

class ProductDetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'input_type',
        'default_values',
        'validation_rules',
        'help_message',
        'type_products',
        'max_num_values',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProductDetail::class;
    }
}
