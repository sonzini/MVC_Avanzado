<nav>
	<div class="nav-wrapper blue darken-1">
		<a href="#!" class="brand-logo">Logo</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li><a href="sass.html">Sass</a></li>
			<li><a href="badges.html">Components</a></li>
			<li><a href="collapsible.html">Javascript</a></li>
			<li><a href="mobile.html">Mobile</a></li>

			{if isset($smarty.session.id)}
			<li><a href="" class="dropdown-button" data-beloworigin="true" data-alignment="right" data-constrainwidth="false" data-activates='user'>{$smarty.session.username}</a></li>
			{else}
			<li><a href="?view=logon" class="waves-effect waves-light btn-flat white-text" style="background-color: transparent !important; margin-right: -30px">Registrarme</a></li>
			<li><a href="?view=login" class="waves-effect waves-light btn">Ingresar</a></li>
			{/if}
		</ul>
		<ul class="side-nav" id="mobile-demo">
			<li><a href="sass.html">Sass</a></li>
			<li><a href="badges.html">Components</a></li>
			<li><a href="collapsible.html">Javascript</a></li>
			<li><a href="mobile.html">Mobile</a></li>
		</ul>

		<ul id='user' class='dropdown-content'>
			<li><a href="?view=profile&id={$smarty.session.id}" class="waves-effect waves-light">Perfil</a></li>
			<li><a href="?view=account" class="waves-effect waves-light">Cuenta</a></li>
			<li class="divider"></li>
			<li><a href="?view=logout" class="waves-effect waves-light">Cerrar sesión</a></li>
		</ul>
	</div>
</nav>