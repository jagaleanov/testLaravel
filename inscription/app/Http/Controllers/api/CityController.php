<?php

namespace App\Http\Controllers\api;

use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function fromState($name)
    {
        $state =  State::where('name',$name)->first();

        if (is_null($state)) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        $cities =  City::where('state_id',$state->id)->get();

        if (is_null($cities)) {
            return response()->json(['message' => 'Record not found'], 404);
        }
        
        return response()->json($cities, 200);
    }
}
