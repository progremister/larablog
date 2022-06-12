<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- Scripts -->
    
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset("css/app.css")}}" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

    <div class="page" id="page">

        <!-- Header -->
        @include('partials.header')
        
        <!-- Sidebar -->
        @include('partials.sidebar')

        <!-- Content -->
        <main class="main">
            <div class="container">
                @yield('body')
            </div>
        </main>
        
    </div>

     <!-- Modals -->
    @include('partials.contact-modal')
    @include('partials.share-modal')
    @include('partials.story-modal')

</body>
    
<!-- Scripts-->
<script src="{{ asset('../js/app.js') }}"></script>

</html>