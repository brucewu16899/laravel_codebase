<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Participant
 * @package App\Models
 * @version March 14, 2017, 4:59 pm UTC
 */
class Participant extends Model
{
    use SoftDeletes;

    public $table = 'participants';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'thread_id',
        'user_id',
        'last_read'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'thread_id' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
