{extends file="main.tpl"}

{block name=content}
<form action="{$conf->action_url}login" method="post"  class="pure-menu pure-menu-horizontal bottom-margin">
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

{include file='messages.tpl'}

{/block}
