<?php

namespace App\Http\Controllers;

use App\Models\Atu;
use Illuminate\Http\Request;

class AtuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dt = Atu::All();
        return view('atu.index', [
            'title' => 'Pagina Atu',
            'active' => 'atu',
            'data' => $dt
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('atu.create', [
            'title' => 'Form Aumenta Dadus Atu',
            'active' => 'atu'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nrn_atu' => 'required'
        ], [
            'nrn_atu.required' => 'Naran Atu Tenke Priense'
        ]);

        Atu::create($request->All());
        return redirect()->route('atu.index')->with('status', 'Dadus Aumenta Ona');
    }

    /**
     * Display the specified resource.
     */
    public function show(Atu $atu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dt = Atu::findOrFail($id);
        return view('atu.edit', [
            'title' => 'Form Hadia Dadus Atu',
            'active' => 'atu',
            'datas' => $dt
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nrn_atu' => 'required'
        ], [
            'nrn_atu.required' => 'Naran Atu Tenke Priense'
        ]);

        $hd = Atu::findOrFail($id);
        $hd->update($request->All());
        return redirect()->route('atu.index')->with('status', 'Dadus Hadia Ona');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Atu::findOrFail($id);
        $delete->delete();
        return redirect()->route('atu.index')->with('statusHamos', 'Dadus Hamos Ona');
    }
}
