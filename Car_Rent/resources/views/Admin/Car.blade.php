@extends('master.layout')

@section('title')
    Car
@endsection


@section('content')
<div class="row d-flex">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <a href="{{ route('add_page') }}" class="btn btn-primary mx-3" style="width: 100px;">Add car</a>
    <a href="#" class="btn btn-success mx-1" style="width: 100px;">Print</a>
</div>
<div class="row">
    <div class="col-md-12">
    <div class="table my-5 table-sm">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">Matricule</th>
                <th scope="col">Mark</th>
                <th scope="col">Model</th>
                <th scope="col">Color</th>
                <th scope="col">Gear-box</th>
                <th scope="col">Fuel</th>
                <th scope="col">Speed</th>
                <th scope="col">Price/day</th>
                <th scope="col">Status</th>
                <th colspan="2" class="text-center" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i)
            <tr class="">
                <td>{{ $i->matricule }}</td>
                <td>
                    @foreach ($mark as $t)
                        @if ($i->id_marque == $t->id)
                            {{ $t->mark_name }}
                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach ($model as $k)
                        @if ($i->id_model == $k->id)
                            {{ $k->model_name }}
                        @endif
                    @endforeach
                </td>
                <td>{{ $i->color }}</td>
                <td>{{ $i->gear_box }}</td>
                <td>
                    @foreach ($fuel as $f)
                        @if ($i->id_carburant == $f->id)
                            {{ $f->fuel_type }}
                        @endif
                    @endforeach
                </td>
                <td>{{ $i->puissance }} km/h</td>
                <td>{{ $i->price }} Dhs</td>
                <td>{{ $i->status }}</td>
                <td><a class="btn btn-outline-warning bt" href="{{ route('send_car_update',$i->id) }}"><img src="assets/pencil-square.svg" width="25px"></a></td>
                <td>
                    <form action="{{ route('remove_car',$i->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this data ?')" type="submit" value="X">
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


@section('style')
   <style>
        .sec{
            display: inline-block;
        }
       .option-head a{
           margin: 1px 6px;
       }
       
       .mb-3.c1,.mb-3.c2{
        display: inline-block;
        width: 48%;
       }
       .bt{
        margin: 0px -10px;
       }

       th ,td{
        text-align: center;
        margin: 0px -10px;
       }
   </style>
@endsection
