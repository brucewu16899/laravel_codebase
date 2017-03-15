<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Order
 * @package App\Models
 * @version March 15, 2017, 1:30 am UTC
 */
class Order extends Model
{
    use SoftDeletes;

    public $table = 'orders';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'address_id',
        'seller_id',
        'status',
        'type',
        'description',
        'end_date',
        'rate',
        'rate_comment',
        'rate_mail_send',
        'user_id',
        'address_id',
        'seller_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'address_id' => 'integer',
        'seller_id' => 'integer',
        'status' => 'string',
        'type' => 'string',
        'description' => 'string',
        'end_date' => 'datetime',
        'rate' => 'integer',
        'rate_comment' => 'string',
        'rate_mail_send' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
