@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Perfilpermisos</div>
                    <div class="card-body">
                        <a href="{{ url('/perfil-permisos/create') }}" class="btn btn-success btn-sm" title="Add New PerfilPermiso">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar
                        </a>

                        <form method="GET" action="{{ url('/perfil-permisos') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>Perfil</th><th>Permisos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($perfilpermisos as $item)
                                    <tr>
                                    
                                        <td>{{ $item->perfil->nombre }}</td><td>{{ $item->permisos->nombre }}</td>
                                        <td>
                                            <a href="{{ url('/perfil-permisos/' . $item->idPerfilPermisos) }}" title="View PerfilPermiso"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/perfil-permisos/' . $item->idPerfilPermisos . '/edit') }}" title="Edit PerfilPermiso"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/perfil-permisos' . '/' . $item->idPerfilPermisos) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete PerfilPermiso" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $perfilpermisos->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
