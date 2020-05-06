<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema; 
class Tarea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 
    	Schema::create("T_BD__Productos", function(Blueprint $table){
    		$table->unsignedBigInteger("id_user")->nullable();
    		$table->foreign('id_user')->references('id')->on('users')->cascadeOnDelete();
    		
    		$table->id("IdProducto");
    		$table->string("nombreProducto");
    		$table->unsignedBigInteger("IdProveedor");
    		$table->unsignedBigInteger("IdCategoria")->nullable()->default(null);
    		$table->unsignedBigInteger("Idcompaniaenvios")->nullable()->default(null);
    		$table->string("cantIdadPorUnIdad");
    		$table->string("precioUnIdad");
    		$table->integer("unIdadesEnExistencia");
    		$table->integer("unIdadesEnPedIdo");
    		$table->integer("suspendIdo");
    		$table->string("categoriaProducto")->nullable()->default(null);
    		$table->timestamps();
    	});
 
    	Schema::create("T_BD__proveedores", function(Blueprint $table){
    		$table->id("IdProveedor");
    		$table->string("nombrecompania");
    		$table->string("nombrecontacto");
    		$table->string("direccion");
    		$table->string("ciudad");
    		$table->string("region");
    		$table->string("codPostal");
    		$table->string("pais");
    		$table->string("telefono");
    		$table->string("fax");
    		$table->string("paginaprincipal"); 
    		$table->timestamps();
    	});
  
    	Schema::create("T_BD__detallesdePedidos", function(Blueprint $table){
    		$table->id("IdPedido");
    		$table->unsignedBigInteger("IdProducto");
    		$table->float("preciounIdad");
    		$table->integer("cantIdad");
    		$table->timestamps(); 
    	});
 
    	Schema::create("T_BD__companiasdeenvios", function(Blueprint $table){
    		$table->id("Idcompaniaenvios");
    		$table->string("nombrecompania");
    		$table->string("telefono"); 
    		$table->timestamps();
    	});
 
    	Schema::create("T_BD__clientes", function(Blueprint $table){
    		$table->id("IdCliente");
    		$table->string("nombrecompania");
    		$table->string("NombreContacto");
    		$table->string("CargoContacto");
    		$table->string("Direccion");
    		$table->string("Ciudad");
    		$table->string("Region");
    		$table->string("CodPostal");
    		$table->string("Pais");
    		$table->string("Telefono");
    		$table->string("Fax");
    		$table->timestamps();
    	});
  
		    	Schema::create("T_BD__Empleados", function(Blueprint $table){
		    		$table->id("IdEmpleado");
		    		$table->string("ApellIdos");
		    		$table->string("Nombre");
		    		$table->string("cargo");
		    		$table->string("Tratamiento");
		    		$table->date("FechaNacimiento");
		    		$table->date("FechaContratacion"); 
		    		$table->string("direccion"); 
		    		$table->string("ciudad");
		    		$table->string("codPostal");
		    		$table->string("Jefe");
		    		$table->string("TelDomicilio");
		    		$table->string("Notas");
		    		$table->unsignedBigInteger("Extension");
		    		$table->float("sueldoBasico");
		    		$table->timestamps();
		    	});
    		
    	
    	
  
    	Schema::create("T_BD__Pedidos", function(Blueprint $table){
    		$table->id("IdPedido");
    		$table->unsignedBigInteger("IdCliente");
    		$table->unsignedBigInteger("IdEmpleado");
    		$table->date("FechaPedIdo");
    		$table->date("FechaEntrega");
    		$table->date("FechaEnvio");
    		$table	->integer("FormaEnvio");
    		$table->string("Nombre");
    		$table->string("cargo");
    		$table->string("Destinatario"); 
    		$table->string("DireccionDestinatario");
    		$table->string("CiudadDestinatario");
    		$table->string("RegionDestinatario");
    		$table->string("CodPostalDestinatario");
    		$table->string("PaisDestinatario");
    		$table->timestamps();
    	});
 
    		
    		Schema::create("T_BD__categorias", function(Blueprint $table){
    			$table->id("Idcategoria"); 
    			$table->string("nombrecategoria");
    			$table->string("descripcion"); 
    			$table->timestamps();
    		}); 
    		Schema::table("T_BD__detallesdePedidos", function(Blueprint $table){
    			$table->foreign('IdPedido')->references('IdPedido')->on('T_BD__Pedidos')->cascadeOnDelete();
    			$table->foreign('IdProducto')->references('IdProducto')->on('T_BD__Productos')->cascadeOnDelete();
    			
    		});	 
    		Schema::table("T_BD__Productos", function(Blueprint $table){
    			$table->foreign('Idcategoria')->references('Idcategoria')->on('T_BD__categorias')->cascadeOnDelete();
    			$table->foreign('IdProveedor')->references('IdProveedor')->on('T_BD__proveedores')->cascadeOnDelete();
    			$table->foreign('Idcompaniaenvios')->references('Idcompaniaenvios')->on('T_BD__companiasdeenvios')->cascadeOnDelete();
   			});   
   			Schema::table("T_BD__Pedidos", function(Blueprint $table){
   				$table->foreign('Idcliente')->references('Idcliente')->on('T_BD__clientes')->cascadeOnDelete();
   				$table->foreign('Idempleado')->references('Idempleado')->on('T_BD__empleados')->cascadeOnDelete();     				
    		});
    	
    } 
    public function down()
    {
    	Schema::enableForeignKeyConstraints(); 
    	Schema::table("T_BD__detallesdePedidos", function(Blueprint $table){ 
    		$table->dropForeign('t_bd__detallesdepedidos_idproducto_foreign'); 
    	});
    	Schema::table("T_BD__Productos", function(Blueprint $table){
    		$table->dropForeign("t_bd__productos_idcategoria_foreign");
    		$table->dropForeign("t_bd__productos_idproveedor_foreign");
    		$table->dropForeign("t_bd__productos_idcompaniaenvios_foreign");
   		});
 		Schema::table("T_BD__Pedidos", function(Blueprint $table){
 			$table->dropForeign("t_bd__pedidos_idcliente_foreign");
 			$table->dropForeign("t_bd__pedidos_idempleado_foreign");
 		});
		Schema::dropIfExists("T_BD__detallesdePedidos");
		Schema::dropIfExists("T_BD__Pedidos");
		Schema::dropIfExists("T_BD__Empleados");
		Schema::dropIfExists("T_BD__clientes");
		Schema::dropIfExists("T_BD__categorias");
		Schema::dropIfExists("T_BD__companiasdeenvios");
		Schema::dropIfExists("T_BD__proveedores");
		Schema::dropIfExists("T_BD__Productos");
		
		Schema::disableForeignKeyConstraints();
		
    }
}
