<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts(Request $request){
        // Set the number of items per page (you can adjust this as needed)
        $perPage = $request->input('per_page',10);

        // Retrieve the paginated products
        $products = Product::paginate($perPage);

        return response()->json($products);
    }

public function addProduct(Request $request)
{
    $data = $request->validate([
        'product_name' => 'required|string',
        'grade' => 'required|string',
        'status' => 'required|in:Active,Inactive',
    ]);

    // Create a new product using the validated data
    $product = Product::create($data);

    return response()->json($product);

}

public function deleteProduct(Request $request, $id)
{
    // Find the product by its ID
    $product = Product::find($id);

    if (!$product) {
        return response()->json(['message' => 'Product not found'], 404);
    }

    // Delete the product
    $product->delete();

    return response()->json(['message' => 'Product deleted']);
}

}