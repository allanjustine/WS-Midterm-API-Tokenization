<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Inventory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Flash;
use Response;

class InventoryController extends Controller {

    public $successStatus = 200;

    public function getAllInventories(Request $request) {
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        // $user = User::where('id', $userid)->where('remember_token', $token)->first();

        $inventory = DB::table('inventory')
                        ->leftJoin('users', 'inventory.id', '=', 'users.id')
                        ->select('inventory.id', 'inventory.ProductName', 'inventory.PartNumber', 'inventory.ProductLabel', 'inventory.StartingInventory', 'inventory.InventoryReceived', 'inventory.InventoryShipped', 'inventory.InventoryOnHand', 'inventory.MinimumRequired', 'inventory.created_at', 'inventory.updated_at', 'inventory.id')
                        ->get();

        return response()->json($inventory, $this->successStatus);

        // if ($user != null) {
        //     // $inventory = Inventory::all();
        //     $inventory = DB::table('inventory')
        //                 ->leftJoin('users', 'inventory.id', '=', 'users.id')
        //                 ->select('inventory.id', 'inventory.ProductName', 'inventory.PartNumber', 'inventory.ProductLabel', 'inventory.StartingInventory', 'inventory.InventoryReceived', 'inventory.InventoryShipped', 'inventory.InventoryOnHand', 'inventory.MinimumRequired', 'inventory.created_at', 'inventory.updated_at', 'inventory.id')
        //                 ->get();

        //     return response()->json($inventory, $this->successStatus);
        // } else {
        //     return response()->json(['response' => 'Bad Call'], 501);
        // }
    }

    public function getInventory(Request $request) {
        $id = $request['iid']; // iid = inventory id
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $inventory = Inventory::where('id', $id)->first();

            if ($inventory != null) {
                return response()->json($inventory, $this->successStatus);
            } else {
                return response()->json(['response' => 'Inventory not found!'], 404);
            }
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }
    }

    public function searchInventory(Request $request) {
        $inventoryno = $request['i']; // i = inventoryno
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $inventory = Inventory::where('ProductName', 'LIKE', '%' . $inventoryno . '%')
                ->orWhere('InventoryShipped', 'LIKE', '%' . $inventoryno . '%')
                ->get();
            // SELECT * FROM inventory WHERE description LIKE '%studentno%' OR title LIKE '%studentno%'
            if ($inventory != null) {
                return response()->json($inventory, $this->successStatus);
            } else {
                return response()->json(['response' => 'Inventory not found!'], 404);
            }
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }
    }
}
