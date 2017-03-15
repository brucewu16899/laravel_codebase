<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Log
 * @package App\Models
 * @version March 15, 2017, 1:53 am UTC
 */
class Log extends Model
{
    use SoftDeletes;

    public $table = 'logs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'action_type_id',
        'source_id',
        'user_id',
        'details',
        'action_type_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'action_type_id' => 'integer',
        'source_id' => 'integer',
        'user_id' => 'integer',
        'details' => 'string'
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
