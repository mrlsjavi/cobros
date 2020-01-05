@extends('layout')

@section('contenido')

<h1>Clientes</h1>

<br/>
<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>nombre</th>
			<th>nit</th>
			<th>telefono</th>
			<th>accion</th>
		</tr>

	</thead>
	<tbody>
		@foreach($clientes as $cliente)
		<tr>
			<td>{{ $cliente->id}}</td>
			<td>{{ $cliente->nombre}}</td>
			<td>{{ $cliente->nit}}</td>
            <td>{{ $cliente->telefono}}</td>
            <td>accion</td>
		</tr>
			@endforeach

	</tbody>

	{{ $clientes->links() }}

</table>



@stop