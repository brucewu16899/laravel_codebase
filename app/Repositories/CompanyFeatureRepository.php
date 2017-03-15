<?php

namespace App\Repositories;

use App\Models\CompanyFeature;
use InfyOm\Generator\Common\BaseRepository;

class CompanyFeatureRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'company_id',
        'description',
        'company_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CompanyFeature::class;
    }
}
