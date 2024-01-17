<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\toursrequest;
use App\Http\Resources\ToursResource;
use App\Models\Tours;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function store(toursrequest $request)
    {
        $Tours = Tours::create($request->validated());
        return new ToursResource($Tours);
    }
}
