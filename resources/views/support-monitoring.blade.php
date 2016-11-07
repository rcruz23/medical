@extends('layout/main')

@section('content')
    <div class="grids">
        <div class="grid box">
            <h4>Dr. Colaborador</h4>
            <a href="services.html">{!! Html::image('_frontend/web/images/grid1.png',null,['title'=>'grid1']) !!}</a>
            <h5>Especialidad 1</h5>
            <p>Información adicional</p>
        </div>
        <div class="grid box">
            <h4>Dra. Ramos</h4>
            <a href="services.html">{!! Html::image('_frontend/web/images/grid2.png',null,['title'=>'grid2']) !!}</a>
            <h5>Especialidad 2</h5>
            <p>Información adicional</p>
        </div>
        <div class="grid box">
            <h4>Dr. Joel</h4>
            <a href="services.html">{!! Html::image('_frontend/web/images/grid3.png',null,['title'=>'grid3']) !!}</a>
            <h5>Especialidad 3</h5>
            <p>Información adicional</p>
        </div>
        <div class="grid box">
            <h4>Dra. Dominguez</h4>
            <a href="services.html">{!! Html::image('_frontend/web/images/grid4.png',null,['title'=>'grid4']) !!}</a>
            <h5>Especialidad 4</h5>
            <p>Información adicional</p>
        </div>
        <div class="clear"> </div>
    </div>
    <div class="clear"> </div>
    </div>
@endsection