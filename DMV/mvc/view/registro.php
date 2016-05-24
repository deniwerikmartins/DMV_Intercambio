<?php
	$titulo = 'Registre-se no nosso sistema';
	require 'header.php';
	
	require 'nav.php';

?>

	<main>
	
	 
		<form method="POST" action="insert">
			
			<fieldset>
				<legend>Registre-se no nosso sistema</legend>
				
				<p>
					<label>Nome de usuário:
						<input type="text" name="usuario">
					</label>
				</p>
				
				<p>
					<label>Senha:
						<input type="password" name="password">
					</label>
				</p>
				
				<p>
					<label>Digite a senha novamente:
						<input type="password" name="password2">
					</label>
				</p>
				
			</fieldset>
			
			<input type="submit" value="Enviar" name="submit">
		</form>	
	
	</main>
	


<?php 
require 'footer.php';
?>