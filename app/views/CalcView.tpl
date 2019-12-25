{extends file="main.tpl"}

{block name=content}

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
							<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
							<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
						</div>			

				<!-- Banner -->
					<section id="intro" class="main">
					
						<span class="icon fa-diamond major"></span>
						<h2>Wprowadz wartości</h2>
						<p>
						<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
								<fieldset>
									<label for="x">Kwota</label>
									<input id="x" type="text" placeholder="wartość kwoty" name="x" value="{$form->x}">
											
									<label for="op">Oprocentowanie</label>
									<input id="op" type="text" placeholder="wartość oprocentowania" name="op" value="{$form->op}">
												
									<label for="y">Lata</label>
									<input id="y" type="text" placeholder="liczba lat" name="y" value="{$form->y}">
								</fieldset></br>
								<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
						</form>

								{include file='messages.tpl'}
									{if isset($res->result)}
									<div class="messages info">
										Wynik: {$res->result}
									</div>
									{/if}
									
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			
{/block}