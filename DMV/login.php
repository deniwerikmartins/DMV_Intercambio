<?php
	$titulo = 'Login';
	require_once ('header.php');
	
	require_once ('nav.php');

?>
	<main>
	
		<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>">
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