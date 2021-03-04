@extends('adminlte::layouts.app')

@section('main-content')
<div class="container">
    <a href="{{ url('/products') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Producto</div>

                <div class="panel-body">                                        
                    <p><strong>Nombre</strong>     {{ $product->name }}</p>
                    <p><strong>Descripción</strong>  {{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection