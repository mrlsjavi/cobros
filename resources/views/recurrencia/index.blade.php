@extends('layout')

@section('contenido')

<h1>Recurrencias</h1>

<br/>
<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>tipo</th>
			<th>fecha limite</th>
			<th>accion</th>
		</tr>

	</thead>
	<tbody>
		@foreach($recurrencias as $recurrencia)
		<tr>
			<td>{{ $recurrencia->id}}</td>
			<td>{{ $recurrencia->tipo}}</td>
			<td>{{ $recurrencia->limite}}</td>
            <td>accion</td>
		</tr>
			@endforeach

	</tbody>

	{{ $recurrencias->links() }}

</table>



@stop