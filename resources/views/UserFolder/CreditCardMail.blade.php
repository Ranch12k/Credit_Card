<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div class="container">

    <div class="card">
        <div class="row">
            <div class="col-6">name</div><div class="left">{{$user->name}}</div>
            <div class="col-6">email</div><div class="left">{{$user->email}}</div>
            <div class="col-6">phone</div><div class="left">{{$user->phone}}</div>
            <div class="col-6">fname</div><div class="left">{{$user->fname}}</div>
            <div class="col-6">address</div><div class="left">{{$user->address}}</div>
            <div class="col-6">state</div><div class="left">{{$user->state}}</div>
            <div class="col-6">city</div><div class="left">{{$user->city}}</div>
            <div class="col-6">pincode</div><div class="left">{{$user->pincode}}</div>
            <div class="col-6">occupation</div><div class="left">{{$user->occupation}}</div>
            <div class="col-6">pancard</div><div class="left">{{$user->pancard}}</div>
            <div class="col-6">aadharcard</div><div class="left">{{$user->aadharcard}}</div>
        </div>
    </div>
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>