<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | KP {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{asset('css/auth/login.css')}}" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="row">

        <div class="col-5 col-s-12 head">
            <h2>Kerja Praktik Teknik Informatika Institut Teknologi Sumatera</h2>
            <div class="col-5 col-ss-5 logo">
                <img class="logo-itera" src="{{ asset('/requirement/logo_itera.png') }}">
            </div>
        </div>
        @yield('content')
    </div>

</body>

</html>