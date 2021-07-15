<?php

namespace App\Http\Controllers\api;

use App\Models\Shirt;
use App\Http\Controllers\Controller;

class ShirtController extends Controller
{
    public function index()
    {
        $shirts =  Shirt::where('status',1)->get();

        if (is_null($shirts)) {
            return response()->json(['message' => 'Record not found'], 404);
        }
        return response()->json($shirts, 200);
    }
}
