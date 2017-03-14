<?php

namespace Fully\Repositories;

use Fully\Models\FormPost;
use InfyOm\Generator\Common\BaseRepository;

class FormPostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sender_name_surname',
        'sender_email',
        'sender_phone_number',
        'subject',
        'message',
        'create_ip',
        'is_anwsered',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FormPost::class;
    }
}
