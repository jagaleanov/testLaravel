<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Shirt;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreShirtPost;

class ShirtController extends Controller
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
        $shirts = Shirt::paginate(5);
        return view('dashboard.shirt.index', ['shirts' => $shirts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.shirt.create', ['shirt' => new Shirt]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShirtPost $request)
    {
        Shirt::create($request->validated());
        return back()->with('status', 'Registro almacenado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Shirt $shirt)
    {
        return view('dashboard.shirt.show', ['shirt' => $shirt]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Shirt $shirt)
    {
        return view('dashboard.shirt.edit', ['shirt' => $shirt]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreShirtPost $request, Shirt $shirt)
    {
        $shirt->update($request->validated());
        return back()->with('status', 'Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shirt $shirt)
    {
        $shirt->delete();
        return back()->with('status', 'Registro eliminiado');
    }
}
