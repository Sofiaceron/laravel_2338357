<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Taller1</title>
</head>

<body>
    <ul class="nav justify-content-start">

        <li class="nav-item">
            <a class="nav-link" href="{{url('http://127.0.0.1:8000')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('Ejercicio2')}}">Ejercicio2 |</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('Ejercicio3')}}">Ejercicio3 |</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('Ejercicio4')}}">Ejercicio4 |</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('Ejercicio5')}}">Ejercicio5 |</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('Ejercicio6')}}">Ejercicio6 |</a>
        </li>

    </ul>
    <div class="container">
        @yield('plantillaweb')
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
