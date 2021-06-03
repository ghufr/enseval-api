<?php

namespace App\Http\Controllers;

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
        // TODO: FindOne
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
        // TODO: Delete
    }
    public function update(Request $req, $id)
    {
        // TODO: Update
    }
}
