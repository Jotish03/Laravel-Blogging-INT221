<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blogging Made Easy</title>
    <link rel="icon" href="/storage/cover_images/titleimg.png" type="image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<body>
    <div >
        @include('inc.nav')
        
<div class="container">
        <main class="py-4">
        @include('inc.message')
            @yield('content')
        </main>

    </div>
    <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace( 'article-ckeditor' );

  </script>
</body>
</html>
