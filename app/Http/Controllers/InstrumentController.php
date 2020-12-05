<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use Illuminate\Http\Request;
use App\Http\Resources\InstrumentResource;

class InstrumentController extends Controller
{
    public function index()
    {
        $instrument = Instrument::orderBy('type')->get();
        return InstrumentResource::collection($instrument);
    }

    public function show(Instrument $instrument)
    {
        return new InstrumentResource($instrument);
    }

    protected function validateRequest()
    {
        return request()->validate([
           'type'=>'required|min:5|max:50',
        ]);
    }

    public function store()
    {
        $data = $this->validateRequest();
        $instrument = Instrument::create($data);
        return new InstrumentResource($instrument);
    }

    public function update(Instrument $instrument)
    {
        $data = $this->validateRequest();
        $instrument = Instrument::create($data);
        return new InstrumentResource($instrument);
    }

    public function destroy(Instrument $instrument)
    {
        $instrument -> delete();
        return response()->noContent();
    }
}
