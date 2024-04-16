@extends('welcome')

@section('content')
<div class="container">
   
    <div class="card">
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-sm">
            <a href="{{ route('pedidu.create') }}" class="btn btn-success btn-xs my-2"><i class="fa fa-plus"></i> Aumenta Dadus</a>
            <thead>
            <tr>
              <th>No</th>
              <th>Dezignasaun Sosial</th>
              <th>Enderesu</th>
              <th>Numeru Fiskal</th>
              <th>Telefone</th>
              <th>Email</th>
              <th>Aksaun</th>
            </tr>
            </thead>
            <tbody>
              @if ($data->count() > 0)
              @foreach ($data as $datas)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $datas->dizignasaun_sosial }}</td>
                <td>{{ $datas->enderesu }}</td>
                <td>{{ $datas->numeru_fiskal }}</td>
                <td>{{ $datas->telefone }}</td>
                <td>{{ $datas->email }}</td>
                <td>
                  <a href="{{ route('pedidu.edit', $datas->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                  <form id="deleteForm{{ $datas->id }}" action="{{ route('pedidu.destroy', $datas->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="button" onclick="confirmDelete('deleteForm{{ $datas->id }}', '{{ $datas->dizignasaun_sosial }}')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
              @else
                  <tr>
                    <td colspan="15"><h4 class="text-center text-danger"><small>Dadus Seidauk Iha</small></h4></td>
                  </tr>
              @endif
              
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>

</div>
@endsection