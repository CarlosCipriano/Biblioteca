@extends('plantillas.plantilla1')

@section('titulo','Nueva Categoria')

@section('contenido')


<div class="row">
	<div class="col">
		<br><br><br>
		<h2>Lista de carreras</h2>
		<table class="table">
			<tr>
				<th>#</th>
				<th>Titulo</th>
				<th>ISBN</th>
				<th>Autor</th>
				<th>Categoria</th>
				<th>Carrera</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>

@foreach($libros as $libro)

<tr>
	<td>{{$loop->index+1}}</td>
	<td>{{$libro->titulo}}</td>
	<td>{{$libro->isbn}}</td>
	<td>{{$libro->autor}}</td>
	<td>{{$libro->categoria->nombre}}</td>
	<td>{{$libro->carrera->nombre}}</td>


<td>	<button type="submit" class="btn btn-primary">Editar</button></td>
<td>	<button type="submit" class="btn btn-danger">Eliminar</button></td>
</tr>
@endforeach
		</table>		
	</div>
</div>


@endsection