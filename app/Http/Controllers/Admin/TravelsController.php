<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\TravelsRequest;
use Illuminate\Http\Request;
use App\Models\Travels;
use App\Http\Resources\TravelsResource;

class TravelsController extends Controller
{
    public function store(TravelsRequest $request)
    {
        $travel = Travels::create($request->validated());
        return new TravelsResource($travel);
    }
}
