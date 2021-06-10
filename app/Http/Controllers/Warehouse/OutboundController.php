<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Warehouse\Outbound;


/**
 * @OA\Tag(
 *  name="Outbound",
 *  description="API Endpoint Outbound"
 * 	)
 */
class OutboundController extends Controller
{
	public function find()
	{
		$result = Outbound::all();
		if (count($result) <= 0) return response()->json(["error" => true]);

		return response()->json($result);
	}

	public function findOne($id)
	{
		$result = Outbound::findOne($id);
		return response()->json($result);
	}

	public function create(request $req)
	{
		$result = Outbound::create(
			[
				"outbound_id" => $req->outbound_id,
				"warehouse_id" => $req->warehouse_id,
				"vehicle_id" => $req->vehicle_id,
				"out_date" => $req->out_date,
				"address" => $req->address,
				"quantity_out" => $req->quantity_out
			]
		);
		return response()->json($result);
	}


	public function update(Request $req, $id)
	{
		$result = Outbound::findOrFail($id);
		$result->update($req->all());

		return response()->json($result);
	}

	public function delete($id)
	{
		$result = Outbound::destroy($id);

		return response()->json($result);
	}
}
