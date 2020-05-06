<?php
/**
*    @author Cesar Gerardo Guzman Lopez mail 88-8live.com.mx 
        vista principal de la pagina web
*/
?>
@extends('layouts.app')
@section('content')
<div id="app">
<section class="section">
	<table class="table">
	<thead>
	<tr>
		<th> Id Categoria</th>
		<th> Nombre Categoria</th>
		<th> descripcion </th>
		<th class="bg-info text-light">Acciones</th>
	</tr>
	</thead>
	<tbody>
		@foreach ($categorias as $categoria)
		<tr>
			<td >{{$categoria->Idcategoria}}</td><td >{{$categoria->nombrecategoria}}</td><td >{{$categoria->descripcion}}</td><td>
			<form action="{{route('BD_UAM/CategoriasDel',$categoria->Idcategoria)}}" method="post">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="_method" value="delete" />
				<button type="submit">Eliminar</button>
			</form>
	 	 	<b-button v-b-modal="'Update_{{$categoria->Idcategoria}}'">Cambiar</b-button>
			<!-- aqui va el modal -->
			<b-modal id="Update_{{$categoria->Idcategoria}}" hide-footer >		
				<h2>ID:  {{$categoria->Idcategoria}}</h2>
				<form action="{{route('BD_UAM/CategoriasPatch',$categoria->Idcategoria)}}"  method="post">
			 		<input type="hidden" name="_token" value="{{csrf_token()}}">			
			 		<input type="hidden" name="_method" value="patch" /> 
					Nombre Categoria
 					 	<input type="text" name="nombrecategoria" value="{{$categoria->nombrecategoria}}" class="form-control" required="required"> 
					Descripcion
						{!! Form::textarea('descripcion', $categoria->descripcion, ['class'=>'form-control','required'=>"required" ]) !!}
        			<button type="submit" class="btn btn-primary" data-dismiss="modal">Actualizar</button>
				</form>
			</b-modal>
			<!-- aqui termina el modal -->  
			</td>
		</tr>
		@endforeach
	</tbody>
	<tfoot>
			<tr>
				<td>
					<form action="{{route('BD_UAM/Categorias')}}" id="new_Cat" method="post"></form>
  					<input type="hidden" name="_token" value="{{csrf_token()}}" form="new_Cat">
						*
				</td>
				<td>
  					<input type="text" name="nombrecategoria" value="" form="new_Cat" class="form-control" required="required">  
				</td>
				<td> 
						{!! Form::textarea('descripcion', null, ['class'=>'form-control','rows' => 1, 'form'=>'new_Cat', 'required'=>"required"]) !!}
				</td>
				<td>
					<button type="submit" form="new_Cat" class="btn border border-info">Agregar</button>
				</td>
			</tr>
	</tfoot>
	</table>
</section>
</div>
 @endsection