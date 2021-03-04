@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Paciente {{ $paciente->idPaciente }}</div>
                    <div class="card-body">

                        <a href="{{ url('/paciente') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar </button></a>
                        <!--<a href="{{ url('/paciente/' . $paciente->idPaciente . '/edit') }}" title="Edit Paciente"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('paciente' . '/' . $paciente->idPaciente) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Paciente" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>-->
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                   <!-- <tr>
                                        <th>ID</th><td>{{ $paciente->idPaciente }}</td>
                                    </tr>-->
                                    <!--<tr><th> IdPaciente </th><td> {{ $paciente->idPaciente }} </td></tr>--><tr><th> Nombre </th><td> {{ $paciente->nombre }} </td></tr><tr><th> Apellidos </th><td> {{ $paciente->apellidos }} </td></tr><tr><th> Sexo </th><td> {{ $paciente->sexo }} </td></tr><tr><th> Fecha de Nacimiento </th><td> {{ $paciente->fecha_nacimiento }} </td></tr><tr><th> Telefono </th><td> {{ $paciente->telefono }} </td></tr><tr><th> Dirección </th><td> {{ $paciente->direccion }} </td></tr><tr><th> Enfermedad </th><td> {{ $paciente->enfermedad }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
