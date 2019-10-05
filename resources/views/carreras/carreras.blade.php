@extends('plantillas.plantilla1')

@section ('titulo', 'Nueva Carrera')

@section ('contenido')


<div class="row">
	<div class="col">
		<br><br><br>
		<h2>Lista de carreras</h2>
		<table class="table">
			<tr>
				<th>#</th>
				<th>Logo</th>
				<th>Nombre</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>

@foreach($carreras as $carrera)

<tr>
	<td>{{$carrera->numero}}</td>

	<td><img class="img-carrera" src="{{asset('/img/'.$carrera->logo)}}"></td>

	<td>{{$carrera->nombre}}</td>
<td><a class="btn btn-primary" href="/carreras/{{$carrera->id}}/edit" role="button">Editar</a></td>
	<td>
		<form method="post" action="/carreras/{{$carrera->id}}">
			@csrf
			@method('DELETE')
			 <button type="submit" class="btn btn-danger">Eliminar</button>
			
		</form>
	</td>


		
	
</tr>
@endforeach
		</table>		
	</div>
</div>

@endsection