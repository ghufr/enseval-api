<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function find()
    {
        $result = Product::all();
        return response()->json($result);
    }

    public function findOne($id)
    {
        $result = Product::find($id);

        if (!$result) return response(404)->json(["error" => true]);

        return response()->json($result);
    }

    public function create(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->weight = $request->weight;
        $product->price = $request->price;
        $product->exp_date = $request->exp_date;
        $save = $product->save();

        if (!$save) return response()->json(['success' => false]);
        return response()->json(['success' => true]);
    }

    public function delete($id)
    {
        $result = Product::destroy($id);
        return response()->json(['error' => $result == 0]);
    }
    public function update(Request $req, $id)
    {
        $result = Product::find($id);
        if (!$result) return response(404)->json(["error" => true]);

        // TODO: Edit

        return response()->json($result);
    }
}
