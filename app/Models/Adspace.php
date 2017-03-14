<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Adspace
 * @package App\Models
 * @version March 14, 2017, 5:03 pm UTC
 */
class Adspace extends Model
{
    use SoftDeletes;

    public $table = 'adspaces';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'adblock_id',
        'order',
        'position',
        'route'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'adblock_id' => 'integer',
        'order' => 'integer',
        'position' => 'string',
        'route' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'route' => 'exit'
    ];

    
}
