{include 'overall/header.tpl'}

</head>

<body>

	<div class="container" style="margin-top: 100px;">
		<div class="animated fadeIn container row" style="margin:5% auto;">
			<div class="center">
				<h3 id="title" class="grey-text text-darken-4">Iniciar sesión</h3>
				<p id="description" class="blue-text">Ingresa tus datos para iniciar sesión</p>
			</div>
			<div class="card-panel z-depth-3 col s12 m10 l8 offset-m1 offset-l2" style="padding-top: 50px">

				<!-- Mensaje de error -->
				<div class="card-panel red white-text" id="formLoginError" style="padding: 10px" hidden>
					<h6 id="message">Hubo un error y no se pudo iniciar sesión</h6>
					<i class="material-icons right" id="closeMessage" style="margin-top: -25px">close</i>
				</div>

				<!-- Formulario de inicio de sesion -->
				<form action="" method="post" class="row" id="formLogin" style="padding:0 5%">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="username" name="username" type="text" class="validate">
						<label for="username" data-error="Ingrese su nombre de usuario">Nombre de usuario</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">lock</i>
						<input id="password" name="password" type="password" class="validate">
						<label for="password" data-error="Ingrese su contraseña">Contraseña</label>
					</div>
					<div class="input-field col s12">
						<input type="checkbox" id="remember" name="remember" value="1" />
						<label for="remember">Recordarme</label>
					</div>
					<div class="right" style="margin-top: 20px">
						<a id="login" class="btn waves-effect waves-light blue" type="submit" name="action">Ingresar</a>
					</div>
				</form>

				<!-- Loading ajax -->
				<div id="loading" class="center-align" hidden style="padding:1%">
					<h4>Iniciando sesión</h4>
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

		$('#login').click(function(e){
			e.preventDefault();
			var username = $('#username');
			var password = $('#password');
			var remember = $('#remember');

			if(username.val() == "") {
				username.addClass('invalid');
				username.focus();
				return false;
			}
			else if(password.val() == "") {
				password.addClass('invalid');
				password.focus();
				return false;
			}

			$('#title').hide();
			$('#description').hide();
			$('#formLoginError').hide();
			$('#formLogin').hide();
			$('#formFooter').hide();
			$('#loading').fadeIn('slow', 'swing');

			$.ajax({
				type: 'POST',
				url: '?view=login',
				data: $('#formLogin').serialize(),
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
						$('#formLoginError').fadeIn();
						$('#formLogin').fadeIn();
						$('#formFooter').fadeIn();
					}
				},
				fail: function(msg){
					$('#loading').hide();
					$('#title').fadeIn();
					$('#description').fadeIn();
					$('#message').html(msg);
					$('#formLoginError').fadeIn();
					$('#formLogin').fadeIn();
					$('#formFooter').fadeIn();
				}
			})
		});

		$('#closeMessage').click(function(e){
			$('#formLoginError').fadeOut();
		});
	</script>
</body>
</html>