<?php

namespace App\Repositories;

use App\Models\FreeProduct;
use InfyOm\Generator\Common\BaseRepository;

class FreeProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'description',
        'start_date',
        'end_date',
        'participation_cost',
        'min_participants',
        'max_participants',
        'max_participations_per_user',
        'draw_number',
        'draw_date',
        'status',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FreeProduct::class;
    }
}
