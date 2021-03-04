@extends('adminlte::layouts.app')

@section('main-content')
@can ('graficaPaciente')
 <script src="{{asset('/js/Chartjs.bundle.min.js')}}" type="text/javascript"></script>


<script>
    var mas = ['Tos', 'Calentura'];
    var $Tos = <?php echo $Tos; ?>;
    var $Calentura = <?php echo $Calentura; ?>;

    var barChartData = {
        labels: mas,
        datasets: [{
            label: 'Tos',
            backgroundColor: ['rgba(220,220,220,0.5)','rgba(151,187,205,0.5)'],
            data: [$Tos,$Calentura]
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
                        borderColor: 'rgb(0, 255, 0)',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Grafica de tipo de enfermedad'
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
                <div class="panel-heading">Grafica Paciente</div>
                <div class="panel-body">
                    <canvas id="canvas" height="280" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection