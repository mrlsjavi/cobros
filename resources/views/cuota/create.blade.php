@extends('layout')

@section('contenido')
	<h3>Nueva cuota</h3>


<form method="POST" action="{{ route('cuota.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="recurrencia">recurrencia
		<input class="form-control" type="text" name="recurrencia">
	</label>
	</p>

	<p>
	<label for="valor">valor
		<input class="form-control"type="text" name="valor">
	</label>
	</p>
	<input class="btn btn-primary" type="submit" name="" value="Guardar">

</form>


	
	
@stop