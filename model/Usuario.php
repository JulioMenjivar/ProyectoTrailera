<?php 
require_once 'Conexion.php';
/**
* JULSSMECK :v
*/
class Usuario extends Conexion
{
	
	//VARIABLES
	private $cod_usuario;
	private $usuario;
	private $contrasenia;
	private $rol;
	private $fecha_registro;
	private $fecha_modifica;
	private $estado;

	public function __construct()
	{
		parent::__construct();
	}

	//METODOS GET Y SET
	public function getCodUsuario(){
		return $this->cod_usuario;
	}
	public function setCodUsuario($cod_usuario){
		$this->cod_usuario = $cod_usuario;
	}
	public function getUsuario(){
		return $this->usuario;
	}
	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}
	public function getContrasenia(){
		return $this->contrasenia;
	}
	public function setContrasenia($contrasenia){
		$this->contrasenia = $contrasenia;
	}
	public function getRol(){
		return $this->rol;
	}
	public function setRol($rol){
		$this->rol = $rol;
	}
	public function getFechaRegistro(){
		return $this->fecha_registro;
	}
	public function setFechaRegistro($fecha_registro){
		$this->fecha_registro = $fecha_registro;
	}
	public function getFechaModifica(){
		return $this->fecha_modifica;
	}
	public function setFechaModifica($fecha_modifica){
		$this->fecha_modifica = $fecha_modifica;
	}
	public function getEstado(){
		return $this->estado;
	}
	public function setEstado($estado){
		$this->estado = $estado;
	}

	//METODOS

	//ENCRIPTACION DE CONTRASEÑA
	public function encriptarPassword($password){
		$passwordEncriptado = sha1($password);
		return $passwordEncriptado;
	}

	//funcion que se verifica los datos del login
	public function login($username, $password){
		$con = $this->conectar(); //coneccion
		$passReal = $this->encriptarPassword($password); //retorna pass encriptado
		$sql = "select u.usuario as usuario, r.rol as rol, r.cod_rol as codigo, u.cod_usuario as id 
				from usuario u INNER JOIN rol r
				on u.rol = r.cod_rol where u.estado = 1 
				
				 and u.usuario = '".$username."' 
				and u.constrasenia = '".$passReal."';";

		$info = $con->query($sql); //crea una query de la consulta y la inserta el la variable

		if($info->num_rows>0){ 

			$data = $info->fetch_assoc(); //fetch_assoc() extrae un array de la informacion :v
			session_start();

			if ($data['codigo'] == "1") {
				$_SESSION['id'] = $data['id'];
				$_SESSION['rol'] = $data['rol'];
				$_SESSION['usuario'] = $data['usuario'];
				header("Location: ../views/DashboardAdmin.php")
				
			}
			else{
				$_SESSION['id'] = $data['id'];
				$_SESSION['rol'] = $data['rol'];
				$_SESSION['usuario'] = $data['usuario'];
				header("Location: ../views/DashboardUser.php");
			}
			
		}
		else{
			echo "No esta entradon al if";
			die();
			header("Location: ../login.php");
		}


	} //fin de la funcion login


	public function getAll(){
			$con = $this->conectar();
			$sql = "select * from motorista where estado = 1";
			$info = $con->query($sql);

			if ($info->num_rows>0) {
				$data = $info;
			}
			else{
				$data = false;
			}
			return $data;
		}//fin del GETALL

	public function getOne($nom){
			$con = $this->conectar();
			$sql = "select * from motorista where nombres = '".$nom."' AND estado = 1";
			$info = $con->query($sql);

			if ($info->num_rows>0) {
				$data = $info;
			}
			else{
				$data = false;
			}
			return $data;
		}//fin del GETALL

	public function getTotal(){
			$con = mysqli_connect("localhost", "root","","trailera");
			$sql = "SELECT * FROM usuario";
			$info = $con->query($sql);

			if ($info) {
				$data = $info->num_rows;
			}
			else{
				$data = false;
			}
			return $data;

		}//fin del getTotal


	//CRUD

	public function Agregar($cod,$user,$pass,$rol,$fre,$fmo,$est){
		//$con = $this->conectar(); //coneccion
		$con = mysqli_connect("localhost", "root","","trailera");
		$passReal = $this->encriptarPassword($pass); //retorna pass encriptado

		$sql = "INSERT INTO usuario (cod_usuario, usuario, constrasenia, rol, fecha_Registro, fecha_Modifica, estado) values ($cod,'$user','$passReal',$rol,$fre,$fmo,$est)";

		$res = $con->query($sql);

		if(!$res){
			echo "Datos no ingresados".$con->error;
		}
		else{
			echo "Datos ingresados";
		}

		//include("cerrar_conexion.php");
		
	}

	public function Modificar(){

	}

	 public function deleteUser($idUsuario)
    {
        $sql="UPDATE `motorista` SET `estado` = '2' WHERE `motorista`.`id` = ".$idUsuario.";";
        $con = $this->conectar();
        $res = $con->query($sql);
        if ($res) {
           $data['estado']=true;
           $data['description']='Se elimino exitosamente';
        }else{
           $data['estado']=false;
           $data['description']='Ocurrio un error en la eliminacion '.$this->db->error;
        }
        return json_encode($data);
    }

	public function Buscar(){
		
	}

	
}

 ?>