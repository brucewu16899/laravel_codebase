<?php

namespace App\Repositories;

use App\Models\Order;
use InfyOm\Generator\Common\BaseRepository;

class OrderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'address_id',
        'seller_id',
        'status',
        'type',
        'description',
        'end_date',
        'rate',
        'rate_comment',
        'rate_mail_send',
        'user_id',
        'address_id',
        'seller_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Order::class;
    }
}
