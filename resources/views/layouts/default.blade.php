<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- Google tag manager --}}
    {{-- @include("snippets.analytics") --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Games') }}</title>

    {{-- metatags --}}
    @include("snippets.metatags")
    {{-- favicons --}}
    @include("snippets.favicons")
    {{-- stylesheets --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    {{-- no-script Google tag manager --}}
    {{-- @include("snippets.tag_manager") --}}

    {{-- content --}}
    <div id="main-wrapper">
      {{-- header --}}
      @include('shared.header')

      <div class="container">
          @yield('content')
      </div>

      {{-- Footer --}}
      @include('shared.footer')
    </div>

    {{-- preloader --}}
    @include("shared._preloader")

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
