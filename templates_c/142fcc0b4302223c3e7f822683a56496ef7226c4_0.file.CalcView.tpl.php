<?php
/* Smarty version 3.1.30, created on 2019-04-06 12:53:42
  from "C:\xampp\htdocs\mysite\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ca885363fc748_45010554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '142fcc0b4302223c3e7f822683a56496ef7226c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mysite\\app\\views\\CalcView.tpl',
      1 => 1554547366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5ca885363fc748_45010554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10968721995ca885363f88c9_85481717', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_10968721995ca885363f88c9_85481717 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


		<!-- Header -->
			<header id="header" class="alt">
				<div class="inner">
					<h1>Kalkulator kredytowy</h1>
					<p>Aplikacja obliczająca miesięczną ratę kredytu</p>
				</div>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">	
						<div class="pure-menu pure-menu-horizontal bottom-margin">
							<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
							<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
						</div>			

				<!-- Banner -->
					<section id="intro" class="main">
					
						<span class="icon fa-diamond major"></span>
						<h2>Wprowadz wartości</h2>
						<p>
						<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
								<fieldset>
									<label for="x">Kwota</label>
									<input id="x" type="text" placeholder="wartość kwoty" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
">
											
									<label for="op">Oprocentowanie</label>
									<input id="op" type="text" placeholder="wartość oprocentowania" name="op" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->op;?>
">
												
									<label for="y">Lata</label>
									<input id="y" type="text" placeholder="liczba lat" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
">
								</fieldset></br>
								<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
						</form>

								<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

									<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
									<div class="messages info">
										Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

									</div>
									<?php }?>
									
					</p>
					</section>

				<!-- Items -->
					<section class="main items">
						<article class="item">
							<header>
								<a href="#"><img src="images/pic01.jpg" alt="" /></a>								
							</header>
						</article>
						<article class="item">
							<header>
								<a href="#"><img src="images/pic02.jpg" alt="" /></a>
							</header>
						</article>
						
					</section>

				<!-- CTA -->
					<section id="cta" class="main special">
						<h2>Resetuj</h2>
						<p>Po kliknięciu przeniesie cię do pustego formularza.</p>
						<ul class="actions">
							<li><a href="index.php" class="button big">Reset</a></li>
						</ul>
					</section>

				<!-- Main -->
				<!--
					<section id="main" class="main">
						<header>
							<h2>Lorem ipsum dolor</h2>
						</header>
						<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare. Etiam eget neque id metus gravida tristique ac quis erat. Aenean quis aliquet sem. Ut ut elementum sem. Suspendisse eleifend ut est non dapibus. Nulla porta, neque quis pretium sagittis, tortor lacus elementum metus, in imperdiet ante lorem vitae ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eget neque id metus gravida tristique ac quis erat. Aenean quis aliquet sem. Ut ut elementum sem. Suspendisse eleifend ut est non dapibus. Nulla porta, neque quis pretium sagittis, tortor lacus elementum metus, in imperdiet ante lorem vitae ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					</section>
				-->

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Untitled. All rights reserved.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/skel.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
			
<?php
}
}
/* {/block 'content'} */
}
