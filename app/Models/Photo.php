<?php

namespace Fully\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Photo
 * @package Fully\Models
 * @version March 14, 2017, 10:41 am UTC
 */
class Photo extends Model
{
    use SoftDeletes;

    public $table = 'photos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'file_name',
        'title',
        'path',
        'file_size',
        'type',
        'relationship_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'file_name' => 'string',
        'title' => 'string',
        'path' => 'string',
        'file_size' => 'integer',
        'type' => 'string',
        'relationship_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'path string,255 text',
        'type' => 'relationship_id integer:unsigned',
        'relationship_id' => 'exit'
    ];

    
}
