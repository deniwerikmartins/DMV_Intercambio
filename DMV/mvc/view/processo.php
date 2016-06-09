<?php
	$titulo = 'Acompanhe o seu processo';
	require 'header.php';
	
	require 'nav.php';

?>
	<main>
		<h1>Acompanhe o status dos processos</h1>
			<table border="2">
				<thead>
					<tr><td>Tramite</td><td>Status</td></tr>
				</thead>
				<tbody>
					<?php
						foreach($dado as $tramite){
							echo '<tr><td>Processo</td><td>'. $tramite->getProcesso() .'</td></tr>';
							echo '<tr><td>Usuario</td><td>'. $tramite->getUsuario() .'</td></tr>';
							echo '<tr><td>Dados Cadastrais</td><td>'. $tramite->getDadosCadastrais() .'</td></tr>';
							echo '<tr><td>Envio Proposta</td><td>'. $tramite->getEnvioProposta() .'</td></tr>';
							echo '<tr><td>Passaporte</td><td>'. $tramite->getPassaporte() .'</td></tr>';
							echo '<tr><td>Voo</td><td>'. $tramite->getVoo() .'</td></tr>';
							echo '<tr><td>Visto</td><td>'. $tramite->getVisto() .'</td></tr>';
							echo '<tr><td>Pagamento</td><td>'. $tramite->getPagamento() .'</td></tr>';
							echo '<tr><td>Escola</td><td>'. $tramite->getEscola() .'</td></tr>';
							echo '<tr><td>Material didatico</td><td>'. $tramite->getMaterialDidatico() .'</td></tr>';
							echo '<tr><td>Acomodações</td><td>'. $tramite->getAcomodacoes() .'</td></tr>';
						}
					?>
				</tbody>
	        	
	        </table>

	</main>
	


<?php 
	require_once 'footer.php';
?>