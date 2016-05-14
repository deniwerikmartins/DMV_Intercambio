<?php
	$titulo = 'Registre-se no nosso sistema';
	require_once ('header.php');
	
	require_once ('nav.php');

?>

	<main>
	
	
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"></form>
			
			<fieldset>
				<legend>Registre-se no nosso sistema</legend>
				
				<p>
					<label>Nome de usuário:
						<input type="text" name="usuario">
					</label>
				</p>
				
				<p>
					<label>Senha:
						<input type="password">
					</label>
				</p>
				
				<p>
					<label>Digite a senha novamente:
						<input type="password">
					</label>
				</p>
				
			</fieldset>
			
			<input type="submit" value="Enviar" name="submit">
			
	
	</main>
	


<?php 
require_once 'footer.php';
?>