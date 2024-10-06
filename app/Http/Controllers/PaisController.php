<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paises = DB::table('tb_pais')->get();
    return view('paises.index', ['paises' => $paises]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pais = new Pais();
        $pais->pais_codi = $request->pais_codi;
        $pais->pais_nomb = $request->pais_nomb;
        $pais->pais_capi = $request->pais_capi;
        $pais->save();
    
        return redirect()->route('paises.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pais = Pais::find($id);
        $pais->pais_nomb = $request->pais_nomb;
        $pais->pais_capi = $request->pais_capi;
        $pais->save();
    
        return redirect()->route('paises.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
