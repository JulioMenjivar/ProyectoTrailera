<?php 
/**
* JULSSMECK :v
*/
class Cliente
{
	//VARIABLES PRIVADAS
	private $cod_cliente;
	private $nombre;
	private $telefono;
	private $direccion;
	private $fecha_registro;
	private $fecha_modifica;
	private $estado;

	//METODO CONSTRUCTOR VACIO
	public function __construct()
	{
		
	}

	//METODOS GET Y SET
	public function getCodCliente(){
		return $this->cod_cliente;
	}
	public function setCodCliente($cod_cliente){
		$this->cod_cliente = $cod_cliente;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function getTelefono(){
		return $this->telefono;
	}
	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}
	public function getDireccion(){
		return $this->direccion;
	}
	public function setDireccion($direccion){
		$this->direccion = $direccion;
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


	//CRUD

	public function Agregar(){

	}

	public function Eliminar(){

	}

	public function Modificar(){

	}

	public function Buscar(){
		
	}


}


 ?>