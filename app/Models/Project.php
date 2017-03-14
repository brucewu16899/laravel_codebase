<?php

namespace Fully\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Project
 * @package Fully\Models
 * @version March 14, 2017, 11:12 am UTC
 */
class Project extends Model
{
    use SoftDeletes;

    public $table = 'projects';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'description',
        'slug',
        'path',
        'file_name',
        'file_size',
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
        'slug' => 'string',
        'path' => 'string',
        'file_name' => 'string',
        'file_size' => 'integer',
        'lang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
