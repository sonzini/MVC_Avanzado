<?php

$template = new Smarty();
$type = isset($_GET['type']) ? $_GET['type'] : 'default';
$page = (isset($_GET['page']) and is_numeric($_GET['page']) and $_GET['page'] >= 1) ? $_GET['page'] : 1; 
$db = new Connection();

$amountPerPage = 3; //Cantidad de post por página.
$startShowing = ($page - 1) * $amountPerPage; //Calcula a partir de cual post limitar la consulta.

switch ($type) {
	case 'tops':
		//Paginado
		$query = "select count(*) from posts";
		$result = $db->query($query);
		$count = $db->fetch($result);
		$count = $count[0];
		$amountOfPages = ceil($count / $amountPerPage); //Calcula cuantas páginas hay según la cantidad de posts.

		$template->assign('title', 'Los mejores');
		$query = "	select
						p.id,
						p.title,
						u.username 'user',
						p.points,
						p.id_user
					from posts p join users u on u.id = p.id_user
					order by p.points desc
					limit $startShowing, $amountPerPage";	
		break;
	
	case 'cat1':
		//Paginado
		$query = "select count(*) from posts where category = 1";
		$result = $db->query($query);
		$count = $db->fetch($result);
		$count = $count[0];
		$amountOfPages = ceil($count / $amountPerPage); //Calcula cuantas páginas hay según la cantidad de posts.

		$template->assign('title', 'Categoría 1');
		$query = "	select
						p.id,
						p.title,
						u.username 'user',
						p.points,
						p.id_user
					from posts p join users u on u.id = p.id_user
					where p.category = 1
					order by id desc
					limit $startShowing, $amountPerPage";	
		break;

	case 'cat2':
		//Paginado
		$query = "select count(*) from posts where category = 2";
		$result = $db->query($query);
		$count = $db->fetch($result);
		$count = $count[0];
		$amountOfPages = ceil($count / $amountPerPage); //Calcula cuantas páginas hay según la cantidad de posts.

		$template->assign('title', 'Categoría 2');
		$query = "	select
						p.id,
						p.title,
						u.username 'user',
						p.points,
						p.id_user
					from posts p join users u on u.id = p.id_user
					where p.category = 2
					order by id desc
					limit $startShowing, $amountPerPage";	
		break;

	case 'cat3':
		//Paginado
		$query = "select count(*) from posts where category = 3";
		$result = $db->query($query);
		$count = $db->fetch($result);
		$count = $count[0];
		$amountOfPages = ceil($count / $amountPerPage); //Calcula cuantas páginas hay según la cantidad de posts.
		
		$template->assign('title', 'Categoría 3');
		$query = "	select
						p.id,
						p.title,
						u.username 'user',
						p.points,
						p.id_user
					from posts p join users u on u.id = p.id_user
					where p.category = 3
					order by id desc
					limit $startShowing, $amountPerPage";	
		break;

	default:
		//Paginado
		$query = "select count(*) from posts";
		$result = $db->query($query);
		$count = $db->fetch($result);
		$count = $count[0];
		$amountOfPages = ceil($count / $amountPerPage); //Calcula cuantas páginas hay según la cantidad de posts.

		$template->assign('title', 'Inicio');
		$query = "	select
						p.id,
						p.title,
						u.username 'user',
						p.points,
						p.id_user
					from posts p join users u on u.id = p.id_user
					order by id desc
					limit $startShowing, $amountPerPage";	
		break;
}
$result = $db->query($query);

if ($db->rows($result)){
	while ($x = $db->fetch($result)) {
		$posts[] = array(
			'id' 		=> $x['id'],
			'title' 	=> $x['title'],
			'user' 		=> $x['user'],
			'points' 	=> $x['points'],
			'id_user'	=> $x['id_user']
		);
	}
	$template->assign('posts', $posts);
}

$template->assign(array(
		'page' 			=> $page,
		'amountOfPages' => $amountOfPages
	));
$db->free($result);
$db->close();
$template->display('home/index.tpl');

?>