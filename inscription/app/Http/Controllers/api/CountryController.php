<?php

namespace App\Http\Controllers\api;

use App\Models\State;
use App\Models\Country;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    public function index()
    {
        $countries =  Country::all();

        if (is_null($countries)) {
            return response()->json(['message' => 'Record not found'], 404);
        }
        return response()->json($countries, 200);
    }
}
