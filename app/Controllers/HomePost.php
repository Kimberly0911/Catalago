<?php namespace App\Controllers;
	
	use App\Models\MueblesModel;

class HomePost extends BaseController
{
	public function agregarMuebles() {

		$data = array("nombre" => $_POST['nombre'],
					  "tipoMadera" => $_POST['tipoMadera'],
					  "costoVenta" => $_POST['costoVenta'],
					  "costoCompra" => $_POST['costoCompra'],
					  "fecha" => $_POST['fecha'],
					);
		$model =  new MueblesModel();
		echo $exito = $model->agregarMueble($data);
	}

	public function obtenerTodosLosMuebles(){
		$model =  new MueblesModel();
		$datos = $model->obtenerTodosLosMueblesModel();

		echo json_encode($datos);
	}

	public function eliminaMueble(){
		$model =  new MueblesModel();
		$datos = array("id_mueble" => $_POST['idMueble']);
		echo $model->eliminaMueble($datos);

	}

	public function obtenerDatosUpdate() {
		$model =  new MueblesModel();
		$data = array('id_mueble' => $_POST['idMueble']);
		echo $model->obtenerDatosUpdate($data);
	}

	public function actualizarMueble() {
		$model =  new MueblesModel();
	$data = array("nombre" => $_POST['nombre'],
					 "tipoMadera" => $_POST['tipoMadera'],
					  "costoVenta" => $_POST['costoVenta'],
					  "costoCompra" => $_POST['costoCompra'],
					  "fecha" => $_POST['fecha'],
					);
		echo $model->actualizarMueble($data);
	}	
	//--------------------------------------------------------------------

}
