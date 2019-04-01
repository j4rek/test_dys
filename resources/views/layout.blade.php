<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SBIF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar nav-light bg-light mb-4">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="{{route('home')}}">Inicio</a>
        </div>
    </nav>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="card">
            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>