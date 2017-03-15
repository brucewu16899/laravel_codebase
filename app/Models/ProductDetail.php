<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductDetail
 * @package App\Models
 * @version March 15, 2017, 1:26 am UTC
 */
class ProductDetail extends Model
{
    use SoftDeletes;

    public $table = 'product_details';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'input_type' => 'string',
        'type_products' => 'string',
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
