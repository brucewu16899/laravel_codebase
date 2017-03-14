<?php

namespace Fully\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class News
 * @package Fully\Models
 * @version March 14, 2017, 10:57 am UTC
 */
class News extends Model
{
    use SoftDeletes;

    public $table = 'news';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'content',
        'slug',
        'datetime',
        'is_published',
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
        'content' => 'string',
        'slug' => 'string',
        'datetime' => 'date',
        'is_published' => 'boolean',
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
        'title' => 'content text textarea',
        'lang' => 'exit'
    ];

    
}
