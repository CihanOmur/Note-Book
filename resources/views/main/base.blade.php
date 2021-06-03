<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tittle')</title>
    @yield('head')
</head>
<body>
    @yield('sidebar')


    @yield('content')


    @yield('footer')


    @yield('script')
</body>
</html>
