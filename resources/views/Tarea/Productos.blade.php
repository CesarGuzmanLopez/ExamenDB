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
		<th>ID Producto</th>
	 	<th>nombreProducto</th>
	 	<th>Provedor</th>
	 	<th>Categoria</th>
		<th>Compania Envios</th>
		<th>Cantidad Por unidad</th>
		<th>Precio unidad</th>
		<th>UnIdades En Existencia</th>
		<th>UnIdades En PedIdo</th>
		<th>Suspendido</th>
		<th class="bg-info text-light">Cambiar</th>
	</tr>
	</thead>
	<tbody>
		@foreach ($Productos as $Producto)
		<tr>
		<td>{{$Producto->IdProducto}}</td>
		<td>{{$Producto->nombreProducto}}</td>
		<td>{{$Producto->t_bd_proveedore->nombrecompania}}</td>
		<td>{{$Producto->t_bd_categoria->nombrecategoria}}</td>
		<td>
			<div>{{$Producto->t_bd_companiasdeenvio->nombrecompania}}</div>
			<b>Tel:</b><cite>{{$Producto->t_bd_companiasdeenvio->telefono}}</cite> 
		</td>
		<td>{{$Producto->cantIdadPorUnIdad}}</td>
		<td>{{$Producto->precioUnIdad}}</td>
		<td>{{$Producto->unIdadesEnExistencia}}</td>
		<td>{{$Producto->unIdadesEnPedIdo}}</td>
		<td>{{$Producto->suspendIdo}}</td>
		<td>			
			<form action="{{route('BD_UAM/ProductosDel',$Producto->IdProducto)}}" method="post">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="_method" value="delete" />
				<button type="submit">Eliminar</button>
			</form>
			</td>


		</tr>
		@endforeach
	</tbody>
	<tfoot>
			<tr>
				<td> 
					<form action="{{route('BD_UAM/Productos')}}" id="new_Prod" method="post"></form>
  					<input type="hidden" name="_token" value="{{csrf_token()}}" form="new_Prod" required>
						*
				</td>
				<td>  
					<input type="text"  class="form-control" name="nombreProducto" form="new_Prod" required>
				</td>
				<td>  
					   <select class="form-control" id="IdProveedor" name="IdProveedor" form="new_Prod"  required>
					      @foreach($Provedores as $Provedor)
								<option value="{{$Provedor->IdProveedor}}">{{$Provedor->nombrecompania}}</option>
					      @endforeach 
					    </select>
				</td>
				<td>  
					   <select class="form-control" id="IdCategoria" name="IdCategoria" form="new_Prod" required>
					      @foreach($Categorias as $Categoria)
								<option value="{{$Categoria->Idcategoria}}">{{$Categoria->nombrecategoria}}</option>
					      @endforeach 
					    </select>
				</td>
						<td>  
					   <select class="form-control" id="Idcompaniaenvios" name="Idcompaniaenvios" form="new_Prod"  required>
					     <option value=""></option>
					      @foreach($Envios as $Envio)
								<option value="{{$Envio->Idcompaniaenvios}}">{{$Envio->nombrecompania}}</option>
					      @endforeach 
					    </select>
					    <div class="row">
					    <div class="col">
						Añadir compania de envio</div><div class="col">	<b-button class="btn btn-info" v-b-modal="'AddCompaniaEnivio'">+</b-button></div>
						<b-modal id="AddCompaniaEnivio" hide-footer >		
				<form action="{{route('BD_UAM/Envios')}}"  method="post">
			 		<input type="hidden" name="_token" value="{{csrf_token()}}">			
					Nombre Compania de envio
 					 	<input type="text" name="nombrecompania" class="form-control" required="required"> 
					Telefono
					<input type="text" name="telefono" class="form-control" required="required">
        			<button type="submit" class="btn btn-primary" data-dismiss="modal">añadir</button>
				</form>
			</b-modal>
						</div>
				</td>
				<td>
					<input type="number"  class="form-control" name="cantIdadPorUnIdad" form="new_Prod" required>
				</td>
				<td>
					<input type="number"  class="form-control" name="precioUnIdad" form="new_Prod" required>
				</td>
				<td>
					<input type="number"  class="form-control" name="unIdadesEnExistencia" form="new_Prod" required>
				</td>
				<td>
					<input type="number"  class="form-control" name="unIdadesEnPedIdo" form="new_Prod" required>
				</td>
				<td>
		  			 <select class="form-control" id="suspendIdo" name="suspendIdo" form="new_Prod" required>
					     <option value="0">No Suspendido</option>
					      <option value="1">Suspendido</option> 
					    </select>
				</td>
				<td>
					<button type="submit"  form="new_Prod">añadir</button>
				</td>
			</tr>
	</tfoot>
	</table>
</section>
</div>
 @endsection