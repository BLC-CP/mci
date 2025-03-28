@extends('welcome')

@section('content')
<div class="container">
 
    <div class="card">
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-sm">
            <a href="{{ route('karakterizasaun.create') }}" class="btn btn-success btn-xs my-2"><i class="fa fa-plus"></i> Aumenta Dadus</a>
            <thead>
            <tr>
              <th>No</th>
              <th>Tipu Karakterizasaun</th>
              <th>Aksaun</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($data as $datas)
            <tr>
              <td>{{ $loop->iteration; }}</td>
              <td>{{ $datas->nrn_karakterizasaun }}</td>
              <td>
                <a href="{{ route('karakterizasaun.edit', $datas->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>

                <form id="deleteForm{{ $datas->id }}" action="{{ route('karakterizasaun.destroy', $datas->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('delete')
                  <button type="button" class="btn btn-danger btn-xs" onclick="confirmDelete('deleteForm{{ $datas->id }}', '{{ $datas->nrn_karakterizasaun }}')" ><i class="fa fa-trash"></i></button>
              </form>

              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>

</div>
@endsection