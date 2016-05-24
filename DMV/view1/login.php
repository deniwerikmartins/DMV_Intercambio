<?php
	$titulo = 'Login';
	require 'header.php';
	
	require 'nav.php';

?>
	<main>
	
		<form method="post" action="login/autenticar">
			<fieldset>
				<legend>Login</legend>
				<p>
					<label>Usuário:
						<input type="text" name="user">
					</label>
				</p>
				<p>
					<label>Senha:
						<input type="password" name="password">
					</label>
				</p>
				
			
			
			</fieldset>
			<input type="submit" value="Acessar" name="submit">
			
		
		
		</form>
	
	
	</main>

<?php 
	require_once 'footer.php';
?>