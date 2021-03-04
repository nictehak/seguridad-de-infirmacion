<div class="form-group {{ $errors->has('idPaquete') ? 'has-error' : ''}}">
    <label for="idPaquete" class="col-md-4 control-label">{{ 'Idpaquete' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idPaquete" type="number" id="idPaquete" value="{{ $netflix->idPaquete or ''}}" >
        {!! $errors->first('idPaquete', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="col-md-4 control-label">{{ 'Nombre' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nombre" type="text" id="nombre" value="{{ $netflix->nombre or ''}}" >
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('costo') ? 'has-error' : ''}}">
    <label for="costo" class="col-md-4 control-label">{{ 'Costo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="costo" type="text" id="costo" value="{{ $netflix->costo or ''}}" >
        {!! $errors->first('costo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('descrpcion') ? 'has-error' : ''}}">
    <label for="descrpcion" class="col-md-4 control-label">{{ 'Descrpcion' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="descrpcion" type="text" id="descrpcion" value="{{ $netflix->descrpcion or ''}}" >
        {!! $errors->first('descrpcion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tiempo') ? 'has-error' : ''}}">
    <label for="tiempo" class="col-md-4 control-label">{{ 'Tiempo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="tiempo" type="text" id="tiempo" value="{{ $netflix->tiempo or ''}}" >
        {!! $errors->first('tiempo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
