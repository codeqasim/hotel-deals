<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME') }}</title>
    <!-- Styles -->
    <link href="{{ asset('/css/app.css',true) }}" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
        </nav>
        <div class="mt-4 container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('/js/app.js',true) }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    @yield('customJS')
</body>
</html>
