<!doctype html>
<html ng-app='clinicaApp' lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="/angular.min.js"></script>

    <script type="text/javascript">
      var clinicaApp = angular.module('clinicaApp',[]);
    </script>

    <title>Import Files</title>

    {{-- Fonts --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    {{-- Styles --}}
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    @stack('styles')
    
</head>
<body class="{{ Route::currentRouteName() }}">
    @yield('content-master')
    {{-- Scripts --}}
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="http://fullcalendar.io/js/fullcalendar-3.0.0/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="http://fullcalendar.io/js/fullcalendar-3.0.0/fullcalendar.min.css" />
    @stack('scripts')
</body>
<script src="/js/product.js"></script>
<script src="/js/computer.js"></script>


</html>

