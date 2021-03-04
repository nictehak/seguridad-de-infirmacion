
		@extends('adminlte::layouts.app')
@section('main-content')

		<div class="box box-solid box-success">
			<table id="tablas" 
			class="table table-striped table-bordered" cellspacing="0"  width="100%" border="22px">

			<h1 ><center>Horario Ronda</center></h1>
				<thead>
					<tr>
					<th bgcolor="#99CCFF">Ronda</th>
					 <th bgcolor="#99CCFF">Fecha</th>
					 <th bgcolor="#99CCFF">Hora Inicio</th>
					 <th bgcolor="#99CCFF">AC</th>
					 <th bgcolor="#99CCFF">Empleado</th>
					 <th bgcolor="#99CCFF">Servicio</th>
					 <th bgcolor="#99CCFF">Observacion Inicial</th>
					 <th bgcolor="#99CCFF">Observacion Final</th>
					 <th bgcolor="#99CCFF">Hora Fin</th>
					</tr>
				</thead>
				<tbody>
					@foreach($listahorario as $horarioronda)
				<tr>
				     <td>{{$horarioronda->idRonda}}</td>
				     <td>{{$horarioronda->fecha}}</td>
				     <td>{{$horarioronda->horaInicio}}</td>
				     <td>{{$horarioronda->idAC}}</td>
				     <td>{{$horarioronda->idEmpleado}}</td>
				     <td>{{$horarioronda->idServicio}}</td>
				     <td>{{$horarioronda->observacionInicial}}</td>
				     <td>{{$horarioronda->observacionFinal}}</td>
				     <td>{{$horarioronda->horaFin}}</td>
					
				 </tr>
				 @endforeach
				 </tbody>
					</table>
				
			</div>
	
@endsection