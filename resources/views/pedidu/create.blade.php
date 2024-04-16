@extends('welcome')

@section('content')
<div class="container mt-3">
   
  
   
      <div class="card card-primary">
         <div class="card-header">
           <h3 class="card-title">{{ $title }}</h3>
         </div>
         <form role="form" action="{{ route('pedidu.store') }}" method="POST">
          @csrf
          <div class="card-body">
          <div class="row ">
          <div class="col-lg-4 col-md-6 col-sm-12">

             <div class="form-group">
                <label for="mov">Movimentu</label>
               <select name="id_movimentu" id="id_mov" class="form-control form-control-sm form-select select2 @error('id_movimentu') is-invalid @enderror ">
                <option disabled selected>Hili Movimentu</option>

                @foreach ($movi as $movis)
                    @if (old('id_movimentu') == $movis->id)                      
                    <option value="{{ $movis->id }}" selected>{{ $movis->nrn_movimentu }}</option>
                    @else
                    <option value="{{ $movis->id }}">{{ $movis->nrn_movimentu }} </option>
                    @endif
                @endforeach

               </select>
               @error('id_movimentu')
                 <div class="invalid-feedback">
                  {{ $message }}
                 </div>
               @enderror
              </div>

              <div class="form-group">
                <label for="data_registu">Data Registu</label>
                <input type="date" class="form-control form-control-sm @error('data_registu') is-invalid @enderror " value="{{ old('data_registu', date('Y-m-d')) }}" name="data_registu" id="data_registu">
                @error('data_registu')
                  <div class="invalid-feedback">
                   {{ $message }}
                  </div>
                @enderror
              </div>

             <div class="form-group">
               <label for="dizignasaun_sosial">Dezignasaun Sosial</label>
               <input type="text" class="form-control form-control-sm @error('dizignasaun_sosial') is-invalid @enderror " value="{{ old('dizignasaun_sosial') }}" name="dizignasaun_sosial" id="dizignasaun_sosial" placeholder="Dezignasaun Sosial">
               @error('dizignasaun_sosial')
                 <div class="invalid-feedback">
                  {{ $message }}
                 </div>
               @enderror
             </div>

             <div class="form-group">
              <label for="enderesu">Enderesu</label>
              <input type="text" class="form-control form-control-sm @error('enderesu') is-invalid @enderror " value="{{ old('enderesu') }}" name="enderesu" id="enderesu" placeholder="Enderesu">
              @error('enderesu')
                <div class="invalid-feedback">
                 {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="numeru_fiskal">Numeru Fiskal</label>
              <input type="text" class="form-control form-control-sm @error('numeru_fiskal') is-invalid @enderror " value="{{ old('numeru_fiskal') }}" name="numeru_fiskal" id="numeru_fiskal" placeholder="Numeru Fiskal">
              @error('numeru_fiskal')
                <div class="invalid-feedback">
                 {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="telefone">Telefone</label>
              <input type="text" class="form-control form-control-sm @error('telefone') is-invalid @enderror " value="{{ old('telefone') }}" name="telefone" id="telefone" placeholder="Telefone">
              @error('telefone')
                <div class="invalid-feedback">
                 {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror " value="{{ old('email') }}" name="email" id="email" placeholder="Email">
              @error('email')
                <div class="invalid-feedback">
                 {{ $message }}
                </div>
              @enderror
            </div>
           </div>

           <div class="col-lg-4 col-md-6 col-sm-12">

            <div class="form-group">
              <label for="identifikasaun">Identifikasaun</label>
              <input type="text" class="form-control form-control-sm @error('identifikasaun') is-invalid @enderror " value="{{ old('identifikasaun') }}" name="identifikasaun" id="identifikasaun" placeholder="Identifikasaun">
              @error('identifikasaun')
                <div class="invalid-feedback">
                 {{ $message }}
                </div>
              @enderror
            </div>
            
            <div class="form-group">
              <label for="naran_firma">Naran Firma</label>
              <input type="text" class="form-control form-control-sm @error('naran_firma') is-invalid @enderror " value="{{ old('naran_firma') }}" name="naran_firma" id="naran_firma" placeholder="Naran Firma">
              @error('naran_firma')
                <div class="invalid-feedback">
                 {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="id_morada">Morada</label>
             <select name="id_morada" id="id_morada" class="form-control form-control-sm form-select select2 @error('id_morada') is-invalid @enderror ">
              <option disabled selected>Hili Morada</option>

              @foreach ($morada as $moradas)
                  @if (old('id_morada') == $moradas->id)                      
                  <option value="{{ $moradas->id }}" selected>{{ $moradas->nrn_morada }}</option>
                  @else
                  <option value="{{ $moradas->id }}">{{ $moradas->nrn_morada }}</option>
                  @endif
              @endforeach

             </select>
             @error('id_morada')
               <div class="invalid-feedback">
                {{ $message }}
               </div>
             @enderror
            </div>

            <div class="form-group">
              <label for="id_karakterizasaun">Karakterizasaun</label>
             <select name="id_karakterizasaun" id="id_karakterizasaun" class="form-control form-control-sm form-select select2 @error('id_karakterizasaun') is-invalid @enderror ">
              <option disabled selected>Hili Karakterizasaun</option>

              @foreach ($kar as $kars)
                  @if (old('id_karakterizasaun') == $kars->id)                      
                  <option value="{{ $kars->id }}" selected>{{ $kars->nrn_karakterizasaun }}</option>
                  @else
                  <option value="{{ $kars->id }}">{{ $kars->nrn_karakterizasaun }}</option>
                  @endif
              @endforeach

             </select>
             @error('id_karakterizasaun')
               <div class="invalid-feedback">
                {{ $message }}
               </div>
             @enderror
            </div>

            <div class="form-group">
              <label for="id_risku">Risku</label>
             <select name="id_risku" id="id_risku" class="form-control form-control-sm form-select select2 @error('id_risku') is-invalid @enderror ">
              <option disabled selected>Hili Risku</option>

              @foreach ($risku as $riskus)
                  @if (old('id_risku') == $riskus->id)                      
                  <option value="{{ $riskus->id }}" selected>{{ $riskus->nrn_risku }}</option>
                  @else
                  <option value="{{ $riskus->id }}">{{ $riskus->nrn_risku }}</option>
                  @endif
              @endforeach

             </select>
             @error('id_risku')
               <div class="invalid-feedback">
                {{ $message }}
               </div>
             @enderror
            </div>

            <div class="form-group">
              <label for="id_atu">Atu</label>
             <select name="id_atu" id="id_atu" class="form-control form-control-sm form-select select2 @error('id_atu') is-invalid @enderror ">
              <option disabled selected>Hili Atu</option>

              @foreach ($atu as $atus)
                  @if (old('id_atu') == $atus->id)                      
                  <option value="{{ $atus->id }}" selected>{{ $atus->nrn_atu }}</option>
                  @else
                  <option value="{{ $atus->id }}">{{ $atus->nrn_atu }}</option>
                  @endif
              @endforeach

             </select>
             @error('id_atu')
               <div class="invalid-feedback">
                {{ $message }}
               </div>
             @enderror
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="form-group">
              <label for="aktividade_estabelesimentu">Aktividade Estabelesimentu</label>
                <div class="card-body pad">
                    <textarea class="textarea" name="aktividade_estabelesimentu"  @error('aktividade_estabelesimentu') is-invalid @enderror id="aktividade_estabelesimentu" style="width: 100%; height: 200px; font-size: 14px;  border: 1px solid #dddddd;"></textarea>
                </div>
              @error('aktividade_estabelesimentu')
                <div class="invalid-feedback">
                 {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="aktividade_prinsipal">Aktividade Prinsipal</label>
                <div class="card-body pad">
                    <textarea class="textarea" name="aktividade_prinsipal" @error('aktividade_prinsipal') is-invalid @enderror id="aktividade_prinsipal" style="width: 100%; height: 200px; font-size: 14px; border: 1px solid #dddddd;"></textarea>
                </div>
              @error('aktividade_prinsipal')
                <div class="invalid-feedback">
                 {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xs">Submit</button>
              <a href="{{ route('pedidu.index') }}" class="btn btn-info btn-xs">Fila</a>
             <button type="reset" name="rese" class="btn btn-warning btn-xs">Reset</button>
            </div>

          </div>
          </div>
        </div>
         </form>
       </div>
   


</div>
@endsection