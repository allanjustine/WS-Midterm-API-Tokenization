<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Inventory
 * @package App\Models
 * @version October 26, 2021, 12:44 pm UTC
 *
 * @property string $ProductName
 * @property string $PartNumber
 * @property string $ProductLabel
 * @property string $StartingInventory
 * @property string $InventoryReceived
 * @property string $InventoryShipped
 * @property string $InventoryOnHand
 * @property string $MinimumRequired
 */
class Inventory extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'inventory';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ProductName' => 'string',
        'PartNumber' => 'string',
        'ProductLabel' => 'string',
        'StartingInventory' => 'date',
        'InventoryReceived' => 'string',
        'InventoryShipped' => 'string',
        'InventoryOnHand' => 'string',
        'MinimumRequired' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ProductName' => 'required|string|max:255',
        'PartNumber' => 'required|string|max:255',
        'ProductLabel' => 'required|string|max:255',
        'StartingInventory' => 'required',
        'InventoryReceived' => 'required|string|max:255',
        'InventoryShipped' => 'required|string|max:255',
        'InventoryOnHand' => 'required|string|max:255',
        'MinimumRequired' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
