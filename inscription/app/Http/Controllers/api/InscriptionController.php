<?php

namespace App\Http\Controllers\api;

use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreInscriptionPost;

class InscriptionController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            //'document_number' => 'required',
            //'document_type' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        } else {
            $inscription = Inscription::create($request->validated());
            return response()->json($inscription, 201);
        }
    }

    public function show(Inscription $inscription)
    {
        if (is_null($inscription)) {
            return response()->json(['message' => 'Record not found'], 404);
        }
        return response()->json($inscription, 200);
    }

    public function update(Request $request, Inscription $inscription)
    {
        $validator = Validator::make($request->all(), [
            //'document_number' => 'required',
            //'document_type' => 'required',
        ]);

        if (is_null($inscription)) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        } else {
            $inscription->update($request->validated());
            return response()->json($inscription, 200);
        }
    }
    
    public function fromRunner($runner_id)
    {
        $inscriptions = Inscription::where([
            ['runner_id', $runner_id],
        ])->get();

        if (is_null($inscriptions)) {
            return response()->json(['message' => 'Record not found'], 404);
        }
        
        return response()->json($inscriptions, 200);
    }
}
