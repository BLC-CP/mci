<?php

namespace App\Http\Controllers;

use App\Models\Pedidu;
use App\Models\Movimentu;
use App\Models\Morada;
use App\Models\Karakterizasaun;
use App\Models\Risku;
use App\Models\Atu;
use Illuminate\Http\Request;

class PediduController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dt = Pedidu::All();
        return view('pedidu.index', [
            'title' => 'Pagina Pedidu',
            'active' => 'pedidu',
            'data' => $dt
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mov = Movimentu::All();
        $mor = Morada::All();
        $kar = Karakterizasaun::All();
        $risk = Risku::All();
        $atu = Atu::All();
        return view('pedidu.create', [
            'title' => 'Form Aumenta Dadus pedidu',
            'active' => 'pedidu',
            'movi' =>  $mov,
            'morada' =>  $mor,
            'kar' =>  $kar,
            'risku' =>  $risk,
            'atu' =>  $atu
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'id_movimentu' => 'required',
            'data_registu' => 'required',
            'dizignasaun_sosial' => 'required',
            'enderesu' => 'required',
            'numeru_fiskal' => 'required',
            'telefone' => 'required',
            'email' => 'required|email:dns',
            'identifikasaun' => 'required',
            'naran_firma' => 'required',
            'id_morada' => 'required',
            'id_karakterizasaun' => 'required',
            'id_risku' => 'required',
            'id_atu' => 'required',
            'aktividade_estabelesimentu' => 'required',
            'aktividade_prinsipal' => 'required'
        ], [
            'id_movimentu.required' => 'Tenke Hili Movimentu',
            'data_registu.required' => 'Tenke Hili Data',
            'dizignasaun_sosial.required' => 'Tenke Priense Dezignasaun Sosial',
            'enderesu.required' => 'Tenke Priense Enderesu',
            'numeru_fiskal.required' => 'Tenke Priense Numeru Fiskal',
            'telefone.required' => 'Tenke Priense Numeru Telefone',
            'email.required' => 'Tenke Priense Email',
            'email.email' => 'Prinse Email Nebe Mak Los',
            'identifikasaun.required' => 'Tenke Priense Identifikasaun',
            'naran_firma.required' => 'Tenke Priense Naran Firma',
            'id_morada.required' => 'Tenke Hili Morada',
            'id_karakterizasaun.required' => 'Tenke Hili Morada',
            'id_risku.required' => 'Tenke Hili Risku',
            'id_atu.required' => 'Tenke Hili Atu',
            'aktividade_estabelesimentu.required' => 'Tenke Priense Aktividade Estabelesimentu ',
            'aktividade_prinsipal.required' => 'Tenke Priense Aktividade Prinsipal'
        ]);

        $data['id_movimentu'] = $request->id_movimentu;
        $data['data_registu'] = $request->data_registu;
        $data['dizignasaun_sosial'] = $request->dizignasaun_sosial;
        $data['enderesu'] = $request->enderesu;
        $data['numeru_fiskal'] = $request->numeru_fiskal;
        $data['telefone'] = $request->telefone;
        $data['email'] = $request->email;
        $data['identifikasaun'] = $request->identifikasaun;
        $data['naran_firma'] = $request->naran_firma;
        $data['id_morada'] = $request->id_morada;
        $data['id_karakterizasaun'] = $request->id_karakterizasaun;
        $data['id_risku'] = $request->id_risku;
        $data['id_atu'] = $request->id_atu;
        $data['aktividade_estabelesimentu'] = $request->aktividade_estabelesimentu;
        $data['aktividade_prinsipal'] = $request->aktividade_prinsipal;

        Pedidu::create($data);
        return redirect()->route('pedidu.index')->with('status', 'Dadus Aumenta Ona');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedidu $pedidu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ped = Pedidu::findOrFail($id);
        $mov = Movimentu::All();
        $mor = Morada::All();
        $kar = Karakterizasaun::All();
        $risk = Risku::All();
        $atu = Atu::All();
        return view('pedidu.edit', [
            'title' => 'Form Hadia Dadus pedidu',
            'active' => 'pedidu',
            'pedidu' =>  $ped,
            'movi' =>  $mov,
            'morada' =>  $mor,
            'kar' =>  $kar,
            'risku' =>  $risk,
            'atu' =>  $atu
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Pedidu::findOrFail($id);
        $request->validate([
            'id_movimentu' => 'required',
            'data_registu' => 'required',
            'dizignasaun_sosial' => 'required',
            'enderesu' => 'required',
            'numeru_fiskal' => 'required',
            'telefone' => 'required',
            'email' => 'required|email:dns',
            'identifikasaun' => 'required',
            'naran_firma' => 'required',
            'id_morada' => 'required',
            'id_karakterizasaun' => 'required',
            'id_risku' => 'required',
            'id_atu' => 'required',
            'aktividade_estabelesimentu' => 'required',
            'aktividade_prinsipal' => 'required'
        ], [
            'id_movimentu.required' => 'Tenke Hili Movimentu',
            'data_registu.required' => 'Tenke Hili Data Registu',
            'dizignasaun_sosial.required' => 'Tenke Priense Dezignasaun Sosial',
            'enderesu.required' => 'Tenke Priense Enderesu',
            'numeru_fiskal.required' => 'Tenke Priense Numeru Fiskal',
            'telefone.required' => 'Tenke Priense Numeru Telefone',
            'email.required' => 'Tenke Priense Email',
            'email.email' => 'Prinse Email Nebe Mak Los',
            'identifikasaun.required' => 'Tenke Priense Identifikasaun',
            'naran_firma.required' => 'Tenke Priense Naran Firma',
            'id_morada.required' => 'Tenke Hili Morada',
            'id_karakterizasaun.required' => 'Tenke Hili Morada',
            'id_risku.required' => 'Tenke Hili Risku',
            'id_atu.required' => 'Tenke Hili Atu',
            'aktividade_estabelesimentu.required' => 'Tenke Priense Aktividade Estabelesimentu ',
            'aktividade_prinsipal.required' => 'Tenke Priense Aktividade Prinsipal'
        ]);

        $data['id_movimentu'] = $request->id_movimentu;
        $data['data_registu'] = $request->data_registu;
        $data['dizignasaun_sosial'] = $request->dizignasaun_sosial;
        $data['enderesu'] = $request->enderesu;
        $data['numeru_fiskal'] = $request->numeru_fiskal;
        $data['telefone'] = $request->telefone;
        $data['email'] = $request->email;
        $data['identifikasaun'] = $request->identifikasaun;
        $data['naran_firma'] = $request->naran_firma;
        $data['id_morada'] = $request->id_morada;
        $data['id_karakterizasaun'] = $request->id_karakterizasaun;
        $data['id_risku'] = $request->id_risku;
        $data['id_atu'] = $request->id_atu;
        $data['aktividade_estabelesimentu'] = $request->aktividade_estabelesimentu;
        $data['aktividade_prinsipal'] = $request->aktividade_prinsipal;

        $data->save();
        return redirect()->route('pedidu.index')->with('status', 'Dadus Hadia Ona');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hamos = Pedidu::findOrFail($id);
        $hamos->delete();
        return redirect()->route('pedidu.index')->with('status', 'Dadus Hamos Ona');
    }
}
