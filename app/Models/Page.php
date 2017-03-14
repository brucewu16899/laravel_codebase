<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Page
 * @package App\Models
 * @version March 14, 2017, 5:07 pm UTC
 */
class Page extends Model
{
    use SoftDeletes;

    public $table = 'pages';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'slug',
        'title',
        'body_original'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'slug' => 'string',
        'title' => 'string',
        'body_original' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'body text textarea'
    ];

    
}
