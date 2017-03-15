<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TypeReference
 * @package App\Models
 * @version March 15, 2017, 1:07 am UTC
 */
class TypeReference extends Model
{
    use SoftDeletes;

    public $table = 'type_references';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'type',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'type' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
