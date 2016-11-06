<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Healthy Website Template | Home :: W3layouts</title>
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('_frontend/web/images/pageicon.png') }}" />
    {!! Html::style(asset('_frontend/web/css/style.css'), ['media'=>'all']) !!}
    <!--link href="web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
    <link rel="stylesheet" href="web/css/camera.css" type="text/css" media="all" /-->
    <meta name="keywords" content="Healthy iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    {!! Html::style(asset('_frontend/web/css/responsiveslides.css')) !!}
    <!--link rel="stylesheet" href="web/css/responsiveslides.css"-->
    {!! Html::style(asset('_frontend/web/bootstrap/css/bootstrap.min.css')) !!}
    {!! Html::style(asset('_frontend/web/font-awesome-4.7.0/css/font-awesome.min.css')) !!}
    @yield('styles')
</head>
<body>
@section('header')
    @include('common.header')
@show

<div class="clear"> </div>
@section('topmenu')
    @include('common.top-menu')
@show

<div class="clear"> </div>
<!--start-image-slider---->
<div class="image-slider">
    <!-- Slideshow 1 -->
    <ul class="rslides" id="slider1">
        <li>{!! Html::image('_frontend/web/images/1.jpg') !!}</li>
        <li>{!! Html::image('_frontend/web/images/2.jpg') !!}</li>
        <li>{!! Html::image('_frontend/web/images/1.jpg') !!}</li>
    </ul>
    <!-- Slideshow 2 -->
</div>
<!--End-image-slider---->
<div class="clear"> </div>
<div class="wrap">
    <div class="content">
        @section('content')
        @show
    </div>
    <!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script-->
    {!! Html::script('_frontend/web/js/jquery-3.1.1.min.js') !!}
    {!! Html::script('_frontend/web/js/responsiveslides.min.js') !!}
    {!! Html::script('_frontend/web/bootstrap/js/bootstrap.min.js') !!}
    <!--script src="web/js/responsiveslides.min.js"></script-->
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {

            // Slideshow 1
            $("#slider1").responsiveSlides({
                maxwidth: 1600,
                speed: 600
            });
        });
    </script>
    @yield('scripts')
    <div class="clear"> </div>
    <div class="footer">
        @section('footer')
            @include('common.footer')
        @show
    </div>
</div>
</body>
</html>