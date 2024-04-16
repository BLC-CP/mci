@extends('welcome')

@section('content')
<div class="container">

    <form action="{{ route('relatoriu.index') }}" action="GET">
  <div class="row mt-3" id="form">

        {{-- Relatoriu Kada Movimentu --}}
        <div class="col-lg-3 col-md-6">
            <label class="text-center">Dadus Kada Movimentu</label>
            <div class="form-group">
                <select name="movimentu" class="form-control form-control-sm select2">
                    <option disabled selected>Hili movimentu</option>
                    @foreach ($dataMovimentu as $dataMovimentus)
                        <option value="{{ $dataMovimentus->id }}" {{ request('movimentu') == $dataMovimentus ? 'selected' : '' }} >{{ $dataMovimentus->nrn_movimentu }}</option>
                    @endforeach

                </select>
                
            </div>
        </div> 

        {{-- Relatoriu Kada Morada --}}
        <div class="col-lg-3 col-md-6">
            <label class="text-center">Dadus Kada Morada</label>
            <div class="form-group">
                <select name="morada" class="form-control form-control-sm select2">
                    <option disabled selected>Hili Morada</option>
                    @foreach ($datamorada as $datamoradas)
                        <option value="{{ $datamoradas->id }}" {{ request('morada') == $datamoradas ? 'selected' : '' }} >{{ $datamoradas->nrn_morada }}</option>
                    @endforeach

                </select>
                
            </div>
        </div>

        {{-- Relatoriu Kada Risku --}}
        <div class="col-lg-3 col-md-6">
            <label class="text-center">Dadus Kada Risku</label>
            <div class="form-group">
                <select name="risku" class="form-control form-control-sm select2">
                    <option disabled selected>Hili Risku</option>
                    @foreach ($dataRisku as $datariskus)
                        <option value="{{ $datariskus->id }}" {{ request('risku') == $datariskus ? 'selected' : '' }} >{{ $datariskus->nrn_risku }}</option>
                    @endforeach

                </select>
                
            </div>
        </div>

        {{-- Relatoriu Kada Karakerizasaun --}}
        <div class="col-lg-3 col-md-6">
            <label class="text-center">Dadus Kada Karakerizasaun</label>
            <div class="form-group">
                <select name="karakter" class="form-control form-control-sm select2">
                    <option disabled selected>Hili karakerizasaun</option>
                    @foreach ($dataKarakter as $dataKarakters)
                        <option value="{{ $dataKarakters->id }}" {{ request('karakerizasaun') == $dataKarakters ? 'selected' : '' }} >{{ $dataKarakters->nrn_karakterizasaun }}</option>
                    @endforeach

                </select>
                
            </div>
        </div>

        {{-- Relatoriu Kada Atu --}}
        <div class="col-lg-3 col-md-6">
            <label class="text-center">Dadus Kada Atu</label>
            <div class="form-group">
                <select name="atu" class="form-control form-control-sm select2">
                    <option disabled selected>Hili Atu</option>
                    @foreach ($dataAtu as $dataAtus)
                        <option value="{{ $dataAtus->id }}" {{ request('atu') == $dataAtus ? 'selected' : '' }} >{{ $dataAtus->nrn_atu }}</option>
                    @endforeach

                </select>
                
            </div>
        </div>

        {{-- Relatoriu Kada Tinan --}}
        <div class="col-lg-3 col-md-6">
            <label class="text-center">Dadus Kada Tinan</label>
            <div class="form-group">
                <select name="tinan" class="form-control form-control-sm select2">
                    <option disabled selected>Hili Tinan</option>
                    @for ($tinan = now()->year; $tinan >= 1900; $tinan--)
                    <option value="{{ $tinan }}" {{ request('tinan') == $tinan ? 'selected' : '' }} >{{ $tinan }}</option>
                    @endfor

                </select>
            </div>
        </div>

        {{-- Relatoriu Kada Fulan --}}
        <div class="col-lg-3 col-md-6">
            <label class="text-center">Dadus Kada Fulan</label>
            <div class="form-group">
                <select name="fulan" class="form-control form-control-sm select2">
                    <option disabled selected>Hili Fulan</option>
                    @foreach (range(1, 12) as $fulan)
                    <option value="{{ $fulan }}" {{ request('fulan') == $fulan ? 'selected' : '' }} >{{ date('F', mktime(0, 0, 0, $fulan, 1)) }}</option>
                    @endforeach
                </select>
                
            </div>
        </div>

        {{-- Relatoriu Kada Periodo --}}
        <div class="col-lg-3 col-md-6">
            <label for="date">Dadus Kada Periodo</label>
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <input type="date" id="date" name="data_hahu" class="form-control form-control-sm d-inline-block">
                    </div>
                    <div class="col-6">
                        <input type="date" id="date" name="data_remata" class="form-control form-control-sm d-inline-block">
                    </div>
                </div>
            </div>
        </div> 

    </div>

    <div class="row mt-3" id="buttons">
        <div class="col-lg-4">
            <button type="submit" class="btn btn-primary btn-sm w-100"><i class="fa fa-search"></i></i> Buka</button>
        </div>
        <div class="col-lg-4">
            <a href="relatoriu"  id="fila" class="btn btn-warning btn-sm mb-2 w-100"><i class="fa fa-backward"></i> Reset <i class="fa fa-home"></i></a>
        </div>
        <div class="col-lg-4">
            <button id="printButton" class="btn btn-success btn-sm mb-2 w-100"><i class="fa fa-print"></i> Print</button>
        </div>
    </div>
</form>

  <div class="row mt-4">
    <div class="col-lg-12">
        @include('relatoriu.header')
    </div>
  </div>

  <hr>

  <div class="row mt-4">
    <div class="col-lg-12 col-md-12">
        <table class="table table-bordered table-striped table-sm" id="dataToPrint">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Movimentu</th>
                    <th>Dezignasaun Sosial</th>
                    <th>Enderesu</th>
                    <th>Numeru Fiskal</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Morada</th>
                    <th>Karakterizasaun</th>
                    <th>Data Registu</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidusDatas as $datas)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $datas->nrn_movimentu }}</td>
                    <td>{{ $datas->dizignasaun_sosial }}</td>
                    <td>{{ $datas->enderesu }}</td>
                    <td>{{ $datas->numeru_fiskal }}</td>
                    <td>{{ $datas->telefone }}</td>
                    <td>{{ $datas->email }}</td>
                    <td>{{ $datas->nrn_morada }}</td>
                    <td>{{ $datas->nrn_karakterizasaun }}</td>
                    <td>{{ $datas->data_registu }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>

  <script>
    document.getElementById("printButton").addEventListener("click", function() {
    fila.style.display = "none";
    form.style.display = "none";
    printButton.style.display = "none";
    footer.style.display = "none";
    buttons.style.display = "none";
    window.print();
    });
    </script>

</div>
@endsection

