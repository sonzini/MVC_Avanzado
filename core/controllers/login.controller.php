<?php

if (!isset($_SESSION['id'], $_SESSION['username'], $_SESSION['email'])) {
	if ($_POST) {
		include ('core/models/Access.class.php');

		$access = new Access();
		$access->login();

		exit;
	} else {
		$template = new Smarty();
		$template->display('public/login.tpl');
	}

} else {
	header('location: ?view=index');
}

?>