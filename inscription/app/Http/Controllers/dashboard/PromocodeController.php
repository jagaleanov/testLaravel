<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Promocode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePromocodePost;

class PromocodeController extends Controller
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
        $promocodes = Promocode::orderBy('id')->paginate(5);
        return view('dashboard.promocode.index', ['promocodes' => $promocodes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.promocode.create', ['promocode' => new Promocode]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePromocodePost $request)
    {
        Promocode::create($request->validated());
        return back()->with('status', 'Registro almacenado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Promocode $promocode)
    {
        return view('dashboard.promocode.show', ['promocode' => $promocode]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Promocode $promocode)
    {
        return view('dashboard.promocode.edit', ['promocode' => $promocode]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePromocodePost $request, Promocode $promocode)
    {
        $promocode->update($request->validated());
        return back()->with('status', 'Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promocode $promocode)
    {
        $promocode->delete();
        return back()->with('status', 'Registro eliminiado');
    }
}
