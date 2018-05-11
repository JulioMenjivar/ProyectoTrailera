<?php 
/**
* 
*/
class carga
{
	
	function __construct()
	{
		
	}
	private $idCarga;
	private $codCarga;
	private $nombreCarga;
	private $descripcionCarga;
	private $tamanioCarga;
	private $pesoCarga;
	private $materialCarga;
	private $fechaRegistroCarga;
	private $fechamodificacionCarga;
	private $estadoRegistroCarga;

	//id carga
	public function get_idCarga()
	{
		return $this->idCarga;
	}
	
	//cod carga
	public function get_CodCarga()
	{
		return $this->codCarga;
	}
	public function set_codCarga($codCarga)
	{
		$this->codCarga=$codCarga;
	}
	//nombre
	public function get_nombreCarga()
	{
		return $this->nombreCarga;
	}
	public function set_nombreCarga($nombreCarga)
	{
		$this->nombreCarga=$nombreCarga;
	}
	//descripcion
	public function get_descripcionCraga()
	{
		return $this->descripcion;
	}
	public function set_descripcionCraga($descripcion)
	{
		$this->descripcion=$descripcion;
	}
	//tamanio
	public function get_tamanioCarga()
	{
		return $this->tamanioCarga;
	}
	public function set_tamanioCarga($tamanioCarga)
	{
		$this->tamanioCarga=$tamanioCarga;
	}
	//peso
	public function get_pesoCarga()
	{
		return $this->pesoCarga;
	}
	public function set_pesoCarga($pesoCarga)
	{
		$this->pesoCarga=$pesoCarga;
	}
	//material
	public function get_materialCarga()
	{
		return $this->materialCarga;
	}
	public function set_materialCarga($materialCarga)
	{
		$this->materialCarga=$materialCarga;
	}
	//fecha de registro
	public function get_fechaRegistroCarga()
	{
		return $this->fechaRegistroCarga;
	}
	public function set_fechaRegistroCarga($fechaRegistroCarga)
	{
		$this->fechaRegistroCarga=$fechaRegistroCarga;
	}
	//fecha de modificacion
	public function get_fechaModificacion()
	{
		return $this->fechamodificacionCarga;
	}
	public function set_fechaModificacion($fechamodificacionCarga)
	{
		$this->fechamodificacionCarga=$fechamodificacionCarga;
	}
	//estado
	public function get_EstadoRegistro()
	{
		return $this->estadoRegistroCarga;
	}
	public function set_EstadoRegistro($estadoRegistroCarga)
	{
		$this->estadoRegistroCarga=$estadoRegistroCarga;
	}
}
 ?>