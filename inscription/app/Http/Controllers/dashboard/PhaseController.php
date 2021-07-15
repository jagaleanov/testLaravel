<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Phase;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePhasePost;

class PhaseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'rol.admin']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phases = Phase::orderBy('date_in')->paginate(5);
        return view('dashboard.phase.index', ['phases' => $phases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.phase.create', ['phase' => new Phase]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhasePost $request)
    {
        //dd($request->validated()['name']);
        Phase::create($request->validated());
        return back()->with('status', 'Registro almacenado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Phase $phase)
    {
        return view('dashboard.phase.show', ['phase' => $phase]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Phase $phase)
    {
        return view('dashboard.phase.edit', ['phase' => $phase]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePhasePost $request, Phase $phase)
    {
        $phase->update($request->validated());
        return back()->with('status', 'Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phase $phase)
    {
        $phase->delete();
        return back()->with('status', 'Registro eliminiado');
    }
}
