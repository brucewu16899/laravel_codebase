<?php

namespace App\Repositories;

use App\Models\Revision;
use InfyOm\Generator\Common\BaseRepository;

class RevisionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'revisionable_type',
        'revisionable_id',
        'user_id',
        'key',
        'old_value',
        'new_value'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Revision::class;
    }
}
