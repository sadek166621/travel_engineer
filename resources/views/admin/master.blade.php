
<!doctype html>
{{--<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->--}}
{{--<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->--}}
{{--<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->--}}
{{--<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->--}}
<head>
    {{-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
    <title>
        @yield('title')
    </title>
{{--    <meta name="description" content="Ela Admin - HTML5 Admin Template">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png"> --}}
    @include('admin.include.style')
</head>

<body>
<!-- Left Panel -->
@include('admin.include.sidenavbar')
<!-- /#left-panel -->
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
   @include('admin.include.header')
    <!-- /#header -->
    <!-- Content -->
    <div class="content">
        <!-- Animated -->
        @yield('content')
        <!-- .animated -->
    </div>
    <!-- /.content -->
    <div class="clearfix"></div>
    <!-- Footer -->
    @include('admin.include.footer')
    <!-- /.site-footer -->
</div>
<!-- /#right-panel -->
@php
    $route = Route::currentRouteName();
@endphp
@include('admin.include.script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@if ($route == 'admin.offer.add' || $route == 'admin.offer.edit' )
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endif
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<!-- include summernote css/js -->
{{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}



@stack('js')
</body>
</html>
