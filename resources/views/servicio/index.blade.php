@extends('layout')

@section('contenido')

<h1>Servicios</h1>

<br/>
<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>nombre</th>

			<th>accion</th>
		</tr>

	</thead>
	<tbody>
		@foreach($servicios as $servicio)
		<tr>
			<td>{{ $servicio->id}}</td>
			<td>{{ $servicio->nombre}}</td>
            <td>accion</td>
		</tr>
			@endforeach

	</tbody>

	{{ $servicios->links() }}

</table>



@stop