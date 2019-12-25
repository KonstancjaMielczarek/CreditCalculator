<?php
/* Smarty version 3.1.30, created on 2019-04-06 12:57:48
  from "C:\xampp\htdocs\mysite\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ca8862cadaa47_89892115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79b2722eef1fff0b08e64c446fbdb1ea1bc3e1db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mysite\\app\\views\\LoginView.tpl',
      1 => 1554548265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5ca8862cadaa47_89892115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7610765445ca8862cad6bc7_04693364', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_7610765445ca8862cad6bc7_04693364 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  class="pure-menu pure-menu-horizontal bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="main">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
		</div></br>
        <div class="main">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="main">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
