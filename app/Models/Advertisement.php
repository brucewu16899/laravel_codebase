<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Advertisement
 * @package App\Models
 * @version March 14, 2017, 5:05 pm UTC
 */
class Advertisement extends Model
{
    use SoftDeletes;

    public $table = 'advertisements';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'adspace_id',
        'enabled',
        'body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'adspace_id' => 'integer',
        'enabled' => 'boolean',
        'body' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'adspace_id integer:index text'
    ];

    
}
