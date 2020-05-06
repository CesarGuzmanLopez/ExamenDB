<?php
/**
*    @author Cesar Gerardo Guzman Lopez mail 88-8live.com.mx 
        vista principal de la pagina web
*/
?>
@extends('layouts.app')
@section('content')
<div></div>
<section>
  <h1 class="text-info">Clientes</h1>
 <div> 
 <table class="" id="">
 	<thead>
 		<tr>
 			<th>IdCliente</th>
 			<th>Nombre Compañia</th>
 			<th>Nombre Contacto</th>
 			<th>Cargo Contacto</th>
 			<th>Dirección </th>
 			<th>Ciudad</th>
 			<th>Codigo postal</th>
 			<th>Pais</th>
 			<th>Telefono</th>
 			<th>Fax</th>
 			<th colspan="2">Controles</th> 
 		</tr>
 	</thead>
 	<tbody>
 	@foreach($Clientes as $Cliente)
 		<tr>
 			<td>{{$Cliente->IdCliente}} </td>
 			<td> {{$Cliente->nombrecompania}}</td>
 			<td> {{$Cliente->NombreContacto}}</td>
 			<td> {{$Cliente->CargoContacto}}</td>
 			<td> {{$Cliente->Direccion}}</td>
 			<td> {{$Cliente->Ciudad}}</td>
 			<td> {{$Cliente->Region}}</td>
 			<td> {{$Cliente->CodPostal}}</td>
 			<td> {{$Cliente->Pais}}</td>
 			<td> {{$Cliente->Telefono}}</td>
 			<td> {{$Cliente->Fax}}</td> 
 		</tr>
 		@endforeach
 	</tbody>
 	<tfoot>
 		<tr>
 			<td> </td>
 		</tr>
 	</tfoot>
 </table>
 
 </div>
 </section> 
<section>
	 <h1 class="text-info">Empleados</h1> 
		<div>
 <table class="table" >
 	<thead>
 		<tr>
 			<th>IdEmpleado</th>
 			<th>Apelldo</th>
 			<th>Nombre</th>
 			<th>Cargo</th>
 			<th>Tratamiento</th>
 			<th>Fecha de nacimento</th>
 			<th>Fecha de contratacion </th>
 			<th>Direccion</th>
 			<th>Ciudad</th>
 			<th>Codigo postal</th>
 			<th>Jefe</th>
 			<th>Telefono de Doicilio</th>
 			<th>Notas</th>
 			<th>Extencion</th>
 			<th>Sueldo Basico</th>
 			<th>Controles</th>
 		</tr>
 	</thead>
 	<tbody>
 		<tr>
 
 			<td></td>
 		</tr>
 	</tbody>
 	<tfoot>
 		<tr>
 			<td>
 			</td>
 		</tr>
 	</tfoot>
 </table>
		</div>
</section> 
@endsection

blade