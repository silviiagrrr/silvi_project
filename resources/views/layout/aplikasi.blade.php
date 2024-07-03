<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Delicacy B & P</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .custom-navbar .nav-link {
    font-size: 18px; /* Besarkan ukuran font */
    padding: 20px 25px; /* Tambah padding untuk membesarkan tinggi */
}

.custom-navbar {
    padding: 1rem 1rem; /* Atur padding navbar untuk membesarkan tinggi keseluruhan */
}
    </style>

<title>@yield('title')</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
</head>

<body>
   

    @include('komponen/menu')
    <div class="container-sm">@yield('konten')</div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="container">
    @yield('content')    
    @yield('container')
    </div>
</body>

</html>