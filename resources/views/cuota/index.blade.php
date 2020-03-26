@extends('layout')

@section('contenido')

<h1>Cuotas</h1>

<br/>
<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>recurrencia</th>
			<th>valor</th>

		</tr>

	</thead>
	<tbody>
		@foreach($cuotas as $cuota)
		<tr>
			<td>{{ $cuota->id}}</td>
			<td>{{ $cuota->recurrencia->tipo}}</td>
			<td>{{ $cuota->valor}}
            <td>accion</td>
		</tr>
			@endforeach

	</tbody>

	{{ $cuotas->links() }}

</table>



@stop