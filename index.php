<?php

require ('core/libs/smarty/Smarty.class.php');
require ('core/models/Connection.class.php');

session_start();

//Se define la vista por medio de GET.
$view = isset($_GET['view']) ? $_GET['view'] : 'index';

if (file_exists('core/controllers/'.$view.'.controller.php')) {
	//Página de destino.
	include ('core/controllers/'.$view.'.controller.php');
} else {
	//Página de error/default.
	include ('core/controllers/index.controller.php');
}

?>