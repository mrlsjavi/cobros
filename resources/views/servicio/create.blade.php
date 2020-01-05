@extends('layout')

@section('contenido')
	<h3>Nuevo Servicio</h3>


<form method="POST" action="{{ route('servicio.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="nombre">Nombre
		<input class="form-control" type="text" name="nombre">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Guardar">

</form>


	
	
@stop