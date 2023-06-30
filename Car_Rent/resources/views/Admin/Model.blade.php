@extends('master.layout')

@section('title')
    Model
@endsection


@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Models</h5>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('store') }}">
                @csrf
                <div class="mb-3">
                  <label  class="form-label">Model</label>
                  <input type="text" class="form-control" placeholder="Model name" name="mode">
                  <label  class="form-label">Mark</label>
                  <select class="form-select" name="marque">
                    @foreach ($data as $i)
                        <option value="{{ $i->id }}">{{ $i->mark_name }}</option>   
                    @endforeach
                  </select>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
            </div>
          </div>
    </div>
    <div class="col-md-6">
        <div class="table">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Model</th>
                    <th scope="col">Mark</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mode as $j)
                <tr class="">
                    <td>{{ $j->id }}</td>
                    <td>{{ $j->model_name }}</td>
                    @foreach ($data as $k)
                        @if ($j->id_mark == $k->id)
                            <td>{{ $k->mark_name }}</td>
                        @endif
                    @endforeach
                    <td class="d-flex justify-content-center">
                        <form action="{{ route('delete',$j->id) }}" method="post">
                            @csrf  @method('DELETE')
                            <input type="submit" onclick="return confirm('Are you sure you want to delete this data ?')" class="btn btn-danger" value="X">
                        </form>
                    </td>
                </tr>   
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
   </div>
@endsection