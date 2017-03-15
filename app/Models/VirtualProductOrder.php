<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class VirtualProductOrder
 * @package App\Models
 * @version March 15, 2017, 1:43 am UTC
 */
class VirtualProductOrder extends Model
{
    use SoftDeletes;

    public $table = 'virtual_product_orders';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'order_id',
        'virtual_product_id',
        'status',
        'email',
        'order_id',
        'virtual_product_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'order_id' => 'integer',
        'virtual_product_id' => 'integer',
        'status' => 'boolean',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'virtual_product_id' => 'exit'
    ];

    
}
