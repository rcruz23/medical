@extends('layout/main')

@section('styles')
    {{ Html::style(asset('chartist-js-develop/dist/chartist.min.css')) }}
@endsection

@section('content')
    <!--Start-About-->
    <div class="clear"> </div>

    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 about-boxs">
            <h4>Frecuencia cardiaca en reposo (lpm)</h4>
            <div class="ct-chart01 ct-golden-section"></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 about-boxs">
            <h4>Presión arterial sistólica (mmHg)</h4>
            <div class="ct-chart02 ct-golden-section"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 about-boxs">
            <h4>Presión arterial diastólica (mmHg)</h4>
            <div class="ct-chart03 ct-golden-section"></div>
        </div>
    </div>
@endsection

@section('scripts')
    {{ Html::script(asset('chartist-js-develop/dist/chartist.min.js')) }}
<script type="text/javascript">
    new Chartist.Line('.ct-chart01', {
        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
        series: [
            [12, 9, 7, 8, 5],
            [2, 1, 3.5, 7, 3],
            [1, 3, 4, 5, 6]
        ]
    }, {
        fullWidth: true,
        chartPadding: {
            right: 40
        }
    });

    new Chartist.Line('.ct-chart02', {
        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
        series: [
            [12, 9, 7, 8, 5],
            [2, 1, 3.5, 7, 3],
            [1, 3, 4, 5, 6]
        ]
    }, {
        fullWidth: true,
        chartPadding: {
            right: 40
        }
    });

    new Chartist.Line('.ct-chart03', {
        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
        series: [
            [12, 9, 7, 8, 5],
            [2, 1, 3.5, 7, 3],
            [1, 3, 4, 5, 6]
        ]
    }, {
        fullWidth: true,
        chartPadding: {
            right: 40
        }
    });
</script>
@endsection