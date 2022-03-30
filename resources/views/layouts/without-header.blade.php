<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- Ludus --}}
        <link rel="stylesheet" href="{{asset('ludus/css/vendor.css')}}">
        <link rel="stylesheet" href="{{asset('ludus/css/utility.css')}}">
        <link rel="stylesheet" href="{{asset('ludus/css/app.css')}}">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/obagz/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/obagz/media.css')}}">

        <link rel="stylesheet" href="{{asset('form/login.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <title>@yield('title')</title>
</head>
<body>
    
    @yield('content')

    {{-- <script>
        new flat("#reg-dob")
    </script> --}}
  
</body>
</html>
