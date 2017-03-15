<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 * @version March 15, 2017, 1:19 am UTC
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'category_id' => 'integer',
        'user_id' => 'integer',
        'parent_id' => 'integer',
        'products_group' => 'integer',
        'status' => 'boolean',
        'type' => 'string',
        'name' => 'string',
        'description' => 'string',
        'price' => 'double',
        'stock' => 'integer',
        'low_stock' => 'integer',
        'bar_code' => 'string',
        'brand' => 'string',
        'condition' => 'string',
        'rate_val' => 'double',
        'rate_count' => 'integer',
        'sale_counts' => 'integer',
        'view_counts' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
