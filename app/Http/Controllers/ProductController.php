<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index():JsonResponse
    {
        return $this->response([ProductResource::collection(Product::cursorPaginate(20))]);
    }


    public function create()
    {
        //
    }


    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->toArray());

        $data = new ProductResource($product);
        return $this->success("Product has been successfully created", $data);
    }


    public function show($id)
    {
        return new ProductResource(Product::with('stocks')->find($id));
    }


    public function edit(Product $product)
    {
        //
    }


    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        Gate::authorize('product:delete');

        Storage::delete($product->photos()->pluck('path')->toArray());
        $product->photos()->delete();
        $product->delete();

        return $this->success('product has been deleted successfully');
    }

    public function related(Product $product)
    {
        return $this->response(
          ProductResource::collection(Product::query()
                  ->where('category_id', $product->category_id)
                  ->limit(20)
                  ->get()
          )
        );
    }
}
