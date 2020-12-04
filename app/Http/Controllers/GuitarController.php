<?php

namespace App\Http\Controllers;

use App\Models\Guitar;
use Illuminate\Http\Request;
use App\Http\Resources\GuitarResource;

class GuitarController extends Controller
{
    public function index()
    {
        $guitar = Guitar::orderBy('brand')->get();
        return GuitarResource::collection($guitar);
    }

    public function show(Guitar $guitar){
        return new GuitarResource($guitar);
    }

    protected function validateRequest()
    {
        return request()->validate([
            'brand' => 'required|min:5|max:50',
            'price' => 'required|integer|min:100',
        ]);
    }

    public function store()
    {
        $data = $this->validateRequest();
        $guitar = Guitar::create($data);
        return new GuitarResource($guitar);
    }

    public function update(Gutiar $guitar)
    {
        $data = $this->validateRequest();
        $guitar -> update($data);
        return new GuitarResource($guitar);
    }

    public function destroy(Guitar $guitar)
    {
        $guitar -> delete();
        return response()->noContent();
    }
}
