<?php

namespace App\Http\Controllers;

use App\Models\Pedidu;
use App\Models\Movimentu;
use App\Models\Morada;
use App\Models\Karakterizasaun;
use App\Models\Risku;
use App\Models\Atu;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RelatoriuController extends Controller
{

    public function index(Request $request)
    {

        $pedidusData = DB::table('pedidus')
            ->join('movimentus', 'pedidus.id_movimentu', '=', 'movimentus.id')
            ->join('moradas', 'pedidus.id_morada', '=','moradas.id')
            ->join('karakterizasauns', 'pedidus.id_karakterizasaun', '=', 'karakterizasauns.id')
            ->join('riskus', 'pedidus.id_risku', '=', 'riskus.id')
            ->join('atus', 'pedidus.id_atu', '=', 'atus.id')
            ->select('pedidus.*', 'movimentus.nrn_movimentu', 'moradas.nrn_morada', 'karakterizasauns.nrn_karakterizasaun');

        $dtMovimentu        = Movimentu::All();
        $dtMorada           = Morada::All();
        $dtKarakterizasaun  = Karakterizasaun::All();
        $dtRisku            = Risku::All();
        $dtAtu              = Atu::All();
        
        if ($getMovimentu = $request->get('movimentu')) {
            $pedidusData->where('id_movimentu', $getMovimentu);
        }

        if($getMorada = $request->get('morada')){
            $pedidusData->where('id_morada', $getMorada);
        }

        if($getKarakter = $request->get('karakter')){
            $pedidusData->where('id_karakterizasaun', $getKarakter);
        }

        if($getRisku = $request->get('risku')){
            $pedidusData->where('id_risku', $getRisku);
        }

        if($getAtu = $request->get('atu')){
            $pedidusData->where('id_atu', $getAtu);
        }

        if($getTinan = $request->get('tinan')){
            $pedidusData->whereYear('data_registu', $getTinan);
        }

        if($getFulan = $request->get('fulan')){
            $pedidusData->whereMonth('data_registu', $getFulan);
        }

        $dataHahu   = $request->get('data_hahu');
        $dataRemata = $request->get('data_remata');
        if($dataHahu && $dataRemata){
            $pedidusData->whereBetween('data_registu', [$dataHahu, $dataRemata]);
        }

        $dataGeral = Pedidu::distinct()->pluck('id_movimentu', 'id_morada', 'id_karakterizasaun', 'id_risku', 'id_atu');

        $pedidusDatas = $pedidusData->get();

        return view('relatoriu.formrelatoriu', 
        [
        'title'         => 'Dadus', 
        'active'        => 'relatoriu',
        'dataMovimentu' => $dtMovimentu,
        'datamorada'    => $dtMorada,
        'dataKarakter'  => $dtKarakterizasaun,
        'dataRisku'     => $dtRisku,
        'dataAtu'       => $dtAtu
        ], 
        compact('pedidusDatas', 'dataGeral')
);}



}