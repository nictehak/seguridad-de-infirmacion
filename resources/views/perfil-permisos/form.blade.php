
<div class="form-group {{ $errors->has('idEstatus') ? 'has-error' : ''}}">
    <label for="idEstatus" class="col-md-4 control-label">{{ 'Perfil' }}</label>
    <div class="col-md-6">
        {!!Form::select('idPerfil',App\Perfil::all()->
        pluck('nombre','idPerfil'),null,['class'=>'form-control'])!!}
        {!!$errors->first('idPerfil', '<p class="help-block">:message</p>') !!}

    </div>
</div>

<div class="form-group {{ $errors->has('idEstatus') ? 'has-error' : ''}}">
    <label for="idEstatus" class="col-md-4 control-label">{{ 'Permiso' }}</label>
    <div class="col-md-6">
        {!!Form::select('idPermisos',App\Permiso::all()->
        pluck('nombre','idPermisos'),null,['class'=>'form-control'])!!}
        {!!$errors->first('idPermisos', '<p class="help-block">:message</p>') !!}

    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
