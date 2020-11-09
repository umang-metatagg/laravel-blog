<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'My App') }}</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
    <header>
    @include('inc.navbar')
    </header>
    <main role="main" class="container mt-5">

    @include('inc.messages')
    @yield('content')
  
    </main>

    <footer class="blog-footer">
      <p> My Laravel Application </a> by <a href="#1"> Metatagg </a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer> 
    </body>
</html>
