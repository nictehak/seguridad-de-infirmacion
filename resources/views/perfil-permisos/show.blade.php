@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">PerfilPermiso {{ $perfilpermiso->idPerfilPermisos }}</div>
                    <div class="card-body">

                        <a href="{{ url('/perfil-permisos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/perfil-permisos/' . $perfilpermiso->idPerfilPermisos . '/edit') }}" title="Edit PerfilPermiso"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('perfilpermisos' . '/' . $perfilpermiso->idPerfilPermisos) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete PerfilPermiso" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $perfilpermiso->idPerfilPermisos }}</td>
                                    </tr>
                                    <tr><th> IdPerfilPermisos </th><td> {{ $perfilpermiso->idPerfilPermisos }} </td></tr><tr><th> IdPerfil </th><td> {{ $perfilpermiso->idPerfil }} </td></tr><tr><th> IdPermisos </th><td> {{ $perfilpermiso->idPermisos }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
