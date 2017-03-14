<?php

namespace Fully\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FormPost
 * @package Fully\Models
 * @version March 14, 2017, 10:46 am UTC
 */
class FormPost extends Model
{
    use SoftDeletes;

    public $table = 'form_posts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'sender_name_surname',
        'sender_email',
        'sender_phone_number',
        'subject',
        'message',
        'create_ip',
        'is_answered',
        'lang'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'sender_name_surname' => 'string',
        'sender_email' => 'string',
        'sender_phone_number' => 'string',
        'subject' => 'string',
        'message' => 'string',
        'create_ip' => 'string',
        'is_answered' => 'boolean',
        'lang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'is_answered' => 'lang string,20 text',
        'lang' => 'exit'
    ];

    
}
