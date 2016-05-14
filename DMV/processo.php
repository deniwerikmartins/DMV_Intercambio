<?php
	$titulo = 'Acompanhe o seu processo';
	require_once ('header.php');
	
	require_once ('nav.php');

?>
	<main>
		<h1>Acompanhe o status dos processos</h1>
		<p>Dados Cadastrais: Ok <img alt="ok" src="imagens/visto.png" class="imgvisto"></p>
		<p>Envio de proposta: Ok <img alt="ok" src="imagens/visto.png" class="imgvisto"></p>
		<p>Passaporte: Ok <img alt="ok" src="imagens/visto.png" class="imgvisto"></p>
		<p>Voo: Ok <img alt="ok" src="imagens/visto.png" class="imgvisto"></p>
		<p>Visto: Em andamento <img alt="ok" src="imagens/engrenagens.png" class="imgprocessamento"></p>
		<p>Pagamento: Não processado <img alt="ok" src="imagens/negado.png" class="imgnegado"></p>
		<p>Escola: Em andamento <img alt="ok" src="imagens/engrenagens.png" class="imgprocessamento"></p>
		<p>Material didático: Em andamento <img alt="ok" src="imagens/engrenagens.png" class="imgprocessamento"></p>
		<p>Acomodações: Ok <img alt="ok" src="imagens/visto.png" class="imgvisto"></p>
		<br>
		<p>Em caso de duvidas sobre algum tramite não concluido, favor entrar em contato</p>
	
	</main>


<?php 
	require_once 'footer.php';
?>