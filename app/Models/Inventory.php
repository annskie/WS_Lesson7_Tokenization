<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Inventory
 * @package App\Models
 * @version October 28, 2021, 1:51 am UTC
 *
 * @property integer $Record
 * @property integer $PartNumber
 * @property string $ProductName
 * @property string $Manufacturer
 * @property string $ProductLabel
 * @property string $InventoryReceived
 * @property string $InventoryShipped
 * @property string $InventoryOnHand
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Record' => 'integer',
        'PartNumber' => 'integer',
        'ProductName' => 'string',
        'Manufacturer' => 'string',
        'ProductLabel' => 'string',
        'InventoryReceived' => 'string',
        'InventoryShipped' => 'string',
        'InventoryOnHand' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Record' => 'required|integer',
        'PartNumber' => 'required|integer',
        'ProductName' => 'nullable|string|max:50',
        'Manufacturer' => 'nullable|string|max:50',
        'ProductLabel' => 'nullable|string|max:50',
        'InventoryReceived' => 'nullable|string|max:50',
        'InventoryShipped' => 'nullable|string|max:50',
        'InventoryOnHand' => 'nullable|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
