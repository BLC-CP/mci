<?php

namespace App\Http\Controllers;

use App\Models\Risku;
use Illuminate\Http\Request;

class RiskuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dt = Risku::All();
        return view('risku.index', [
            'title' => 'Pagina risku',
            'active' => 'risku',
            'data' => $dt
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('risku.create', [
            'title' => 'Form Aumenta Dadus Risku',
            'active' => 'risku'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nrn_risku' => 'required'
        ], [
            'nrn_risku.required' => 'Naran Risku Tenke Priense'
        ]);

        Risku::create($request->All());
        return redirect()->route('risku.index')->with('status', 'Dadus Aumenta Ona');
    }

    /**
     * Display the specified resource.
     */
    public function show(Risku $risku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dt = Risku::findOrFail($id);
        return view('risku.edit', [
            'title' => 'Form Hadia Dadus Risku',
            'active' => 'risku',
            'datas' => $dt
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nrn_risku' => 'required'
        ], [
            'nrn_risku.required' => 'Naran Risku Tenke Priense'
        ]);

        $hd = Risku::findOrFail($id);
        $hd->update($request->All());
        return redirect()->route('risku.index')->with('status', 'Dadus Hadia Ona');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Risku::findOrFail($id);
        $delete->delete();
        return redirect()->route('risku.index')->with('statusHamos', 'Dadus Hamos Ona');
    }
}
