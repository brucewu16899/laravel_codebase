<?php

namespace Fully\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Slider
 * @package Fully\Models
 * @version March 14, 2017, 11:05 am UTC
 */
class Slider extends Model
{
    use SoftDeletes;

    public $table = 'sliders';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'description',
        'path',
        'file_name',
        'file_size',
        'order',
        'lang'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'path' => 'string',
        'file_name' => 'string',
        'file_size' => 'integer',
        'order' => 'integer',
        'lang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'description text textarea',
        'lang' => 'exit'
    ];

    
}
