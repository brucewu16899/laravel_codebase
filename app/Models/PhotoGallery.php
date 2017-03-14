<?php

namespace Fully\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PhotoGallery
 * @package Fully\Models
 * @version March 14, 2017, 10:38 am UTC
 */
class PhotoGallery extends Model
{
    use SoftDeletes;

    public $table = 'photo_galleries';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'slug',
        'content',
        'is_published',
        'lang'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'slug' => 'string',
        'content' => 'string',
        'is_published' => 'boolean',
        'lang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'lang' => 'exit'
    ];

    
}
