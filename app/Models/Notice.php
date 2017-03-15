<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Notice
 * @package App\Models
 * @version March 15, 2017, 1:56 am UTC
 */
class Notice extends Model
{
    use SoftDeletes;

    public $table = 'notices';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'sender_id',
        'action_type_id',
        'source_id',
        'status',
        'user_id',
        'sender_id',
        'action_type_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'sender_id' => 'integer',
        'action_type_id' => 'integer',
        'source_id' => 'integer',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'action_type_id' => 'exit'
    ];

    
}
