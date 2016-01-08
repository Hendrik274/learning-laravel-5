<!doctype html>
<html lang = 'en'>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div class="container">
    @if (Session::has('flash_message'))
        <div class ="alert alert-success"></div>
    @endif
    @yield('content')
</div>

@yield('footer')

</body>

</html>