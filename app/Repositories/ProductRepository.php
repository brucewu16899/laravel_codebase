<?php

namespace App\Repositories;

use App\Models\Product;
use InfyOm\Generator\Common\BaseRepository;

class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'category_id',
        'user_id',
        'parent_id',
        'products_group',
        'status',
        'type',
        'name',
        'description',
        'price',
        'stock',
        'low_stock',
        'bar_code',
        'brand',
        'condition',
        'tags',
        'features',
        'rate_val',
        'rate_count',
        'sale_counts',
        'view_counts',
        'user_id',
        'category_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Product::class;
    }
}
