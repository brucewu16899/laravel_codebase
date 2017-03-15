<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CompanyFeature
 * @package App\Models
 * @version March 15, 2017, 2:14 am UTC
 */
class CompanyFeature extends Model
{
    use SoftDeletes;

    public $table = 'company_features';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'company_id',
        'description',
        'company_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'company_id' => 'integer',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'company_id' => 'exit'
    ];

    
}
