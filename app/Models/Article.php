<?php

namespace Fully\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Article
 * @package Fully\Models
 * @version March 14, 2017, 10:01 am UTC
 */
class Article extends Model
{
    use SoftDeletes;

    public $table = 'articles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'content',
        'slug',
        'category_id',
        'meta_keywords',
        'meta_description',
        'is_published',
        'path',
        'file_name',
        'file_size'
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
        'category_id' => 'integer',
        'meta_keywords' => 'string',
        'meta_description' => 'string',
        'is_published' => 'boolean',
        'path' => 'string',
        'file_name' => 'string',
        'file_size' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'slug' => 'category_id integer',
        'meta_description' => 'is_published boolean radio'
    ];
}
