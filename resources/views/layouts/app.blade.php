<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CoreUI for Bootstrap CSS -->
    <link href="{{ asset('vendors/css/simplebar.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/css/style.css' ) }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>{{ config('app.name', 'Laravel') }}</title>

</head>
<body>

@include('components.sidebar')

<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    @include('components.header')
    <div class="body flex-grow-1 px-3">
        @yield('content')
    </div>
</div>

<script src="{{ asset('vendors/js/coreui.bundle.min.js') }}"></script>
<script src="{{ asset('vendors/js/simplebar.min.js') }}"></script>
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script src="https://kit.fontawesome.com/c9ba828f99.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@yield('js')

</body>
</html>
