<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    { return Product::all(); }
    public function show(Product $product)
    { return $product; }
    public function store(Request $request)
    { return response()->json($product, 201); }
    public function update(Request $request, Product $article)
    { $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json($product, 200); }
    public function delete(Request $request, $id)
    { $product = Product::findOrFail($id);
        $product->delete(); return 204; }
}
