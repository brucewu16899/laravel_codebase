<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrderDetail
 * @package App\Models
 * @version March 15, 2017, 1:35 am UTC
 */
class OrderDetail extends Model
{
    use SoftDeletes;

    public $table = 'order_details';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'order_id',
        'product_id',
        'price',
        'quantity',
        'status',
        'delivery_date',
        'rate',
        'rate_comment',
        'product_id',
        'order_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'order_id' => 'integer',
        'product_id' => 'integer',
        'price' => 'double',
        'quantity' => 'integer',
        'delivery_date' => 'datetime',
        'rate' => 'integer',
        'rate_comment' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
