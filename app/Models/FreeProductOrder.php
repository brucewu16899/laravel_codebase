<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FreeProductOrder
 * @package App\Models
 * @version March 15, 2017, 1:50 am UTC
 */
class FreeProductOrder extends Model
{
    use SoftDeletes;

    public $table = 'free_product_orders';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'freeproduct_id',
        'order_id',
        'order_id',
        'freeproduct_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'freeproduct_id' => 'integer',
        'order_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'freeproduct_id' => 'exit'
    ];

    
}
