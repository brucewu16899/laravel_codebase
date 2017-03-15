<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserPoint
 * @package App\Models
 * @version March 15, 2017, 2:01 am UTC
 */
class UserPoint extends Model
{
    use SoftDeletes;

    public $table = 'user_points';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'action_type_id',
        'source_id',
        'points',
        'user_id',
        'action_type_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'action_type_id' => 'integer',
        'source_id' => 'integer',
        'points' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'action_type_id integer:unsigned',
        'action_type_id' => 'exit',
        'user_id' => 'exit'
    ];

    
}
