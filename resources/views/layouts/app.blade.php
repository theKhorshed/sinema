<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} -  @yield('title')</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        @include('partials.nav')

        <div class="container">
            @yield('content')
        </div>
    </div>

    <footer class="container-fluid site-footer">
        <div class="container">
            <p class="text-left">{{ config('app.name', 'Laravel') }} {{date('Y')}} &copy; All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
