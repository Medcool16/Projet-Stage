<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Car info</title>
</head>
<body>
    <div class="d-flex justify-content-center">
        <div class="table w-50 py-5">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Matricule</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Model</th>
                        <th scope="col">Color</th>
                        <th scope="col">Gear-box</th>
                        <th scope="col">Fuel</th>
                        <th scope="col">Speed</th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $i)
                    <tr class="">
                        <td>{{ $i->matricule }}</td>
                        <td>{{ $i->id_marque }}</td>
                        <td>{{ $i->id_model }}</td>
                        <td>{{ $i->color }}</td>
                        <td>{{ $i->gear_box }}</td>
                        <td>{{ $i->id_carburant }}</td>
                        <td>{{ $i->puissance }}</td>
                    </tr>   
                    @endforeach
                </tbody>
            </table>
            </div>
    </div>
</body>
</html>