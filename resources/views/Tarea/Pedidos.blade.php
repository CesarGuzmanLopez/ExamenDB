<?php
/**
*    @author Cesar Gerardo Guzman Lopez mail 88-8live.com.mx 
        vista principal de la pagina web
*/
?>
@extends('layouts.app')
@section('content')
<section class="section table-responsive">
	<table class="table">
	<thead>
	<tr>
		<th>ID pedido</th>
		<th>Cliente</th>
		<th>Empleados</th>
		<th>Fecha Pedido</th>
		<th>Fecha Entrega </th>
		<th>Fecha Envio </th>
		<th>Forma envio </th>
		<th>Cargo</th>
		<th>Nombre</th>
		<th>Destinatario </th>
		<th>Direccion Destinatario </th>
		<th>Ciudad Destinatario</th>
		<th>Region Destinatario </th>
 		<th>Codigo postal Destinatario</th> 
 		<th>Pais destinatario</th> 
		<th class="bg-info text-light">Acciones</th>
	</tr>
	</thead> 
	<tbody> 
	 	@foreach($Pedidos as $Pedido)
	 		<tr>
	 			<td>$Pedido->IdPedido</td> 
	 			<td>$Pedido->t_bd_empleado</td>
	 			<td>$Pedido->IdEmpleado</td>  
	 			<td>$Pedido->FechaPedIdo</td>
	 			<td>$Pedido->FechaEntrega</td>
	 			<td>$Pedido->FechaEnvio</td>
	 			<td>$Pedido->FormaEnvio</td>
	 			<td>$Pedido->cargo</td>
	 			<td>$Pedido->Nombre</td>
	 			<td>$Pedido->Destinatario</td>
	 			<td>$Pedido->DireccionDestinatario</td>
	 			<td>$Pedido->CiudadDestinatario</td>
	 			<td>$Pedido->CodPostalDestinatario</td>
	 			<td>$Pedido->PaisDestinatario</td>
 	 		</tr>
	 	@endforeach
	</tbody>
	<tfoot>
	 	<td>
	 	<form action="{{route('BD_UAM/Pedidospost')}}" id="newPed" method="post"></form>
	 	<input type="hidden" name="_token" value="{{csrf_token()}}" form="new_Cat"> 
	 	*
	 	</td> 
	 	<td>
	 	
 	 	</td>
	 	<td>
                                          
 	 	</td>
	 	<td>
 			<input type="date" name="FechaPedIdo" value="" form="new_Cat" class="form-control" required="required"> 			
	 	</td>
	 		<td>
 			<input type="date" name="FechaEntrega" value="" form="new_Cat" class="form-control" required="required"> 			
	 	</td>
	 		<td>
 			<input type="date" name="FechaEnvio" value="" form="new_Cat" class="form-control" required="required"> 			
	 	</td>
	 		<td>
 			<input type="number" name="FormaEnvio" value="" form="new_Cat" class="form-control" required="required"> 			
	 	</td>
 
	 		<td>
 			<input type="text" name="cargo" value="" form="new_Cat" class="form-control" required="required"> 			
	 	</td>
	 	 		<td>
 			<input type="text" name="Nombre" value="" form="new_Cat" class="form-control" required="required"> 			
	 	</td>
	 		<td>
 			<input type="text" name="Destinatario" value="" form="new_Cat" class="form-control" required="required"> 			
	 	</td>
	 		<td>
 			<input type="text" name="DireccionDestinatario" value="" form="new_Cat" class="form-control" required="required"> 			
	 	</td>
	 		<td>
 			<input type="text" name="CiudadDestinatario" value="" form="new_Cat" class="form-control" required="required"> 			
	 	</td>
	 		<td>
 			<input type="text" name="RegionDestinatario" value="" form="new_Cat" class="form-control" required="required"> 			
	 	</td>
	 		<td>
 			<input type="text" name="CodPostalDestinatario" value="" form="new_Cat" class="form-control" required="required"> 			
	 	</td>
	 		<td>
 			<input type="text" name="PaisDestinatario" value="" form="new_Cat" class="form-control" required="required"> 			
	 	</td>	
	 	</tr>
	</tfoot>
	</table> 
	</section>
 @endsection