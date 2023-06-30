<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
{
    $product = Product::create([
        'name' => 'Product Test',
        'price' => 9.99,
        'category_id' => 1, // ID da categoria associada ao produto
    ]);

    return response()->json($product, 201);
}

    /**
     * Display the specified product.
     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return response()->json($product, 200);
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json(null, 204);
    }
}
