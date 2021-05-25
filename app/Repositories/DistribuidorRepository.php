<?php

namespace App\Repositories;

use App\Models\Distribuidor;
use App\Repositories\BaseRepository;

/**
 * Class DistribuidortRepository
 * @package App\Repositories
 * @version September 3, 2019, 2:20 am -04
*/

class DistribuidorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'compañia'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Distribuidor::class;
    }
}
