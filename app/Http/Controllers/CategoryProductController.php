<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index(Category $category):JsonResponse
    {
        return $this->response([$category->products()->cursorPaginate(25)]);
    }
}
