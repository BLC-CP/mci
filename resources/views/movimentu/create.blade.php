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
         <form role="form" action="{{ route('movimentu.store') }}" method="POST">
            @csrf
           <div class="card-body">
             <div class="form-group">
               <label for="movimentu">Naran Tipu Movimentu</label>
               <input type="text" name="nrn_movimentu" class="form-control form-control-sm @error('nrn_movimentu') is-invalid @enderror " id="movimentu" value="{{ old('nrn_movimentu') }}" placeholder="Naran Tipu Movimentu">
              <div class="invalid-feedback">
                @error('nrn_movimentu') 
                {{ $message }}
                @enderror
              </div>
             </div>
           </div>
           <!-- /.card-body -->

           <div class="card-footer">
             <button type="submit" class="btn btn-primary btn-xs">Submit</button>
             <a href="{{ route('movimentu.index') }}" class="btn btn-info btn-xs">Fila</a>
            <button type="reset" name="rese" class="btn btn-warning btn-xs">Reset</button>
           </div>
         </form>
       </div>
   </div>
  </div>

</div>
@endsection