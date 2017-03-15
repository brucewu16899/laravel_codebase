<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Company
 * @package App\Models
 * @version March 15, 2017, 2:12 am UTC
 */
class Company extends Model
{
    use SoftDeletes;

    public $table = 'companies';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'email',
        'contact_email',
        'sales_email',
        'support_email',
        'status',
        'name',
        'website_name',
        'slogan',
        'logo',
        'theme',
        'phone_number',
        'cell_phone',
        'address',
        'state',
        'city',
        'zip_code',
        'website',
        'twitter',
        'facebook',
        'google_plus',
        'facebook_app_id',
        'description',
        'keywords',
        'about_us',
        'refund_policy',
        'privacy_policy',
        'terms_of_service',
        'google_maps_key_api'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'email' => 'string',
        'contact_email' => 'string',
        'sales_email' => 'string',
        'support_email' => 'string',
        'status' => 'string',
        'name' => 'string',
        'website_name' => 'string',
        'slogan' => 'string',
        'logo' => 'string',
        'theme' => 'string',
        'phone_number' => 'string',
        'cell_phone' => 'string',
        'address' => 'string',
        'state' => 'string',
        'city' => 'string',
        'zip_code' => 'string',
        'website' => 'string',
        'twitter' => 'string',
        'facebook' => 'string',
        'google_plus' => 'string',
        'google_maps_key_api' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'status' => 'exit'
    ];

    
}
