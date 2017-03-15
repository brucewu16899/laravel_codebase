<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductOffer
 * @package App\Models
 * @version March 15, 2017, 1:23 am UTC
 */
class ProductOffer extends Model
{
    use SoftDeletes;

    public $table = 'product_offers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'product_id',
        'day_start',
        'day_end',
        'precentage',
        'price',
        'quantity',
        'product_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'day_start' => 'datetime',
        'day_end' => 'datetime',
        'precentage' => 'double',
        'price' => 'double',
        'quantity' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
