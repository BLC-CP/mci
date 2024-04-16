@extends('welcome')
@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">{{ $title }}</h3>
                    </div>
                    <form role="form" action="{{ route('morada.update', $datas->id) }}" method="POST">
                       @csrf
                       @method('put')
                      <div class="card-body">
                        <div class="form-group">
                          <label for="morada">Naran Morada</label>
                          <input type="text" name="nrn_morada" value="{{ old('nrn_morada', $datas->nrn_morada) }}" class="form-control form-control-sm @error('nrn_morada') is-invalid @enderror " id="morada">

                          <div class="invalid-feedback">
                            @error('nrn_morada')
                              {{ $message }}
                            @enderror
                          </div>

                        </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-xs">Submit</button>
                        <a href="{{ route('morada.index') }}" class="btn btn-info btn-xs">Fila</a>
                        <button type="reset" name="rese" class="btn btn-warning btn-xs">Reset</button>
                      </div>
                    </form>
                  </div>

            </div>
        </div>
    </div>

@endsection