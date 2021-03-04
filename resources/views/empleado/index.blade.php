@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Empleado</div>
                    <div class="card-body">
                        @can('empleado.create')
                        <a href="{{ url('/empleado/create') }}" class="btn btn-success btn-sm" title="Add New empleado">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar
                        </a>
                        @endcan

                         <a href="listaEmpleado" class="btn btn-success btn-sm" title="Add New Empleado">
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
                        </a>

                        <!--<a href="Empleado/export" class="btn btn-success btn-sm" title="Add New Area">
                            <i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel
                             </a>-->

                        <form method="GET" action="{{ url('/empleado') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nombre</th><th>Apellido Paterno</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($empleado as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->idEmpleado }}</td>
                                        <td>{{ $item->nombre }}</td><td>{{ $item->apellidoMaterno }}</td>
                                        <td>
                                            @can('empleado.show')
                                            <a href="{{ url('/empleado/' . $item->idEmpleado) }}" title="View empleado"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            @endcan
                                            @can('empleado.edit')
                                            <a href="{{ url('/empleado/' . $item->idEmpleado . '/edit') }}" title="Edit empleado"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            @endcan
                                            @can('empleado.destroy')
                                            <form method="POST" action="{{ url('/empleado' . '/' . $item->idEmpleado) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete empleado" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $empleado->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
