<?php
	$titulo = 'Busca por interesse/destino';
	require_once ('header.php');
	
	require_once ('nav.php');

?>

	<main>
	
		<form>
		<fieldset>
			<legend>Busca</legend>
			
			<p>
				<label>Selecione país e cidade:
					<select name="pais" size="10">
						<option value="null"></option>
							<optgroup label="ALEMANHA">
								<option>Berlim</option>
								<option>Frankfurt</option>
								<option>Hamburgo</option>
								<option>Munique</option>
							</optgroup>
							<optgroup label="ESPANHA">
								<option>Barcelona</option>
								<option>Madrid</option>
							</optgroup>
							<optgroup label="ESTADOS UNIDOS">
								<option>Los Angeles</option>
								<option>Miami</option>
								<option>New York</option>
								<option>Orlando</option>
								<option>São Francisco</option>
								<option>Washington, D.C</option>
							</optgroup>
							<optgroup label="FRANÇA">
								<option>Bordeaux</option>
								<option>Nice</option>
								<option>Paris</option>
							<optgroup label="CHINA">
								<option>Pequim</option>
							</optgroup>
							<optgroup label="ITALIA">
								<option>Florença</option>
								<option>Milão</option>
								<option>Roma</option>
							<optgroup>
					</select>
				</label>
			</p>
			
			<p>
				<label>Faixa de preço:
					<input list="precos" name="precos" size="30">
					<datalist id="precos">
						<option value="">
						<option value="até R$ 5.000,00">
						<option value="entre R$ 5.000,00 e R$ 10.0000,00">
						<option value="acima R$ 10.000,00">
					</datalist>
				</label>
			</p>
			
			<p>
				<label>Interesse:
					<input type="text" name="interesse">
				</label>
			
			</p>
			
			
		</fieldset>
		<input type="submit" name="submit" value="Buscar">
		</form>
	
	
	</main>


<?php 
	require_once 'footer.php';
?>