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
		<th> Id Provedor</th>
		<th> Nombre Campaña</th>
		<th> Nombre Contacto </th>
		<th>Direccion</th>
		<th>Ciudad</th>
		<th>Region</th>
		<th>Codigo postal  </th>
		<th>Pais</th>
		<th>Telefono</th>
		<th>fax</th>
		<th>paginaprincipal</th>
		<th class="bg-info text-light">Acciones</th>
	</tr>
	</thead>
	<tbody>
		@foreach ($Provedores as $provedor)
		<tr>
			<td >{{$provedor->IdProveedor}}</td>
			<td >{{$provedor->nombrecompania}}</td>
			<td >{{$provedor->nombrecontacto}}</td>
			<td>{{$provedor->direccion}}</td>
			<td>{{$provedor->ciudad}}</td>
			<td>{{$provedor->region}}</td>
			<td>{{$provedor->codPostal}}</td>
			<td>{{$provedor->pais}}</td>
			<td>{{$provedor->telefono}}</td>
			<td>{{$provedor->fax}}</td>
			<td>{{$provedor->paginaprincipal}}</td> 
			<td> 
			<form action="{{route('BD_UAM/ProvedoresDel',$provedor->IdProveedor)}}" method="post">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="_method" value="delete" />
				<button type="submit">Eliminar</button>
			</form> 
	 	 	<b-button v-b-modal="'Update_{{$provedor->IdProveedor}}'">Cambiar</b-button>
			<!-- aqui va el modal -->
		
			<b-modal id="Update_{{$provedor->IdProveedor}}" hide-footer >		
				<h2>ID:  {{$provedor->IdProveedor}}</h2>
				<form action="{{route('BD_UAM/ProvedoresPatch',$provedor->IdProveedor)}}"  method="post">
			 		<input type="hidden" name="_token" value="{{csrf_token()}}">			
			 		<input type="hidden" name="_method" value="patch" />
			 		
			 	Nombre de la compania	
					<input type="text" name="nombrecompania" value="{{$provedor->nombrecompania}}" class="form-control" required="required"> 
					
					Nombre Contacto
					<input type="text" name="nombrecontacto" value="{{$provedor->nombrecontacto}}" class="form-control" required="required"> 
					
		Direccion				
					<input type="text" name="direccion" value="{{$provedor->direccion}}" class="form-control" required="required"> 

Ciudad
					<input type="text" name="ciudad" value="{{$provedor->ciudad}}" class="form-control" required="required"> 
Region

					<input type="text" name="region" value="{{$provedor->region}}" class="form-control" required="required"> 
Codigo Postal

					<input type="text" name="codPostal" value="{{$provedor->codPostal}}" class="form-control" required="required"> 

Pais
					<input type="text" name="pais" value="{{$provedor->pais}}" class="form-control" required="required"> 

Telefono

					<input type="text" name="telefono" value="{{$provedor->telefono}}" class="form-control" required="required"> 
FAX
					<input type="text" name="fax" value="{{$provedor->fax}}" class="form-control" required="required"> 

						paginaprincipal
					<input type="text" name="paginaprincipal" value="{{$provedor->paginaprincipal}}" class="form-control" required="required">
							
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
					<form action="{{route('BD_UAM/Provedores')}}" id="new_Prov" method="post"></form>
  					<input type="hidden" name="_token" value="{{csrf_token()}}" form="new_Prov">
						*
				</td>
				<td>
  					<input type="text" name="nombrecompania"  form="new_Prov" class="form-control" required="required">  
				</td>
				<td> 
					<input type="text" name="nombrecontacto"  form="new_Prov" class="form-control" required="required">
				</td>
				<td> 
					<input type="text" name="direccion"  form="new_Prov" class="form-control" required="required">
				</td>
				<td> 
					<input type="text" name="ciudad"  form="new_Prov" class="form-control" required="required">
				</td>
				<td> 
					<input type="text" name="region"  form="new_Prov" class="form-control" required="required">
				</td>
				<td> 
					<input type="text" name="codPostal"  form="new_Prov" class="form-control" required="required">
				</td>
				<td> 
					<input type="text" name="pais"  form="new_Prov" class="form-control" required="required">
				</td>
				<td> 
					<input type="text" name="telefono"  form="new_Prov" class="form-control" required="required">
				</td>
				<td> 
					<input type="text" name="fax"  form="new_Prov" class="form-control" required="required">
				</td>
				<td> 
					<input type="text" name="paginaprincipal"  form="new_Prov" class="form-control" required="required">
				</td>
				<td>
					<button type="submit" form="new_Prov" class="btn border border-info">Agregar</button>
				</td>
			</tr>
	</tfoot>
	</table>
</section>
</div>
 @endsection