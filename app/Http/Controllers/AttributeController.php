<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttributeRequest;
use App\Http\Requests\UpdateAttributeRequest;
use App\Models\Attribute;
use Illuminate\Support\Facades\Gate;

class AttributeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }



    public function index()
    {
        Gate::authorize('order:viewAny');
    }


    public function store(StoreAttributeRequest $request)
    {
        Gate::authorize('order:create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Attribute $attribute)
    {
        Gate::authorize('order:view');
    }

    public function update(UpdateAttributeRequest $request, Attribute $attribute)
    {
        Gate::authorize('order:update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attribute $attribute)
    {
        Gate::authorize('order:delete');
    }
}
