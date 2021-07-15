<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Inscription;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInscriptionPost;

class InscriptionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'rol.admin']);//access restricted
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscriptions = Inscription::orderBy('id')->paginate(5);
        return view('dashboard.inscription.index', ['inscriptions' => $inscriptions]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Inscription $inscription)
    {
        return view('dashboard.inscription.show', ['inscription' => $inscription]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscription $inscription)
    {
        return view('dashboard.inscription.edit', ['inscription' => $inscription]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreInscriptionPost $request, Inscription $inscription)
    {
        $inscription->update($request->validated());
        return back()->with('status', 'Registro actualizado');
    }
}
