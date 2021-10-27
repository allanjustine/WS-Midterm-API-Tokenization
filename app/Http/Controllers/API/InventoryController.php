<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Inventory;

class InventoryController extends BaseController
{

    /**
     * @return JsonResponse
     */

    public function index(){

        $inventory = Inventory::all();

        return response()->json(['inventory'=>$inventory],200);
    }
}
