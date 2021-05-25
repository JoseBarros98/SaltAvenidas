<!-- Nombre Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nombre', 'Nombre: *') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Compañia Field -->
<div class="form-group col-sm-12">
    {!! Form::label('compañia', 'Compañia: *') !!}
    {!! Form::text('compañia', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-12">
    {!! Form::label('telefono', 'Telefono: *') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clients.index') !!}" class="btn btn-default">Cancelar</a>
</div>
