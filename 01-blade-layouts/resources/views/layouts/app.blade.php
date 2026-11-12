<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta')
    @yield('styles')
    <title>@yield('title')</title>
</head>
<body data-theme="dark" class="@yield('body-class')">


    <div>
        @yield('content')
    </div>

    @yield('scripts')
</body>
</html>