<!--<div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}">
    <label for="id" class="col-md-4 control-label">{{ 'Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="id" type="text" id="id" value="{{ $usuario->id or ''}}" >
        {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
    </div>
</div>-->
<!--<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Nombre' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $usuario->name or ''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>-->

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-md-4 control-label">{{ 'E-mail' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="email" type="text" id="email" value="{{ $usuario->email or ''}}" >
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="col-md-4 control-label">{{ 'Password' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="password" type="text" id="password" value="{{ $usuario->password or ''}}" >
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div>



<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="col-md-4 control-label">{{ 'Perfil' }}</label>
    <div class="col-md-6">
        {!!Form::select('idPerfil',App\Perfil::all()->
        pluck('nombre', 'idPerfil'),null,['class'=>'form-control'])!!}
        {!!$errors->first('idPerfil', '<p class="help-block">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
