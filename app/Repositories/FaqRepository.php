<?php

namespace Fully\Repositories;

use Fully\Models\Faq;
use InfyOm\Generator\Common\BaseRepository;

class FaqRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'question',
        'anwser',
        'order',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Faq::class;
    }
}
