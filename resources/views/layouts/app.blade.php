<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
<header>
    @include('inc.navbar')
    </header>
    <div id="app">
        <main role="main" class="container mt-5 mb-5">
           @include('inc.messages')
            @yield('content')
        </main>
    </div>


<footer class="footer">
      <div class="container">
      <p class="float-right">
      <a href="#">Back to top</a>
    </p>
      <p>Copyright © {{ now()->year }}  My Laravel Application</p>
  </div>
</footer>


</body>
</html>
