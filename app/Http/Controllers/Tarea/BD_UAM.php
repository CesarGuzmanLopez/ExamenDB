<?php
namespace app\Http\Controllers\Tarea;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\TBdCategoria;
use App\Models\TBdProveedore;
use App\Models\TBdProducto;
use App\Models\TBdCompaniasdeenvio;
use App\Models\TBdPedido;
use App\Models\TBdCliente;
use App\Models\TBdEmpleado;
 
/**
 * Controlador para todo lo que tenga que ver con la sesion
 * y el perfil del usuario
 * @author Cesar Gerardo Guzman Lopez
 *        
 */
class BD_UAM extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return BD_UAM
     */
    
    public function __construct(){}
    
    /**
     * pagina principal 
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory 
     */
    public function index()
    {
    	return view("Tarea.index");
    }
    public function Clientes(Request $request){
    	
    	
    	return view("Tarea.Clientes");
    }
    public function Envios(Request $request, int $id=null){
    	if($request->has("nombrecompania")){
    		$CateN= new TBdCompaniasdeenvio($request->all());
    		$CateN->save();
    		return back();
    	}
    	return view("Tarea.Envios");
    }
    public function Pedidos(Request $request,$id=null){
    	if($request->has("_method")){
    		switch($request->_method){
    			case "patch":
    				$Pro= TBdPedido::find($id);
    				$Pro->update($request->all());
    				$Pro->save();
    				break;
    			case "delete":
    				$Pro= TBdPedido::find($id);
    				$Pro->delete();
    				Break;
    		}
    		return back();
    	}
    	if($request->has("Nombre")){
    		$CateN= new TBdPedido($request->all());
    		$CateN->save();
    		return back();
    	}
    	$data = array(
    			"Pedidos" => TBdPedido::get(), 
    			"Clientes"=> TBdCliente::get(),
    			"Empleado" =>TBdEmpleado::get(),
    			"Productos" => TBdProducto::get(), 
    			"Categorias" => TBdCategoria::get(),
    			"Provedores" => 	TBdProveedore::get(),
    			"Envios" => 	TBdCompaniasdeenvio::get(),	
    	);    	
    	return view("Tarea.Pedidos")->with($data);
    }
    
    public function Productos(Request $request,$id=null){
    	if($request->has("_method")){
    		switch($request->_method){
    			case "patch":
    				$Pro= TBdProducto::find($id);
    				$Pro->update($request->all());
    				$Pro->save();
    				break;
    			case "delete":
    				$Pro= TBdProducto::find($id);
    				$Pro->delete();
    				Break;
    		}
    		return back();
    	}
    	if($request->has("nombreProducto")){
    		$CateN= new TBdProducto($request->all());
    		$CateN->save();
    		return back();
    	}
    	$data = array(
    			"Productos" => TBdProducto::get(),
    			"Categorias" => TBdCategoria::get(),
    			"Provedores" => 	TBdProveedore::get(),
    			"Envios" => 	TBdCompaniasdeenvio::get(),
    			
    			
    	);  	
    	return view("Tarea.Productos")->with($data);
    }   
    public function Categorias(Request $request,$id=null){ 
    	if($request->has("_method")){
    		switch($request->_method){
    			case "patch":
	    			$CateN= TBdCategoria::find($id);
	    			$CateN->descripcion =$request->descripcion;
	    			$CateN->nombrecategoria =$request->nombrecategoria;
	    			$CateN->save();
	    			break;
    			case "delete":
	    		$CateN= TBdCategoria::find($id);
		    	$CateN->delete();
	    		Break;
    		}
    		return back();
    	} 
    	if($request->has("nombrecategoria")){
    		$CateN= new TBdCategoria($request->all());
			$CateN->save();
			return back();
			
    	}
    	$categorias=TBdCategoria::get();
    	$data = array(
    	"categorias" =>$categorias,	
    	);
		return view("Tarea.Categorias")->with($data);
    } 
    
    public function Provedores(Request $request,$id=null){
    	if($request->has("_method")){
    		switch($request->_method){
    			case "patch":
    				$Pro= TBdProveedore::find($id);
    				$Pro->update($request->all());
    				$Pro->save();
    				break;
    			case "delete":
    				$Pro= TBdProveedore::find($id);
    				$Pro->delete();
    				Break;
    		} 
    		
    		return back();
    	}
    	if($request->has("nombrecompania")){
    		$CateN= new TBdProveedore($request->all());
    		$CateN->save();
    		return back();
    	}
    	$data = array(
    			"Provedores" => 	TBdProveedore::get(),
    	);
    	return view("Tarea.Provedores")->with($data);
    }
    /**
     * 
     * @param Request $Request
     * @param int $id
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public  function Clientes_Empleados(Request $Request, int $id= null){
    	$data = array(
     			"Clientes"	  => TBdCliente::get(),
    			"Empleado" =>TBdEmpleado::get()); 
    	if($Request->has("Crud") && $Request->Crud =="Cliente"  )
    		goto Cliente;
    	else
    		return view("Tarea.Clientes_Empleados")->with($data);
    		
    	Empleados: 
 
    	
    	
    	
    		return back();
    	Cliente:
 
 
    }
    
    
}