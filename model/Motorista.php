<?php 
require_once 'Conexion.php';
/**
* JULSSMECK :v
*/
class Motorista extends Conexion
{

	//Variables
	private $cod_motorista;
	private $nombres;
	private $apellidos;
	private $licencia;
	private $dui;
	private $edad;
	private $telefono;
	private $cod_usuario;
	private $cod_estado;
	private $fecha_registro;
	private $fecha_modifica;
	private $estado;

	function __construct()
	{
		parent::__construct();
	}

	//METODOS GET Y SET
	public function getCodMotorista(){
		return $this->cod_motorista;
	}
	public function setCodMotorista($cod_motorista){
		$this->cod_motorista = $cod_motorista;
	}
	public function getNombres(){
		return $this->nombres;
	}
	public function setNombres($nombres){
		$this->nombres = $nombres;
	}
	public function getApellidos(){
		return $this->apellidos;
	}
	public function setApellidos($apellidos){
		$this->apellidos = $apellidos;
	}
	public function getLicencia(){
		return $this->licencia;
	}
	public function setLicencia($licencia){
		$this->licencia = $licencia;
	}
	public function getDui(){
		return $this->dui;
	}
	public function setDui($dui){
		$this->dui = $dui;
	}
	public function getEdad(){
		return $this->edad;
	}
	public function setEdad($edad){
		$this->edad = $edad;
	}
	public function getTelefono(){
		return $this->telefono;
	}
	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}
	public function getCodUsuario(){
		return $this->cod_usuario;
	}
	public function setCodUsuario($cod_usuario){
		$this->cod_usuario = $cod_usuario;
	}
	public function getCodEstado(){
		return $this->cod_estado;
	}
	public function setCodEstado($cod_estado){
		$this->cod_estado = $cod_estado;
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

	public function notifica($id){
		
			$sql = "SELECT n.id, n.cod_notifi, n.usu_autor, n.mensaje, n.fecha_registro, n.tipo FROM notificaciones n where usu_autor = ".$id;
			$arreglo = array();
			$con = $this->conectar();
			$info = $con->query($sql);

				$data = $info->fetch_assoc();
				$arreglo['id'] = $data['id'];
				$arreglo['cod_notifi'] = $data['cod_notifi'];
				$arreglo['usu_autor'] = $data['usu_autor'];
				$arreglo['mensaje'] = $data['mensaje'];
				$arreglo['fecha_registro'] = $data['fecha_registro'];
				$arreglo['tipo'] = $data['tipo'];
				$arreglo['estado'] = true;	
 		
 		return $arreglo;
	}

		public function notificaElim($id){
		
			$sql = "UPDATE notificaciones n SET n.estado = 2 WHERE n.id=".$id;
			$arreglo = array();
			$con = $this->conectar();
			$info = $con->query($sql);
			$res;

			if ($info) {
				$res = "Funciono prro";
			}
			return $res;
	}

	public function getTotalRegistros(){
			$con = $this->conectar();
			$sql = "SELECT * FROM motorista";
			$info = $con->query($sql);

			if ($info) {
				$data = $info->num_rows;
			}
			else{
				$data = false;
			}
			return $data;
		}//fin del getTotalRegistros

	//METODOS
	public function Agregar($cod,$nom,$ape,$lic,$dui,$eda,$tel,$cus,$ces,$fre,$fmo,$est){
		//$con = $this->conectar(); //coneccion
		$con = $this->conectar();
		$sql = "INSERT INTO motorista (cod_motorista,nombres,apellidos,licencia,dui,edad,telefono,cod_usuario,cod_estado,fecha_Registro,fecha_Modifica,estado) values ($cod,'$nom','$ape',$lic,$dui,$eda,$tel,$cus,$ces,$fre,$fmo,$est);";

		$res = $con->query($sql);

		if(!$res){
			echo "Datos no ingresados";
		}
		else{
			echo "Datos ingresados";
		}


include("cerrar_conexion.php");

	}

	public function AgregarNoti(){
		$con = $this->conectar();
		$sql = "";
		$res = $con->query($sql);

		if(!$res){
			echo "Datos no ingresados";
		}
		else{
			echo "Datos ingresados";
		}

	}

	public function Eliminar(){

	}

	public function Modificar(){

	}

	public function getMotorista($idMoto)
    {

       $sql="SELECT m.id, m.nombres, m.apellidos, m.licencia, m.dui, m.telefono, m.edad, r.cod_rol as idRol, u.cod_usuario as codUsu FROM motorista m INNER JOIN rol r INNER JOIN usuario u ON u.cod_usuario = m.cod_usuario AND u.rol = r.cod_rol WHERE m.id=".$idMoto;
       $arreglo = array();
       $con = $this->conectar();
       $info =$con->query($sql);
       $data = $info->fetch_assoc();
       $arreglo['idMotorista']=$data['id'];
       $arreglo['idRol']=$data['idRol'];
       $arreglo['nombres']=$data['nombres'];
       $arreglo['apellidos']=$data['apellidos'];
       $arreglo['licencia']=$data['licencia'];
       $arreglo['dui']=$data['dui'];
       $arreglo['edad']=$data['edad'];
       $arreglo['telefono']=$data['telefono'];
       $arreglo['estado']=true;

       return json_encode($arreglo);
    }


       public function updateUser($idUsuario)
    {
        $sql= "UPDATE motorista SET nombres='".$this->nombres."', apellidos='".$this->apellidos."', licencia=".$this->licencia.",dui=".$this->dui.", edad=".$this->edad.", telefono=".$this->telefono.", fecha_modifica='".$this->fecha_modifica."' WHERE id=".$idUsuario;
        $con= $this->conectar();
        $res = $con->query($sql);
        if ($res) {
           $data['estado']=true;
           $data['description']='Datos modificados exitosamente';
        }else{
           $data['estado']=false;
           $data['description']='Ocurrio un error en la modificacion '.$con->error;
        }
        return json_encode($data);
    }

}



 ?>