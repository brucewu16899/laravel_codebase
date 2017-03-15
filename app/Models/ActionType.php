<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ActionType
 * @package App\Models
 * @version March 15, 2017, 1:51 am UTC
 */
class ActionType extends Model
{
    use SoftDeletes;

    public $table = 'action_types';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'source_type',
        'action'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'source_type' => 'string',
        'action' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'action' => 'exit'
    ];

    
}
