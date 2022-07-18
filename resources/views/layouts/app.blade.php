<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} by Danangoffic</title>
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body>

    @include('components.navbar')
    @yield('content')

    <!-- Optional JavaScript; choose one of the two! -->
    @stack('before-script')
    <!-- Option 1: Bootstrap Bundle with Popper -->
    @include('includes.script')
    @stack('after-script')
</body>

</html>
