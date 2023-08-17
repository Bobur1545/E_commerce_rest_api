<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{

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
        //
    }


    public function show($id):JsonResponse
    {
        return $this->response([Product::with('stocks')->find($id)]);
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
        //
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
