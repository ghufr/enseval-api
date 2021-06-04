<?php

namespace App\Http\Controllers\Logistics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logistics\Pickup;

class PickupController extends Controller
{

	public function find()
	{
		$result = Pickup::all();
		return response()->json($result);
	}

	public function findOne($id)
	{
		$result = Pickup::find($id);

		if (!$result) return response(404)->json(["error" => true]);

		return response()->json($result);
	}


	public function create(Request $req)
	{
		$result = new Pickup();

		// TODO: Create

		$save = $result->save();

		if (!$save) return response()->json(['success' => false]);
		return response()->json($result);
	}

	public function delete($id)
	{
		$result = Pickup::destroy($id);
		return response()->json(['error' => $result == 0]);
	}
	public function update(Request $req, $id)
	{
		$result = Pickup::find($id);
		if (!$result) return response(404)->json(["error" => true]);

		// TODO: Edit

		return response()->json($result);
	}
}
