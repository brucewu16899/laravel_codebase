<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Stat
 * @package App\Models
 * @version March 14, 2017, 5:08 pm UTC
 */
class Stat extends Model
{
    use SoftDeletes;

    public $table = 'stats';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'day',
        'register_count',
        'thread_count',
        'reply_count',
        'image_count'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'day' => 'string',
        'register_count' => 'integer',
        'thread_count' => 'integer',
        'reply_count' => 'integer',
        'image_count' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image_count' => 'exit'
    ];

    
}
