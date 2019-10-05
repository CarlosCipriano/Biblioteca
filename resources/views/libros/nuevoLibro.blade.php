@extends('plantillas.plantilla1')

@section('titulo','Nueva Categoria')

@section('contenido')


<div class="row">
  	<div class="col">
  		<br><br><br>
  		<h2>Nuevo Libro</h2>
			  	<form method="post" action="/libros" >
			  	@csrf
			  <div class="form-group">
			    <label for="titulo">Titulo</label>
			    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
			  </div>

			  <div class="form-group">
			    <label for="isbn">ISBN</label>
			    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN">
			  </div>

			  <div class="form-group">
			    <label for="autor">autor</label>
			    <input type="text" class="form-control" id="autor" name="autor" placeholder="Nombre del autor">
			  </div>

			

			<div class="form-group">
		    <label for="categorias">Categorias</label>
		    <select class="form-control" name="categoria_id" id="categorias">
		      <option value="0">Selecciona una categoria</option>
		     @foreach($categorias as $categoria)
		      <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
		     @endforeach
		    </select>
		  	</div>

		  	<div class="form-group">
		    <label for="carrera">Carrera</label>
		    <select class="form-control" name="carrera_id" id="carrera">
		      <option value="0">Selecciona una carrera</option>
		     @foreach($carreras as $carrera)
		      <option value="{{$carrera->id}}">{{$carrera->nombre}}</option>
		     @endforeach
		    </select>
		  	</div>
			    <button type="submit" class="btn btn-primary">Guardar</button>

			</form>

  	</div>
  </div>

@endsection