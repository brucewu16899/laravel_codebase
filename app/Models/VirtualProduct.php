<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class VirtualProduct
 * @package App\Models
 * @version March 15, 2017, 1:40 am UTC
 */
class VirtualProduct extends Model
{
    use SoftDeletes;

    public $table = 'virtual_products';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'product_id',
        'key',
        'url',
        'amount',
        'expiration_date',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'key' => 'string',
        'url' => 'string',
        'amount' => 'integer',
        'expiration_date' => 'datetime',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
