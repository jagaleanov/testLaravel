<?php

namespace App\Http\Controllers\api;

use App\Models\Runner;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RunnerController extends Controller
{
    public function index(Request $request)
    {

        $validator = Validator::make($request->all(), ['document_type' => ['required', Rule::in(['TI', 'CC', 'CE', 'PAS'])],]);

        $validator->sometimes('document_number', 'required|string', function ($input) {
            return $input->document_type === 'PAS';
        });

        $validator->sometimes('document_number', 'required|numeric', function ($input) {
            return $input->document_type !== 'PAS';
        });

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $runner = Runner::where([
            ['document_number', $validator->validated()['document_number']],
            ['document_type', $validator->validated()['document_type']],
        ])->get();

        if (is_null($runner)) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        return response()->json($runner, 200);
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'document_number' => 'required',
            'document_type' => 'required',
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'birthdate' => 'required',
            'blood' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'eps' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        } else {
            $runner = Runner::create($request->validated());
            return response()->json($runner, 201);
        }
    }

    public function show(Runner $runner)
    {
        if (is_null($runner)) {
            return response()->json(['message' => 'Record not found'], 404);
        }
        return response()->json($runner, 200);
    }

    public function update(Request $request, Runner $runner)
    {
        $validator = Validator::make($request->all(), [
            'document_number' => 'required',
            'document_type' => 'required',
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'birthdate' => 'required',
            'blood' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'eps' => 'required',
        ]);

        if (is_null($runner)) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        } else {
            $runner->update($request->validated());
            return response()->json($runner, 200);
        }
    }
}
