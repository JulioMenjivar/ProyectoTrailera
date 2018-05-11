<?php 
/**
* 
*/
class estado_vehiculo 
{
	
	public function __construct()
	{
		
	}
	private $cod_estado;
	private $estado;

	public function get_cod_estado()
	{
		return $this->cod_estado;
	}
	public function set_cod_estado($cod_estado)
	{
		$this->cod_estado=$cod_estado;
	}
	public function get_estado()
	{
		return $this->estado;
	}
	public function set_estado($estado)
	{
		$this->estado=$estado;
	}
	
}


 ?>