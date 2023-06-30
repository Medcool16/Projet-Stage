@extends('master.layout')

@section('title')
    Client
@endsection


@section('content')
<div class="table d-flex justify-content-center">
    <table class="table table-bordered table-hover">
        <thead>
            <tr class="tabrow">
                <th scope="col">CIN</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Gender</th>
                <th scope="col">License</th>
                <th scope="col">Adress</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i)
            <tr class="tabrow">
                <td>{{ $i->CIN }}</td>
                <td>{{ $i->first_name }}</td>
                <td>{{ $i->last_name }}</td>
                <td>{{ $i->gender }}</td>
                <td>{{ $i->license }}</td>
                <td>{{ $i->adress }}</td>
                <td>{{ $i->phone }}</td>
                <td>{{ $i->email }}</td>
                <td>
                    <input type="submit" onclick="return confirm('Are you sure you want to delete this data ?')" class="btn btn-danger" value="X">
                </td>
            </tr>   
            @endforeach
        </tbody>
    </table>
@endsection

@section('style')
    <style>
        .tabrow th{
            text-align: center;
        }
    </style>
@endsection