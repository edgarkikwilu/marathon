
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('marathon/favicons/images-logo.png')}}" type="image/x-icon">
     <!-- MATERIAL DESIGN ICONIC FONT -->
     <link rel="stylesheet" href="{{asset('marathon/css/css-material-design-iconic-font.min.css')}}" type="text/css">
     <!-- STYLE CSS -->
     <link rel="stylesheet" href="{{asset('marathon/css/css-style.css')}}" type="text/css">

    <!-- Bootstrap   CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light pl-5">
        <span class="navbar-brand mb-0 h1">
        <img src="{{asset('marathon/images/images-logo.png')}}" alt="Dar es salaam Aids Marathon" width="70" height="40"
        class="d-inline-block align-top" alt="" loading="lazy">
        Dar es salaam Aids Marathon
        </span>
        <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" href="#" style="text-decoration: none;">{{Auth::user()->name}}</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('/logout')}}">Logout</a>
            </li>
          </ul>
    </nav>

    <div class="container pt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="row text-center">
                        <div class="col-md-12"><h2>Total</h2></div>
                        <div class="col-md-12"><h2>{{$total}}</h2></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="row text-center">
                        <div class="col-md-12"><h2>Men</h2></div>
                        <div class="col-md-12"><h2>{{$male}}</h2></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="row text-center">
                        <div class="col-md-12"><h2>Women</h2></div>
                        <div class="col-md-12"><h2>{{$female}}</h2></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <h4>List of registered runners</h4>
            </div>
        </div>
        <br>
        <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Nationality</td>
                <td>Gender</td>
                <td>Age</td>
                <td>Mobile</td>
                <td>Race Category</td>
                <td>Team Name</td>
                <td>Emergency</td>
                <td>Registered At</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($marathons as $m)
                <tr>
                    <td>{{$m->id}}</td>
                    <td>{{$m->full_name}}</td>
                    <td>{{$m->nationality}}</td>
                    <td>{{$m->gender}}</td>
                    <td>{{$m->age}}</td>
                    <td>{{$m->mobile}}</td>
                    <td>{{$m->race_category}}</td>
                    <td>{{$m->team_name}}</td>
                    <td>{{$m->emergency}}</td>
                    <td>{{$m->created_at}}</td>
                </tr>
            @endforeach
            {{$marathons->links()}}
        </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>