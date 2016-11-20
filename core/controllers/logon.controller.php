<?php

if (!isset($_SESSION['id'], $_SESSION['username'], $_SESSION['email'])) {
	if ($_POST) {
		include ('core/models/Access.class.php');

		$access = new Access();
		$access->logon();

		exit;
	} else {
		$template = new Smarty();
		$template->display('public/logon.tpl');
	}

} else {
	header('location: ?view=index');
}

?>