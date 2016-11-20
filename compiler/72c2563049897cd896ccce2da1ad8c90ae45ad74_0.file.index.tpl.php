<?php /* Smarty version 3.1.27, created on 2016-11-20 02:14:10
         compiled from "C:\wamp64\www\MVC_Avanzado\styles\templates\home\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12594583106f20b0091_96595132%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72c2563049897cd896ccce2da1ad8c90ae45ad74' => 
    array (
      0 => 'C:\\wamp64\\www\\MVC_Avanzado\\styles\\templates\\home\\index.tpl',
      1 => 1479608046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12594583106f20b0091_96595132',
  'variables' => 
  array (
    'title' => 0,
    'posts' => 0,
    'p' => 0,
    'page' => 0,
    'amountOfPages' => 0,
    'x' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583106f2495cb5_06818882',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583106f2495cb5_06818882')) {
function content_583106f2495cb5_06818882 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12594583106f20b0091_96595132';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


</head>

<body>

	<?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

      
	<div class="container" style="margin-top: 100px;">
		<div class="row center">
			<div class="col m2 offset-m1">
				<a href='?type=new' class="waves-effect waves-light btn">Recientes</a>
			</div>
			<div class="col m2">
				<a href='?type=tops' class="waves-effect waves-light btn">Mejores</a>
			</div>
			<div class="col m2">
				<a href='?type=cat1' class="waves-effect waves-light btn">Categoria 1</a>
			</div>
			<div class="col m2">
				<a href='?type=cat2' class="waves-effect waves-light btn">Categoria 2</a>
			</div>
			<div class="col m2">
				<a href='?type=cat3' class="waves-effect waves-light btn">Categoria 3</a>
			</div>
		</div>

		<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

		<table class="striped">
			<thead>
				<tr class="row">
					<th class="col m6" data-field="id" style="margin: 10px 0">Título</th>
					<th class="col m4" data-field="name" style="margin: 10px 0">Creador</th>
					<th class="col m1 center" data-field="price" style="margin: 10px 0">Puntos</th>
					<th class="col m1 center" data-field="price" style="margin: 10px 0">Comentarios</th>
				</tr>
			</thead>
			<tbody>

				<?php if (isset($_smarty_tpl->tpl_vars['posts']->value)) {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
				<tr class="row">
					<td class="col m6" style="margin: 10px 0"><a href="?view=post&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['title'];?>
</a></td>
					<td class="col m4" style="margin: 10px 0"><a href="?view=profile&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['id_user'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['user'];?>
</a></td>
					<td class="col m1 center" style="margin: 10px 0"><?php echo $_smarty_tpl->tpl_vars['p']->value['points'];?>
</td>
					<td class="col m1 center" style="margin: 10px 0">{}</td>
				</tr>
				<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
				<?php } else { ?>
				<tr>
					<td>No se han encontrado resultados.</td>
				</tr>
				<?php }?>
			</tbody>
		</table>

		<?php if (isset($_smarty_tpl->tpl_vars['posts']->value)) {?>
		<ul class="pagination center">
			<?php if (($_smarty_tpl->tpl_vars['page']->value == 1)) {?>
			<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
			<?php } else { ?>
			<li><a href="?type=<?php echo $_GET['type'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><i class="material-icons">chevron_left</i></a></li>
			<?php }?>

			<?php $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['amountOfPages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['amountOfPages']->value)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 1, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?>
			<?php if ($_smarty_tpl->tpl_vars['x']->value == $_smarty_tpl->tpl_vars['page']->value) {?>
			<li class="waves-effect active"><a href="?type=<?php echo $_GET['type'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</a></li>
			<?php } else { ?>
			<li class="waves-effect"><a href="?type=<?php echo $_GET['type'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</a></li>
			<?php }?>
			<?php }} ?>

			<?php if (($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['amountOfPages']->value)) {?>
			<li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
			<?php } else { ?>
			<li class="waves-effect"><a href="?type=<?php echo $_GET['type'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><i class="material-icons">chevron_right</i></a></li>
			<?php }?>
		</ul>
		<?php }?>
	</div>

	<?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    
  </body>
</html><?php }
}
?>