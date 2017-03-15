<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FreeProduct
 * @package App\Models
 * @version March 15, 2017, 1:45 am UTC
 */
class FreeProduct extends Model
{
    use SoftDeletes;

    public $table = 'free_products';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'description',
        'start_date',
        'end_date',
        'participation_cost',
        'min_participants',
        'max_participants',
        'max_participations_per_user',
        'draw_number',
        'draw_date',
        'status',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'description' => 'string',
        'start_date' => 'date',
        'end_date' => 'date',
        'participation_cost' => 'integer',
        'min_participants' => 'integer',
        'max_participants' => 'integer',
        'max_participations_per_user' => 'integer',
        'draw_number' => 'integer',
        'draw_date' => 'date',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
