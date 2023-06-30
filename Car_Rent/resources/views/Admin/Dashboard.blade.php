@extends('master.layout')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
    <div class="col-md-4" style="margin: 0px 100px">
        <div class="card mb-3 mx-4 w-10">
            <div class="row">
              <div class="col-md-6">
                <img src="images/car.png" class="img-fluid" width="180px" height="180px">
              </div>
              <div class="col-md-6">
                <div class="card-body text-center">
                  <h1 class="card-title text-center">CARS</h1>
                  <span class="num">{{ $cars }}</span>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
          </div>
    </div>


    <div class="col-md-4">
        <div class="card mb-3 mx-4">
            <div class="row">
              <div class="col-md-6">
                <img src="images/clients.png" class="img-fluid my-4 mx-2" width="190px" height="190px">
              </div>
              <div class="col-md-6">
                <div class="card-body text-center">
                  <h2 class="card-title">CLIENTS</h2>
                  <span class="num">{{ $clients }}</span>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>

<div class="line"></div>


<h2 class="text-center">Available cars</h2>
<div class="row">
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
            </tr>
        </thead>
        <tbody>
            @foreach ($available_cars as $i)
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
            </tr>   
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection


@section('style')
    <style>
        .line{
            border: none;
            border-top: 1px solid black;
            width: 100%;
            margin-bottom: 50px;
        }

        .num{
            font-size:50px; 
            border: 1px solid black;
            padding: 1px 10px;
        }

        .card{
            width: 365px;
            height: 200px;
        }

        th, td{
          text-align: center;
        }
    </style>
@endsection
