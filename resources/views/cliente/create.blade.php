@extends('layout')

@section('contenido')
	<h3>Nuevo Cliente</h3>


<form method="POST" action="{{ route('cliente.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="nombre">Nombre
		<input class="form-control" type="text" name="nombre">
	</label>
	</p>

	<p>
	<label for="nit">nit
		<input class="form-control"type="text" name="nit">
	</label>
	</p>

	<p>
	<label for="telefono">telefono
		<input class="form-control"type="text" name="telefono">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Guardar">

</form>


	
	
@stop