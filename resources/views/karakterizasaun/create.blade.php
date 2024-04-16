@extends('welcome')

@section('content')
<div class="container">
   
  <div class="row mt-3">
   <div class="col-lg-12">
      <div class="card card-primary">
         <div class="card-header">
           <h3 class="card-title">{{ $title }}</h3>
         </div>
         <!-- /.card-header -->
         <!-- form start -->
         <form role="form" action="{{ route('karakterizasaun.store') }}" method="POST">
            @csrf
           <div class="card-body">
             <div class="form-group">
               <label for="karakterizasaun">Naran Karakterizasaun</label>
               <input type="text" name="nrn_karakterizasaun" class="form-control form-control-sm @error('nrn_karakterizasaun') is-invalid @enderror " id="karakterizasaun" value="{{ old('nrn_karakterizasaun') }}" placeholder="Naran Karakterizasaun">
              <div class="invalid-feedback">
                @error('nrn_karakterizasaun') 
                {{ $message }}
                @enderror
              </div>
             </div>
           </div>
           <!-- /.card-body -->

           <div class="card-footer">
             <button type="submit" class="btn btn-primary btn-xs">Submit</button>
             <a href="{{ route('karakterizasaun.index') }}" class="btn btn-info btn-xs">Fila</a>
            <button type="reset" name="rese" class="btn btn-warning btn-xs">Reset</button>
           </div>
         </form>
       </div>
   </div>
  </div>

</div>
@endsection