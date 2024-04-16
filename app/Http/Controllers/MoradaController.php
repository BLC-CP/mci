<?php

namespace App\Http\Controllers;

use App\Models\Morada;
use Illuminate\Http\Request;

class MoradaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dt = Morada::All();
        return view('morada.index', [
            'title' => 'Pagina Morada',
            'active' => 'morada',
            'data' => $dt
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('morada.create', [
            'title' => 'Form Aumenta Dadus Morada',
            'active' => 'morada'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nrn_morada' => 'required'
        ], [
            'nrn_morada.required' => 'Naran Morada Tenke Priense'
        ]);

        Morada::create($request->All());
        return redirect()->route('morada.index')->with('status', 'Dadus Aumenta Ona');
    }

    /**
     * Display the specified resource.
     */
    public function show(Morada $morada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $dt = Morada::findOrFail($id);
        return view('morada.edit', [
            'title' => 'Form Hadia Dadus Morada',
            'active' => 'morada',
            'datas' => $dt
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nrn_morada' => 'required'
        ], [
            'nrn_morada.required' => 'Naran Morada Tenke Priense'
        ]);

        $hd = Morada::findOrFail($id);
        $hd->update($request->All());
        return redirect()->route('morada.index')->with('status', 'Dadus Hadia Ona');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $delete = Morada::findOrFail($id);
        $delete->delete();
        return redirect()->route('morada.index')->with('statusHamos', 'Dadus Hamos Ona');
    }
}
