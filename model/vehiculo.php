<?php 
/**
* 
*/
class vehiculo
{
	
	function __construct()
	{
		
	}
	private $idVehiculo;
	private $codPlacalVehiculo;
	private $modeloVehiculo;
	private $marcaVehiculo;
	private $anioVehiculo;
	private $alturaVehiculo;
	private $largoVehiculo;
	private $colorVehiculo;
	private $cod_estado;
	private $fechaRegistro;
	private $fechamodificacion;
	private $estadoRegistro;

	//id vehiculo
	public function get_idVehiculo()
	{
		return $this->idVehiculo;
	}
	//cod placa
	public function get_cod_placa()
	{
		return $this->codPlacalVehiculo;
	}
	public function set_codPlaca($codPlacalVehiculo)
	{
		$this->codPlacalVehiculo=$codPlacalVehiculo;
	}
	//modelo 
	public function get_modeloVehiculo()
	{
		return $this->modeloVehiculo;
	}
	public function set_modeloVehiculo($modeloVehiculo)
	{
		$this->modeloVehiculo=$modeloVehiculo;
	}
	//marca
	public function get_marcaVehiculo()
	{
		return $this->get_marcaVehiculo;
	}
	public function set_marcaVehiculo($marcaVehiculo)
	{
		$this->marcaVehiculo=$marcaVehiculo
	}
	//anio
	public function get_anioVehiculo()
	{
		return $this->anioVehiculo;
	}
	public function set_anioVehiculo($anioVehiculo)
	{
		$this->anioVehiculo=$anioVehiculo;
	}
	//altura
	public function get_alturaVehiculo()
	{
		return $this->alturaVehiculo;
	}
	public function set_alturaVehiculo($)
	{
		$this->alturaVehiculo=$alturaVehiculo;
	}
	//largo
	public function get_largoVehiculo()
	{
		return $this->largoVehiculo;
	}
	public function set_largoVehiculo($largoVehiculo)
	{
		$this->largoVehiculo=$largoVehiculo;
	}
	//color
	public function get_colorVehiculo()
	{
		return $this->colorVehiculo;
	}
	public function set_colorVehiculo($colorVehiculo)
	{
		$this->colorVehiculo=$colorVehiculo;
	}
	//cod_estado
	public function get_codEstadoVehiculo()
	{
		return $this->cod_estado;
	}
	public function set_codEstadoVehiculo($cod_estado)
	{
		$this->cod_estado=$cod_estado;
	}
	//fecha registro
	public function get_fechaRegistroVehiculo()
	{
		return $this->fechaRegistro;
	}
	public function set_fechaRegistroVehiculo($fechaRegistro)
	{
		$this->fechaRegistro=$fechaRegistro;
	}
	//fecha modificacion
	public function get_fechaModificacion()
	{
		return $this->fechamodificacion;
	}
	public function set_fechaModificacion($fechamodificacion)
	{
		$this->fechamodificacion=$fechamodificacion;
	}
	public function get_estadoRegistro()
	{
		return $this->estadoRegistro
	}
	public function set_estado_registro($estadoRegistro)
	{
		$this->estadoRegistro=$estadoRegistro;
	}
}
 ?>