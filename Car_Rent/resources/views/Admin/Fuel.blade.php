@extends('master.layout')

@section('title')
    Fuel
@endsection


@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Fuel</h5>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('store_fuel') }}">
                @csrf
                <div class="mb-3">
                  <label  class="form-label">Make a new fuel</label>
                  <input type="text" class="form-control" placeholder="Fuel name" name="fuel_name">
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
                    <th scope="col">Fuel</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fuel as $i)
                <tr class="">
                    <td>{{ $i->id }}</td>
                    <td>{{ $i->fuel_type }}</td>
                    <td>{{ $i->created_at }}</td>
                    <td class="d-flex justify-content-center">
                        <form action="{{ route('remove_fuel',$i->id) }}" method="post">
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