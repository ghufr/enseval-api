<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Warehouse\Inbound;

/**
 * @OA\Tag(
 *  name="Inbound",
 *  description="API Endpoint Inbound"
 * 	)
 */

class InboundController extends Controller
{

	public function find()
	{
		$result = Inbound::all();
		if (count($result) <= 0) return response()->json(["error" => true]);

		return response()->json($result);
	}

	public function findOne($id)
	{
		$result = Inbound::findOne($id);
		return response()->json($result);
	}

	public function create(Request $req)
	{

		// TODO: Find product
		// $prouct = Product::find()
		$result = Inbound::create([...$req->all()]);
		// $warehouse = Warehouse::join('warehouse', 'warehouse.id', '=', 'results.warehouse_id')->select('warehouses.warehouse_id')->where('results.warehouse_id', '=', $id)->get();

		return response()->json($result);
	}

	public function update(Request $req, $id)
	{
		$result = Inbound::findOrFail($id);
		$result->update($req->all());

		return response()->json($result);
	}


	public function delete($id)
	{
		$result = Inbound::destroy($id);

		return response()->json(['error' => $result == 0]);
	}
}
