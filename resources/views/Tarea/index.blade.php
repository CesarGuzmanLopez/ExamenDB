<?php
/**
*    @author Cesar Gerardo Guzman Lopez mail 88-8live.com.mx 
        vista principal de la pagina web
*/
?>
@extends('layouts.app')
@section('content')
<div class="row p-4 text-center">
	<div class="col-12 p-2">
	<h1>Base de Datos Neptuno</h1> 
	<h2>UEA: Base de Datos</h2>
	<h2>Alumno: César Gerardo Guzmán López</h2>
	</div>
	<div class="col-6 p-2"><a href="{{route('BD_UAM/Categorias')}}" class="btn btn-info text-white p-4 m-2 w-100 h-100 pb-3"><h1>Categorias</h1></a></div>
	<div class="col-6 p-2"><a href="{{route('BD_UAM/Provedores')}}" class="btn btn-info text-white p-4 m-2 w-100 h-100 pb-3"><h1> Provedores</h1></a></div> 
	<div class="col-6 p-2"><a href="{{route('BD_UAM/Productos')}}" class="btn btn-info text-white p-4 m-2 w-100 h-100 pb-3"> <h1>Productos</h1> </a></div>
	<div class="col-6 p-2"><a href="{{route('BD_UAM/Pedidos')}}" class="btn btn-info text-white p-4 m-2  w-100 h-100 pb-3"><h1> Pedidos</h1></a></div>
	<div class="col-6 p-2"><a href="{{route('BD_UAM/Clientes_Empleados')}}" class="btn btn-info text-white p-4 m-2  w-100 h-100 pb-3"><h1> Administrar Clientes y empleados</h1></a></div>

</div>
 @endsection