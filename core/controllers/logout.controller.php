<?php

unset($_SESSION['id'], $_SESSION['username'], $_SESSION['email']);

session_destroy();

header('location: ?view=index');

?>