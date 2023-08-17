<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index():JsonResponse
    {
        return $this->response([auth()->user()->favorites()->paginate(20)]);
    }

    public function store(Request $request): JsonResponse
    {
        auth()->user()->favorites()->attach($request->product_id);

        return $this->success(
            'Stored successfully'
        );
    }

    /*
     * TODO refactor responses. make standart format
     */
    public function destroy($favorite_id):JsonResponse
    {
        if(auth()->user()->hasFavorite($favorite_id)){
            auth()->user()->favorites()->detach($favorite_id);

            return $this->success(
                'Favorites have been successfully deleted from the user'
            );
        }
        return $this->error(
             'Favorites does not exist in this user',
        );
    }
}
