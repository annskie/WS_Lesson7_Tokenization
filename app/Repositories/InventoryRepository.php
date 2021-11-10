<?php

namespace App\Repositories;

use App\Models\Inventory;
use App\Repositories\BaseRepository;

/**
 * Class InventoryRepository
 * @package App\Repositories
 * @version October 28, 2021, 1:51 am UTC
*/

class InventoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Record',
        'PartNumber',
        'ProductName',
        'Manufacturer',
        'ProductLabel',
        'InventoryReceived',
        'InventoryShipped',
        'InventoryOnHand'
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
        return Inventory::class;
    }
}
