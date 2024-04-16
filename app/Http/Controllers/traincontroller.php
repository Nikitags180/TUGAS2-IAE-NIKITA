<?php

namespace App\Http\Controllers;

use App\Models\train;
use Illuminate\Http\Request;

class traincontroller extends Controller
{
//Create Data
    public function create(Request $request)
    {
        $train = train::create($request ->all());
        return response()->json(['message' => 'Order Succesfully Created'], 201);
    }
//Read All Data
    public function read()
    {
        $train = train::all();
        return response() ->json($train);
    }
//Update Data
    public function update(Request $request, $id)
    {
        $train = train::findOrFail($id);
        $train->update($request->all());

        return response()->json(['message' => 'Order Succesfully Updated'], 200);
    }
//Delete Data
    public function destroy($id)
    {
        $train = train::findOrFail($id);
        $train->delete();

        return response()->json(['message' => 'Order Deleted'], 200);
    }

//Read Detail
    public function detail($id)
    {
        $train = train::findOrFail($id);
        return response()->json($train);
    }
}
