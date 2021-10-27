<?php

namespace App\Repositories;

use App\Models\Inventory;
use App\Repositories\BaseRepository;

/**
 * Class InventoryRepository
 * @package App\Repositories
 * @version October 26, 2021, 12:44 pm UTC
*/

class InventoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ProductName',
        'PartNumber',
        'ProductLabel',
        'StartingInventory',
        'InventoryReceived',
        'InventoryShipped',
        'InventoryOnHand',
        'MinimumRequired'
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
