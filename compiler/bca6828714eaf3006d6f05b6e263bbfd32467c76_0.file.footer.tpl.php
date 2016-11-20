<?php /* Smarty version 3.1.27, created on 2016-11-19 20:24:34
         compiled from "C:\wamp64\www\MVC_Avanzado\styles\templates\overall\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:325255830b502761cc2_23680813%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bca6828714eaf3006d6f05b6e263bbfd32467c76' => 
    array (
      0 => 'C:\\wamp64\\www\\MVC_Avanzado\\styles\\templates\\overall\\footer.tpl',
      1 => 1476946444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325255830b502761cc2_23680813',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5830b50276b000_57204575',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5830b50276b000_57204575')) {
function content_5830b50276b000_57204575 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '325255830b502761cc2_23680813';
?>
<?php echo '<script'; ?>
 type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$(document).ready(function(){
	$(".button-collapse").sideNav();
});


<?php echo '</script'; ?>
>
<?php }
}
?>