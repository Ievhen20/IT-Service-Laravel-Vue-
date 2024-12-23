<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Models\Product;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class ProductController extends Controller
{

  public function show(Request $request): Response
  {
    $perPage = $request->get('per_page', 10);
    $products = Product::paginate($perPage);

    // Ensure proper structure in the response
    return Inertia::render('Product/Edit', [
      'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
      'status' => session('status'),
      'products' => [
        'data' => $products->items(), // Products data (items)
        'current_page' => $products->currentPage(),
        'per_page' => $products->perPage(),
        'last_page' => $products->lastPage(),
        'total' => $products->total(),
      ],
    ]);
  }

  public function create(Request $request): RedirectResponse
  {
    $validated = $request->validate([
      'productName' => 'required|string|max:255',
      'description' => 'required|string',
      'price' => 'required|numeric',
      'amount' => 'required|integer',
    ]);

    Product::create($validated);

    return Redirect::route('products.show')->with([
      'status' => 'Product created successfully!',
    ]);
  }

  public function update(Request $request, $id): RedirectResponse
  {
    $product = Product::findOrFail($id);

    $validatedData = $request->validate([
      'productName' => 'required|string|max:255',
      'description' => 'required|string',
      'price' => 'required|numeric',
      'amount' => 'required|integer',
    ]);

    $product->update($validatedData);

    return Redirect::route('products.show')->with([
      'status' => 'Product updated successfully!',
    ]);
  }

  public function destroy($id): JsonResponse
  {
    $product = Product::find($id);

    if (!$product) {
      return response()->json(['error' => 'Product not found.'], 404);
    }

    $product->delete();

    return response()->json(['message' => 'Product deleted successfully.']);
  }
}
