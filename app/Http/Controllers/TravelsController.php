<?php

namespace App\Http\Controllers;

use App\Http\Resources\TravelsResource;
use App\Models\Travels;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class TravelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $travels = Travels::where('IsPublic',true)->get();
        return TravelsResource::collection($travels);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { $validation = $request->validate(
        ['IsPublic'=>'Integer',
        'Slug'=>'required',
        'Name'=>'required',
        'NumberOfDays'=>'Integer'

        ]
    );
    if(!$validation)
    {
        return response()->json(['wrong input']);
    }
    else{
        return Travels::create($request->all());
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Travels $travels)
    {
       return $travels->Description;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travels $travels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $travel = Travels::find($id);
        $travel->update($request->all());
        return $travel;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {   $travels = Travels::where('id',$id)->get();
        $Name = '$travels->Name';
        $TravelId ='hhhh';
        Travels::destroy($id);
        return response()->json(['message' => 'Record'.$TravelId . ' deleted successfully '.$Name]);
    }
    public function showuser($id)
    {
        $user = User::where('id',$id)->first();
        return response()->json($user);
    }
}
