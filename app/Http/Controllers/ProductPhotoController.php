<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductPhotoRequest;
use App\Models\Photo;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductPhotoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index(Product $product)
    {
        return $this->response($product->photos);
    }

    public function store(StoreProductPhotoRequest $request, Product $product)
    {
//        dd($request->allFiles());
        foreach ($request->photos as $photo){
            $path = $photo->store('products/'.$product->id, 'public');
            $full_name = $photo->getClientOriginalName();

            $product->photos()->create([
               'full_name' => $full_name,
                'path' => $path
            ]);

//            dump($photo);
        }

        return $this->success();
    }


    public function destroy(Product $product, Photo $photo)
    {
        Storage::delete($photo->path);
        $photo->delete();

        return $this->success('photo has been successfully deleted');
    }
}
