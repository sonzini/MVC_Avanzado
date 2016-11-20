<?php /* Smarty version 3.1.27, created on 2016-11-19 20:31:59
         compiled from "C:\wamp64\www\MVC_Avanzado\styles\templates\overall\nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20645830b6bfeace81_30891010%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1db4ca099031683b12b8876848082d9e78e625b0' => 
    array (
      0 => 'C:\\wamp64\\www\\MVC_Avanzado\\styles\\templates\\overall\\nav.tpl',
      1 => 1479587516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20645830b6bfeace81_30891010',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5830b6bff2c383_72470439',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5830b6bff2c383_72470439')) {
function content_5830b6bff2c383_72470439 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20645830b6bfeace81_30891010';
?>
<nav>
	<div class="nav-wrapper blue darken-1">
		<a href="#!" class="brand-logo">Logo</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li><a href="sass.html">Sass</a></li>
			<li><a href="badges.html">Components</a></li>
			<li><a href="collapsible.html">Javascript</a></li>
			<li><a href="mobile.html">Mobile</a></li>

			<?php if (isset($_SESSION['id'])) {?>
			<li><a href="" class="dropdown-button" data-beloworigin="true" data-alignment="right" data-constrainwidth="false" data-activates='user'><?php echo $_SESSION['username'];?>
</a></li>
			<?php } else { ?>
			<li><a href="?view=logon" class="waves-effect waves-light btn-flat white-text" style="background-color: transparent !important; margin-right: -30px">Registrarme</a></li>
			<li><a href="?view=login" class="waves-effect waves-light btn">Ingresar</a></li>
			<?php }?>
		</ul>
		<ul class="side-nav" id="mobile-demo">
			<li><a href="sass.html">Sass</a></li>
			<li><a href="badges.html">Components</a></li>
			<li><a href="collapsible.html">Javascript</a></li>
			<li><a href="mobile.html">Mobile</a></li>
		</ul>

		<ul id='user' class='dropdown-content'>
			<li><a href="?view=profile&id=<?php echo $_SESSION['id'];?>
" class="waves-effect waves-light">Perfil</a></li>
			<li><a href="?view=account" class="waves-effect waves-light">Cuenta</a></li>
			<li class="divider"></li>
			<li><a href="?view=logout" class="waves-effect waves-light">Cerrar sesión</a></li>
		</ul>
	</div>
</nav><?php }
}
?>