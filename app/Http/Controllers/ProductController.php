<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
	/**
	 * Retrieve All Products from the database
	 */
	public function index(): JsonResponse
	{
		$products = Product::all();
		return response()->json(['posts'=>$products], 200);
	}

	/**
	 * Retrieve Product from the database
	 */
	public function get(Product $product): JsonResponse
	{
		return response()->json(['product'=>$product], 200);
	}

	/**
	 * Store Product in the database
	 */
	public function store(StoreProductRequest $request): JsonResponse
	{
		$product = Product::create($request->validated());
		return response()->json($product, 201);
	}

	/**
	 * Update Product in the database
	 */
	public function update(UpdateProductRequest $request, Product $product): JsonResponse
	{
		$product->update($request->validated());
		return response()->json(status: 204);
	}

	/**
	 * Destroy Product in the database
	 */
	public function destroy(Product $product): JsonResponse
	{
		$product->delete();
		return response()->json(status: 204);
	}
}
