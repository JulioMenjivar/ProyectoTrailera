<?php 
	class Conexion
	{
		//VARIABLES DE CONEXION
		private $host;
		private $user;
		private $password;
		private $database;

		public function __construct()
		{
			$data = require_once '../app/config.php';
			$this->host = $data['HOST'];
			$this->user = $data['USER'];
			$this->password = $data['PASS'];
			$this->database = $data['BD'];
		}//fin construct

		public function conectar(){
			
			$con = new mysqli($this->host,$this->user,$this->password,$this->database);
			
			if($con->connect_errno){	
				echo "Tienes un error de conexion";
				die();
			}
			return $con;
		}//fin funcion conectar

	}//fin clase
 ?>