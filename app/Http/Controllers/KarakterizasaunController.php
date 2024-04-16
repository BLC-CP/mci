<?php

namespace App\Http\Controllers;

use App\Models\Karakterizasaun;
use Illuminate\Http\Request;

class KarakterizasaunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dt = Karakterizasaun::All();
        return view('karakterizasaun.index', [
            'title' => 'Pagina karakterizasaun',
            'active' => 'karakterizasaun',
            'data' => $dt
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karakterizasaun.create', [
            'title' => 'Form Aumenta Dadus Karakterizasaun',
            'active' => 'karakterizasaun'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nrn_karakterizasaun' => 'required'
        ], [
            'nrn_karakterizasaun.required' => 'Naran Karakterizasaun Tenke Priense'
        ]);

        Karakterizasaun::create($request->All());
        return redirect()->route('karakterizasaun.index')->with('status', 'Dadus Aumenta Ona');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karakterizasaun $karakterizasaun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dt = Karakterizasaun::findOrFail($id);
        return view('karakterizasaun.edit', [
            'title' => 'Form Hadia Dadus Karakterizasaun',
            'active' => 'karakterizasaun',
            'datas' => $dt
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nrn_karakterizasaun' => 'required'
        ], [
            'nrn_karakterizasaun.required' => 'Naran karakterizasaun Tenke Priense'
        ]);

        $hd = Karakterizasaun::findOrFail($id);
        $hd->update($request->All());
        return redirect()->route('karakterizasaun.index')->with('status', 'Dadus Hadia Ona');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Karakterizasaun::findOrFail($id);
        $delete->delete();
        return redirect()->route('karakterizasaun.index')->with('statusHamos', 'Dadus Hamos Ona');
    }
}
