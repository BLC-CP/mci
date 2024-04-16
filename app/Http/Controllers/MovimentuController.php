<?php

namespace App\Http\Controllers;

use App\Models\Movimentu;
use Illuminate\Http\Request;

class MovimentuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dt = Movimentu::All();
        return view('movimentu.index', [
            'title' => 'Pagina Movimentu',
            'active' => 'movimentu',
            'data' => $dt
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('movimentu.create', [
            'title' => 'Form Aumenta Dadus Tipu Movimentu',
            'active' => 'movimentu'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nrn_movimentu' => 'required'
        ], [
            'nrn_movimentu.required' => 'Naran Tipu Movimentu Tenke Priense'
        ]);

        Movimentu::create($request->All());
        return redirect()->route('movimentu.index')->with('status', 'Dadus Aumenta Ona');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movimentu $movimentu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $hadia = Movimentu::findOrFail($id);
        return view('movimentu.edit', [
            'title' => 'Form Hadia Dadus Tipu Movimentu',
            'active' => 'movimentu',
            'datas' => $hadia
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nrn_movimentu' => 'required'
        ], [
            'nrn_movimentu.required' => 'Naran Tipu Movimentu Tenke Priense'
        ]);
        $mov = Movimentu::findOrFail($id);
        $mov->update($request->All());
        return redirect()->route('movimentu.index')->with('status', 'Dadus Hadia Ona');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $hamos = Movimentu::findOrFail($id);
        $hamos->delete();

        return redirect()->route('movimentu.index')->with('statusHamos', 'Dadus Hamos Ona');
    }
}
