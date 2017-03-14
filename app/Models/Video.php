<?php

namespace Fully\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Video
 * @package Fully\Models
 * @version March 14, 2017, 11:15 am UTC
 */
class Video extends Model
{
    use SoftDeletes;

    public $table = 'videos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'slug',
        'video_id',
        'type',
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
        'video_id' => 'string',
        'type' => 'string',
        'lang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type' => 'lang string,20 text'
    ];

    
}
