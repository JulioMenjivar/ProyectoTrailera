<?php 

	require_once '../model/Motorista.php';
	require_once '../model/Usuario.php';

	if (isset($_POST['login'])) { //verifica que venga el evento login del formulario
		login(); //llama el metodo login
	}

	if (isset($_POST['AgregarMotorista'])) {
		Agregar();
		header("Location: ../views/RegistroMotorista.php");
	}

	if (isset($_POST['key'])) {
	$key = $_POST['key'];
	switch ($key) {
		case 'agregar':
			agregar();
			break;
		case 'findUser':
			findUser();
			break;
		case 'getUser':
			getUser();
			break;
		case 'editar':
			editar();
			break;
		case 'elimiaruser':
			eliminar();
			break;
		case 'notifica':
			notifica();
		break;
		case 'notificaElim':
			notificaElim();
		break;
		default:
			
			break;
	}//fin de swith

}//fin del isset

	function notifica(){
		$id = $_POST['idUsu'];
		$objMoto = new Motorista();
		$data = $objMoto->notifica($id);
		$jsonE = json_encode($data);
		print_r($jsonE);
	}

	function notificaElim(){
		$id = $_POST['idUsu'];
		$objMoto = new Motorista();
		$data = $objMoto->notificaElim($id);
		echo $data;
	}

	function login(){ //el metodo login toma los datos del formulario

		$username = $_POST['usuario'];
		$password = $_POST['password'];

		$objUsuario = new Usuario(); //instancia la clase usuario
		$objUsuario->login($username, $password); //invoca la funcion login de usuario

	}

	 function Agregar(){

	$objMoto = new Motorista();
	$objUsuario = new Usuario();
	$fecha = date("Y")."-".date("m")."-".date("d");

	//DATOS MOTORISTA
	$cod = $objMoto->getTotalRegistros()+11;
	$nom = $_POST['nombre'];
	$ape = $_POST['apellido'];
	$lic = $_POST['licencia'];
	$dui = $_POST['dui'];
	$edad = $_POST['edad'];
	$tel = $_POST['telefono'];

	//DATOS USUARIO
	$cod_usu = $objUsuario->getTotal()+11;
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$pass2 = $_POST['pass2'];

	$objUsuario->Agregar($cod_usu,$user,$pass,2,$fecha,$fecha,1);
	$objMoto->Agregar($cod,$nom,$ape,$lic,$dui,$edad,$tel,$cod_usu,1,$fecha,$fecha,1);
	$objMoto->AgregarNoti();

}//fin agregar

function eliminar()
{
	$info=$_POST['idUsuario'];
	$decodeInfo = json_decode($info);
	$objUsuario = new Usuario();	
	$res=$objUsuario->deleteUser($info);
	echo $res;
}//fin eliminar

function getUser()
{
	$idUsuario = $_POST['idUsuario'];
	$objUsuario = new Motorista();
	$data= $objUsuario->getMotorista($idUsuario);
	echo $data;
}//fin get user

function editar()
{
	$fecha = date("Y")."-".date("m")."-".date("d");
	$data = $_POST['dataUsuarioEdit'];
	$decodeInfo = json_decode($data);
	$objUsuario = new Motorista();
	$objUsuario->setNombres($decodeInfo[1]->value);
	$objUsuario->setApellidos($decodeInfo[2]->value);
	$objUsuario->setLicencia($decodeInfo[3]->value);
	$objUsuario->setDui($decodeInfo[4]->value);
	$objUsuario->setEdad($decodeInfo[5]->value);
	$objUsuario->setTelefono($decodeInfo[6]->value);
	$objUsuario->setFechaModifica($fecha);
	$data=$objUsuario->updateUser($decodeInfo[0]->value);
	echo $data;
}

 ?>