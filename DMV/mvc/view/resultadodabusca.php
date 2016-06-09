<?php
	require 'header.php';
	
	require 'nav.php';

?>
	<main>
		<h1>Resultado da sua busca</h1>
			<table border="2">
				<thead>
					<tr><td>Busca</td><td>Valor</td></tr>
				</thead>
				<tbody>
					<?php
						foreach($dado as $dados){
							echo '<tr><td>Cidade</td><td>'. $tdados->getCidade().'</td></tr>';
							echo '<tr><td>Area</td><td>'. $tdados->getArea().'</td></tr>';
							echo '<tr><td>Moeda</td><td>'. $tdados->getMoeda().'</td></tr>';
							echo '<tr><td>Politica</td><td>'. $tdados->getPolitica().'</td></tr>';
							echo '<tr><td>PontosTuristicos</td><td>'. $tdados->getPontosTuristicos().'</td></tr>';
							echo '<tr><td>CustoVida</td><td>'. $tdados->getCustoVida().'</td></tr>';
							echo '<tr><td>FaixaCusto</td><td>'. $tdados->getFaixaCusto().'</td></tr>';
						
						}
					?>
				</tbody>
	        	
	        </table>

	</main>
	


<?php 
	require_once 'footer.php';
?>