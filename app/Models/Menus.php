<?php

namespace Fully\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Menus
 * @package Fully\Models
 * @version March 14, 2017, 11:07 am UTC
 */
class Menus extends Model
{
    use SoftDeletes;

    public $table = 'menus';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'url',
        'order',
        'parent_id',
        'type',
        'option',
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
        'url' => 'string',
        'order' => 'integer',
        'parent_id' => 'integer',
        'type' => 'string',
        'option' => 'string',
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

    public function getFrontMenuHTML(){
        return '还没有数据';
    }
}
