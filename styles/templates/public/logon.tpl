{include 'overall/header.tpl'}

</head>

<body>

	<div class="container" style="margin-top: 100px;">
		<div class="animated fadeIn container row" style="margin:5% auto;">
			<div class="center">
				<h3 id="title" class="grey-text text-darken-4">Registro</h3>
				<p id="description" class="blue-text">Ingresa tus datos para registrarte</p>
			</div>
			<div class="card-panel z-depth-3 col s12 m10 l8 offset-m1 offset-l2" style="padding-top: 50px">

				<!-- Mensaje de error -->
				<div class="card-panel red white-text" id="formLogonError" style="padding: 10px" hidden>
					<h6 id="message">Hubo un error y no se pudo registrar</h6>
					<i class="material-icons right" id="closeMessage" style="margin-top: -25px">close</i>
				</div>

				<!-- Formulario de inicio de sesion -->
				<form action="" method="post" class="row" id="formLogon" style="padding:0 5%">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="name" name="name" type="text" class="validate" required>
						<label for="name" data-error="Ingrese su nombre y apellido">Nombre y apellido</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="username" name="username" type="text" class="validate" required>
						<label for="username" data-error="Ingrese su nombre de usuario">Nombre de usuario</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">email</i>
						<input id="email" name="email" type="email" class="validate" required>
						<label for="email" data-error="Ingresa un Email válido">Email</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">lock</i>
						<input id="password" name="password" type="password" class="validate" required>
						<label for="password" data-error="Ingrese su contraseña">Contraseña</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">lock</i>
						<input id="password2" name="password2" type="password" class="validate" required>
						<label for="password2" data-error="Ingrese nuevamente su contraseña">Repita su ontraseña</label>
					</div>
					<div class="right" style="margin-top: 20px">
						<a id="logon" class="btn waves-effect waves-light blue" type="submit" name="action">Registrar</a>
					</div>
				</form>

				<!-- Loading ajax -->
				<div id="loading" class="center-align" hidden style="padding:1%">
					<h4>Registrando</h4>
					<div class="preloader-wrapper active" style="margin-bottom:40px">
						<div class="spinner-layer spinner-red-only">
							<div class="circle-clipper left">
								<div class="circle"></div>
							</div>
							<div class="gap-patch">
								<div class="circle"></div>
							</div>
							<div class="circle-clipper right">
								<div class="circle"></div>
							</div>
						</div>
					</div>
				</div>

				<div id="formFooter">
					<div class="divider" style="margin-top: 30px;"></div>
					<div class="center" style="padding: 10px 0 10px 0; margin: 0 -25px">
						<a style="cursor:pointer" class="waves-teal blue-text" target="_blank" href="http://www.jorgemariel.com">Creado por Jorge Mariel</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	{include 'overall/footer.tpl'}

	<script type="text/javascript">
		$(document).ready(function () {
		});

		$('#logon').click(function(e){
			e.preventDefault();
			var name = $('#name');
			var username = $('#username');
			var email = $('#email');
			var password = $('#password');
			var password2 = $('#password2');

			if(name.val() == "") {
				name.addClass('invalid');
				name.focus();
				return false;
			}
			else if(username.val() == "") {
				username.addClass('invalid');
				username.focus();
				return false;
			}
			else if(email.val() == "") {
				email.addClass('invalid');
				email.focus();
				return false;
			}
			else if(password.val() == "") {
				password.addClass('invalid');
				password.focus();
				return false;
			}
			else if(password2.val() == "") {
				password2.addClass('invalid');
				password2.focus();
				return false;
			}
			else if(password.val() != password2.val()) {
				$('#message').html('Las contraseñas no coinciden');
				$('#formLogonError').fadeIn();
				password.addClass('invalid');
				password.focus();
				return false;
			}

			$('#title').hide();
			$('#description').hide();
			$('#formLogonError').hide();
			$('#formLogon').hide();
			$('#formFooter').hide();
			$('#loading').fadeIn('slow', 'swing');

			$.ajax({
				type: 'POST',
				url: '?view=logon',
				data: $('#formLogon').serialize(),
				timeout: 5000,
				success: function(msg){
					if ( msg == 1 ){
						setTimeout(function(){
							window.location.href = "?view=index";
						},(500));
					} else {
						$('#loading').hide();
						$('#title').fadeIn();
						$('#description').fadeIn();
						$('#message').html(msg);
						$('#formLogonError').fadeIn();
						$('#formLogon').fadeIn();
						$('#formFooter').fadeIn();
					}
				},
				fail: function(msg){
					$('#loading').hide();
					$('#title').fadeIn();
					$('#description').fadeIn();
					$('#message').html(msg);
					$('#formLogonError').fadeIn();
					$('#formLogon').fadeIn();
					$('#formFooter').fadeIn();
				}
			})
		});

		$('#closeMessage').click(function(e){
			$('#formLogonError').fadeOut();
		});
	</script>
</body>
</html>