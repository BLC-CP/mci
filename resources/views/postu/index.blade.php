@extends('welcome')

@section('content')
<div class="container">
   
    <div class="card">
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-sm">
            <a href="{{ route('postu.create') }}" class="btn btn-primary btn-xs my-2"><i class="fa fa-plus"></i> Aumenta Dadus</a>
            <thead>
            <tr>
              <th>Postu {{ $counts }}</th>
              <th>Munisipiu </th>
              <th>Aksaun</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($data as $datas)
            <tr>
              <td>{{ $datas->nrn_postu }}</td>
              <td>{{ $datas->nrn_munisipiu }}</td>
              <td>
                <a href="{{ route('postu.edit', $datas->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                <form id="deleteForm{{ $datas->id }}" action="{{ route('postu.destroy', $datas->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="button" class="btn btn-danger btn-xs" onclick="confirmDelete('deleteForm{{ $datas->id }}', '{{ $datas->nrn_postu }}')"><i class="fa fa-trash"></i></button>
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