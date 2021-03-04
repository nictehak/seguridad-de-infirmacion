@extends('adminlte::layouts.app')

@section('main-content')
<div class="container">
      <a href="{{ url('/roles') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
      
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Usuario</div>

                <div class="panel-body">                    
                    {{ Form::open(['route' => 'users.store']) }}

                        @include('users.partials.Crear')
                        
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection