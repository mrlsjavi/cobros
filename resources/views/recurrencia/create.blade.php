@extends('layout')

@section('contenido')
	<h3>Nueva Recurrencia</h3>


<form method="POST" action="{{ route('recurrencia.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="tipo">tipo
		<input class="form-control" type="text" name="tipo">
	</label>
	</p>

	<p>
	<label for="limite">limite
		<input class="form-control"type="int" name="limite">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Guardar">

</form>


	
	
@stop