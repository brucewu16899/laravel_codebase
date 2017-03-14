<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Revision
 * @package App\Models
 * @version March 14, 2017, 4:55 pm UTC
 */
class Revision extends Model
{
    use SoftDeletes;

    public $table = 'revisions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'revisionable_type',
        'revisionable_id',
        'user_id',
        'key',
        'old_value',
        'new_value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'revisionable_type' => 'string',
        'revisionable_id' => 'integer',
        'user_id' => 'integer',
        'key' => 'string',
        'old_value' => 'string',
        'new_value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
