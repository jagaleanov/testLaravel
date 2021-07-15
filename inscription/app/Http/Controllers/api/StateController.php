<?php

namespace App\Http\Controllers\api;

use App\Models\State;
use App\Http\Controllers\Controller;

class StateController extends Controller
{
    public function index()
    {
        $state =  State::all();

        if (is_null($state)) {
            return response()->json(['message' => 'Record not found'], 404);
        }
        return response()->json($state, 200);
    }
}
