@extends('adminlte::layouts.app')

@section('main-content')
@can ('graficaEspecialidad')
 <script src="{{asset('/js/Chartjs.bundle.min.js')}}" type="text/javascript"></script>

<script>
    var mas = ['Dentista', 'Pediatra', 'Fisioterapeuta', 'Ginecólogo', 'Neurolingistica'];
    var $Dentista = <?php echo $Dentista; ?>;
    var $Pediatra = <?php echo $Pediatra; ?>;
    var $Fisioterapeuta = <?php echo $Fisioterapeuta; ?>;
    var $Ginecólogo = <?php echo $Ginecólogo; ?>;
    var $Neurolingistica = <?php echo $Neurolingistica; ?>;

    var barChartData = {
        labels: mas,
        datasets: [{
            label: 'Dentista',
            backgroundColor: ['#ea46d5','#240ac0', '#CC0033', ' #B8860B', '#8B008B'],
            data: [$Dentista,$Pediatra, $Fisioterapeuta, $Ginecólogo, $Neurolingistica]
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
                    text: 'Grafica de "Especialidad"'
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
                <div class="panel-heading">Grafica</div>
                <div class="panel-body">
                    <canvas id="canvas" height="280" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection