@extends('plantillas.plantilla1')

@section('titulo','Nueva Categoria')

@section('contenido')


<div class="row">
	<div class="col">


<br><br><br>
<h2>Nuevo ROl</h2>
		<form method="post" action="/roles">
			@csrf
		  <div class="form-group">
		    <label for="rol">Nombre del rol</label>
		    <input type="text"  class="form-control" id="rol" name="nombre" >
		   
		  </div>
	
		 
		  <button type="submit" class="btn btn-primary">Guardar</button>
		</form>
				
	</div>
</div>

@endsection