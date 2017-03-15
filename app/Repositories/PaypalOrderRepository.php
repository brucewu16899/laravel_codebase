<?php

namespace App\Repositories;

use App\Models\PaypalOrder;
use InfyOm\Generator\Common\BaseRepository;

class PaypalOrderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'payment_id',
        'amount',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PaypalOrder::class;
    }
}
