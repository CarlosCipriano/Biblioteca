@extends('plantillas.plantilla1')

@section ('titulo', 'Editar Carrera')

@section ('contenido')
  <div class="row">
  	<div class="col">
  		<br><br><br>
  		<h2>Nueva Carrera</h2>
			  		<form method="post" action="/carreras/{{$carrera->id}}" enctype="multipart/form-data">
			  			@csrf
			  			<input type="hidden" name="_method" value="PUT">
			  <div class="form-group">
			    <label for="nombre">Nombre</label>
			    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$carrera->nombre}}">
			  </div>

			  <div class="form-group">
			    <label for="logo">Logo</label>
			    <input type="file" class="form-control" id="logo" name="logo" value="{{$carrera->logo}}">
			  </div>

			  <div class="form-group">
			    <label for="numero">Numero</label>
			    <input type="text" class="form-control" id="numero" name="numero" value="{{$carrera->numero}}">
			  </div>
			    <button type="submit" class="btn btn-primary">Guardar</button>

			</form>

  	</div>
  </div>


@endsection