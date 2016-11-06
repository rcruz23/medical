@extends('layout/main')

@section('content')
    <!--Start-About-->
    <div class="clear"> </div>
    <div class="about">
        <ul>
            <li>
                <h2>47 años</h2>
                <h4>Edad</h4>
            </li>
            <li>
                <h2>64.20 Kg</h2>
                <h4>Peso</h4>
            </li>
            <li>
                <h2>145 cm</h2>
                <h4>Estatura</h4>
            </li>
            <li>
                <h2>30.4</h2>
                <h4>IMC</h4>
            </li>
            <li>
                <h2>23 %</h2>
                <h4>Grasa</h4>
            </li>
        </ul>

    </div>
    <div class="clear">

    </div>
    <div class="about-boxs">
        <div class="clear"> </div>
        <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</h4>
        <P>Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque >Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor.Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Vestibulum sed ante. Donec sagittis euismod purus. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</P>
        {!! Html::image('_frontend/web/images/box-image1.png',null,['title'=>'thumb3']) !!}
        <div class="clear"> </div>
    </div>

    <div class="about-boxs">
        <div class="clear"> </div>
        <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</h4>
        <P>Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolorconsectetuer adipiscing elit. Pellentesque sed dolor.Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Vestibulum sed ante. Donec sagittis euismod purus. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</P>
        {!! Html::image('_frontend/web/images/box-image2.png',null,['title'=>'thumb3']) !!}
        <div class="clear"> </div>
    </div>
    <div class="about-boxs">
        <div class="clear"> </div>
        <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</h4>
        <P>Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor.Sed in lacus ut enim adipiscing aliquet.>Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque  Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Vestibulum sed ante. Donec sagittis euismod purus. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</P>
        {!! Html::image('_frontend/web/images/box-image3.png',null,['title'=>'thumb3']) !!}
        <div class="clear"> </div>
    </div>
    <div class="clear">

    </div>

    <!--End-About-->
@endsection