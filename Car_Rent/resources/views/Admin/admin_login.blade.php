<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Admin</title>
    <style>
      .holder{
        display: flex;
        justify-content: center;
        padding-top:80px; 
      }
    </style>
</head>
<body>
  <div class="holder">
    <div class="card text-center w-25">
      <div class="card-header">
        <img src="images/admin.png" alt="admin" width="150px" height="120px">
      </div>
      <div class="card-body">
        
      <form action="{{ route('login') }}" method="post">
        @csrf
          <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" class="form-control" placeholder="username" name="username">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" placeholder="password" name="password" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      @if ($errors->has('error'))
        <div class="alert alert-danger my-1">
            {{ $errors->first('error') }}
        </div>
      @endif

      </div>
      <div class="card-footer text-body-secondary">
        Copyrights 2023
      </div>
    </div>
  </div>
</body>
</html>