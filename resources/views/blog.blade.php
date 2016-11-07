@extends('layout/main')

@section('content')
    <div class="section group">
        <div class="col_1_of_3 span_1_of_3 frist">
            <h2>Categorias</h2>
            <ul>
                <li>{!! Html::image('_frontend/web/images/marker3.png',null,['title'=>'marker']) !!}<a href="#">Lorem ipsum dolor sit amet</a></li>
                <li>{!! Html::image('_frontend/web/images/marker3.png',null,['title'=>'marker']) !!}<a href="#">Lorem ipsum dolor sit amet</a></li>
                <li>{!! Html::image('_frontend/web/images/marker3.png',null,['title'=>'marker']) !!}<a href="#">Lorem ipsum dolor sit amet</a></li>
                <li>{!! Html::image('_frontend/web/images/marker3.png',null,['title'=>'marker']) !!}<a href="#">Lorem ipsum dolor sit amet</a></li>
                <li>{!! Html::image('_frontend/web/images/marker3.png',null,['title'=>'marker']) !!}<a href="#">Lorem ipsum dolor sit amet</a></li>
                <li>{!! Html::image('_frontend/web/images/marker3.png',null,['title'=>'marker']) !!}<a href="#">Lorem ipsum dolor sit amet</a></li>
                <li>{!! Html::image('_frontend/web/images/marker3.png',null,['title'=>'marker']) !!}<a href="#">Lorem ipsum dolor sit amet</a></li>
                <li>{!! Html::image('_frontend/web/images/marker3.png',null,['title'=>'marker']) !!}<a href="#">Lorem ipsum dolor sit amet</a></li>
                <li>{!! Html::image('_frontend/web/images/marker3.png',null,['title'=>'marker']) !!}<a href="#">Lorem ipsum dolor sit amet</a></li>
                <li>{!! Html::image('_frontend/web/images/marker3.png',null,['title'=>'marker']) !!}<a href="#">Lorem ipsum dolor sit amet</a></li>
                <li>{!! Html::image('_frontend/web/images/marker3.png',null,['title'=>'marker']) !!}<a href="#">Lorem ipsum dolor sit amet</a></li>
                <li>{!! Html::image('_frontend/web/images/marker3.png',null,['title'=>'marker']) !!}<a href="#">Lorem ipsum dolor sit amet</a></li>
            </ul>
        </div>
        <div class="col_1_of_3 span_1_of_3 second">
            <h2>¿Estres?</h2>
            {!! Html::image('_frontend/web/images/box-image1.png',null,['title'=>'img1']) !!}
            <h3>Puedes presentar síndrome de intestino irritable </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a href="single.html">Leer más</a>
        </div>
        <div class="col_1_of_3 span_1_of_3 second">
            <h2>10 minutos de ejercicio</h2>
            {!! Html::image('_frontend/web/images/box-image3.png',null,['title'=>'img1']) !!}
            <h3>consectetur adipisicing elit, sed do eiusmod tempor </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a href="single.html">Leer más</a>
        </div>
    </div>
@endsection