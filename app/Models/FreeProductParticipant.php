<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FreeProductParticipant
 * @package App\Models
 * @version March 15, 2017, 1:48 am UTC
 */
class FreeProductParticipant extends Model
{
    use SoftDeletes;

    public $table = 'free_product_participants';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'freeproduct_id',
        'user_id',
        'status',
        'user_id',
        'freeproduct_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'freeproduct_id' => 'integer',
        'user_id' => 'integer',
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
