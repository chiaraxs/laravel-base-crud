<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle') Home</title>

    {{-- richiamo al mio app.css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- /richiamo al mio app.css --}}

</head>

<body>
    
    ciaociaoprovaciao

    {{-- segnaposto views/comics/index.blade.php --}}
    @yield('content')
    {{-- /segnaposto views/comics/index.blade.php --}}

        

</body>
</html>
