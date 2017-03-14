<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MessengerThread
 * @package App\Models
 * @version March 14, 2017, 4:56 pm UTC
 */
class MessengerThread extends Model
{
    use SoftDeletes;

    public $table = 'messenger_threads';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'subject'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'subject' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
