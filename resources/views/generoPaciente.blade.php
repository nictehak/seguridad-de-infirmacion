@extends('adminlte::layouts.app')

@section('main-content')
@can ('generopaciente')
 <script src="{{asset('/js/Chartjs.bundle.min.js')}}" type="text/javascript"></script>

<script>
    var mas = ['Femenino', 'Masculino'];
    var $Femenino = <?php echo $Femenino; ?>;
    var $Masculino = <?php echo $Masculino; ?>;

    var barChartData = {
        labels: mas,
        datasets: [{
            label: 'Femenino',
            backgroundColor: ['#ea46d5','#240ac0'],
            data: [$Femenino,$Masculino]
        }]
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'doughnut',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: 'rgb(0, 355, 0)',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Grafica de "Paciente"'
                }
            }
        });

    };
</script>
@endcan

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Porcentaje De Pacientes Segun El Sexo</div>
                <div class="panel-body">
                    <canvas id="canvas" height="280" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection