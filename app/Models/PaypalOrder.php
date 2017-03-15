<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PaypalOrder
 * @package App\Models
 * @version March 15, 2017, 2:07 am UTC
 */
class PaypalOrder extends Model
{
    use SoftDeletes;

    public $table = 'paypal_orders';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'payment_id',
        'amount',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'payment_id' => 'string',
        'amount' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'exit'
    ];

    
}
