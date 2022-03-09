<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle') | Dc Comic</title>

    {{-- script bundle js bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    {{-- script bundle js bootstrap --}}


    {{-- richiamo al mio app.css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- /richiamo al mio app.css --}}

</head>

<body>
    
   

    {{-- segnaposto views/comics/index.blade.php --}}
    @yield('content')
    {{-- /segnaposto views/comics/index.blade.php --}}

        

</body>
</html>
