<?php

/**
* Conexion a la base de datos
*/
class Connection extends mysqli {
	
	public function __construct() {
		
		parent::__construct('localhost','root','','mvcavanzado');
		$this->query("set names utf8");
		$this->connect_errno ? die('Error: No se ha podido conectarse a la base de datos.') : $x = 'Conectado';
		//echo $x;
		unset($x);
	}

	//Retorna la cantidad de filas obtenidas de una consulta (creo)
	public function rows($x) {
		return mysqli_num_rows($x);
	}

	//Libera la consulta (creo)
	public function free($x) {
		return mysqli_free_result($x);
	}

	//Recorre la consulta
	public function fetch($x) {
		return mysqli_fetch_array($x);
	}
}

?>