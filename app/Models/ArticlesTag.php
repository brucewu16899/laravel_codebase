<?php

namespace Fully\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ArticlesTag
 * @package Fully\Models
 * @version March 14, 2017, 10:50 am UTC
 */
class ArticlesTag extends Model
{
    use SoftDeletes;

    public $table = 'articles_tags';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'article_id',
        'tag_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'article_id' => 'integer',
        'tag_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tag_id' => 'exit'
    ];

    
}
