<?php

/**
* Acceso - Login
*/
class Access
{
	private $name;
	private $username;
	private $email;
	private $password;

	public function login(){
		try {
			if (!empty($_POST['username']) and !empty($_POST['password'])) {
				$u = $_POST['username'];
				$p = $_POST['password'];

				$db = new Connection();

				$this->username = $db->real_escape_string($u);
				$this->password = sha1(md5($p));

				$query = "select * from users where username = '$this->username' and password = '$this->password'";
				$result = $db->query($query);

				if ($db->rows($result) > 0) {
					//Guardo el resultado en un array
					$data = $db->fetch($result);

					//Guardo los datos de sesión en el servidor
					$_SESSION['id'] = $data['id'];
					$_SESSION['username'] = $data['username'];
					$_SESSION['email'] = $data['email'];

					//En caso de marcar la casilla, se guardaran los datos por un dia
					if (isset($_POST['remember']) and $_POST['remember'] == 1) {
						ini_set('session.cookie_lifetime', time() + (60*60*24));
					}
					
					//Retorna '1' al AJAX
					die('1');

				} else {
					//La consulta a la base de datos dió 0.
					throw new Exception('Usuario o contraseña incorrecto.');
				}

				$db->free($result);
				$db->close();

			} else {
				//Se genera un error porque POST esta vacío.
				throw new Exception('Los campos deben completarse.');
			}
		} catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function logon(){
		try {
			if (!empty($_POST['name']) and !empty($_POST['username']) and 
				!empty($_POST['email']) and !empty($_POST['password'])) {

				$n = $_POST['name'];
				$u = $_POST['username'];
				$e = $_POST['email'];
				$p = $_POST['password'];

				$db = new Connection();

				$this->name = $db->real_escape_string($n);
				$this->username = $db->real_escape_string($u);
				$this->email = $db->real_escape_string($e);
				$this->password = sha1(md5($p));

				$query = "select * from users where username = '$this->username' or email = '$this->email'";
				$result = $db->query($query);

				//Si no existe algun otro user con ese username o email
				if ($db->rows($result) == 0) {
					
					$query = "insert into users (name, username, email, password, type)
							values ('$this->name', '$this->username', '$this->email', '$this->password', 0)";
					$db->query($query);



					//Guardo los datos de sesión en el servidor
					$_SESSION['id'] = $db->insert_id;
					$_SESSION['username'] = $u;
					$_SESSION['email'] = $e;

					//Retorna '1' al AJAX
					die('1');

				} else {

					$data = $db->fetch($result);

					//Error: User exitente.
					if ($data['username'] == $this->username) throw new Exception('El usuario ya se encuentra en uso.');
					//Error: Email existente.
					else if ($data['email'] == $this->email) throw new Exception('El email ya se encuentra en uso.');
					//Error: Salta si por algun motivo los anteriores no lo hicieron.
					else throw new Exception('Existe un usuario con estos datos.');

				}

				$db->free($result);
				$db->close();

			} else {
				//Se genera un error porque POST esta vacío.
				throw new Exception('Los campos deben completarse.');
			}
		} catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function recover(){

	}
}

?>