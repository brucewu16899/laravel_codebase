<?php

namespace App\Repositories;

use App\Models\Company;
use InfyOm\Generator\Common\BaseRepository;

class CompanyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Company::class;
    }
}
