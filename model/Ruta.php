<?php 
/**
* JULSSMECK :v
*/
class Ruta
{
	
	//VARIABLES
	private $cod_ruta;
	private $cod_cliente;
	private $cod_motorista;
	private $fecha_Salida;
	private $fecha_Entrega;
	private $hora_salida;
	private $hora_Entrega;
	private $cod_placa;
	private $latitud;
	private $longitud;
	private $estado_ruta;
	private $fecha_Registro;
	private $fehca_Modifica;
	private $estado;

	public function __construct()
	{
		# code...
	}

	//METODOS GET Y SET
	public function getCodRuta(){
		return $this->cod_ruta;
	}
	public function setCodRuta($cod_ruta){
		$this->cod_ruta = $cod_ruta;
	}

	public function getCodCliente(){
		return $this->cod_cliente;
	}
	public function setCodCliente($cod_cliente){
		$this->cod_cliente = $cod_cliente;
	}

	public function getCodMotorista(){
		return $this->cod_motorista;
	}
	public function setCodMotorista($cod_motorista){
		$this->cod_motorista = $cod_motorista;
	}

	public function getFechaSalida(){
		return $this->fecha_Salida;
	}
	public function setFechaSalida($fecha_Salida){
		$this->fecha_Salida = $fecha_Salida;
	}

	public function getFechaEntrega(){
		return $this->fecha_Entrega;
	}
	public function setFechaEntrega($fecha_Entrega){
		$this->fecha_Entrega = $fecha_Entrega;
	}

	public function getLatitud(){
		return $this->latitud;
	}
	public function setLatitud($latitud){
		$this->latitud = $latitud;
	}

	public function getLongitud(){
		return $this->longitud;
	}
	public function setLongitud($longitud){
		$this->longitud = $longitud;
	}

	public function getEstadoRuta(){
		return $this->estado_ruta;
	}
	public function setEstadoRuta($estado_ruta){
		$this->estado_ruta = $estado_ruta;
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


 ?>