<?php 
	$titulo = 'Area de Administrador';
	require 'header.php';
	
	require 'nav.php';
?>
			
			<main>
			    <h1>Atualização de tramite</h1>
				<form method="POST" action="atualizar">
				    <fieldset>
				            <legend>Situação de tramites do processo do cliente</legend>
        				    
        				    <p>
        				        <label>Codigo do tramite:
        				            <input type="number" name="tramite">
        				        </label>
        				    </p>
        				    
        				    <p>
        				        <label>Codigo do usuario:
        				            <input type="number" name="usuario">
        				        </label>
        				    </p>
        				    
        				    <p>
        				        <label>Dados Cadastrais:
        				            <input type="radio" name="dadoscadastrais" value="Ok">
        				            <span>Ok</span>
        				            <input type="radio" name="dadoscadastrais" value="Em processamento">
        				            <span>Em processamento</span>
        				            <input type="radio" name="dadoscadastrais" value="Indeferido">
        				            <span>Indeferido</span>
        				        </label>
        				    </p>
        				    
        				    <p>
        				        <label>Envio Proposta:
        				            <input type="radio" name="envioproposta" value="Ok">
        				            <span>Ok</span>
        				            <input type="radio" name="envioproposta" value="Em processamento">
        				            <span>Em processamento</span>
        				            <input type="radio" name="envioproposta" value="Indeferido">
        				            <span>Indeferido</span>
        				        </label>
        				    </p>
        				    
        				    <p>
        				        <label>Passaporte:
        				            <input type="radio" name="passaporte" value="Ok">
        				            <span>Ok</span>
        				            <input type="radio" name="passaporte" value="Em processamento">
        				            <span>Em processamento</span>
        				            <input type="radio" name="passaporte" value="Indeferido">
        				            <span>Indeferido</span>
        				        </label>
        				    </p>
        				    
        				    <p>
        				        <label>Voo:
        				            <input type="radio" name="voo" value="Ok">
        				            <span>Ok</span>
        				            <input type="radio" name="voo" value="Em processamento">
        				            <span>Em processamento</span>
        				            <input type="radio" name="voo" value="Indeferido">
        				            <span>Indeferido</span>
        				        </label>
        				    </p>
        				    
        				    <p>
        				        <label>Visto:
        				            <input type="radio" name="visto" value="Ok">
        				            <span>Ok</span>
        				            <input type="radio" name="visto" value="Em processamento">
        				            <span>Em processamento</span>
        				            <input type="radio" name="visto" value="Indeferido">
        				            <span>Indeferido</span>
        				        </label>
        				    </p>
        				    
        				    <p>
        				        <label>Pagamento:
        				            <input type="radio" name="pagamento" value="Ok">
        				            <span>Ok</span>
        				            <input type="radio" name="pagamento" value="Em processamento">
        				            <span>Em processamento</span>
        				            <input type="radio" name="pagamento" value="Indeferido">
        				            <span>Indeferido</span>
        				        </label>
        				    </p>
        				    
        				    <p>
        				        <label>Escola:
        				            <input type="radio" name="escola" value="Ok">
        				            <span>Ok</span>
        				            <input type="radio" name="escola" value="Em processamento">
        				            <span>Em processamento</span>
        				            <input type="radio" name="escola" value="Indeferido">
        				            <span>Indeferido</span>
        				        </label>
        				    </p>
        				    
        				    <p>
        				        <label>Material didatico:
        				            <input type="radio" name="materialdidatico" value="Ok">
        				            <span>Ok</span>
        				            <input type="radio" name="materialdidatico" value="Em processamento">
        				            <span>Em processamento</span>
        				            <input type="radio" name="materialdidatico" value="Indeferido">
        				            <span>Indeferido</span>
        				        </label>
        				    </p>
        				    
        				    <p>
        				        <label>Acomodações:
        				            <input type="radio" name="acomodacoes" value="Ok">
        				            <span>Ok</span>
        				            <input type="radio" name="acomodacoes" value="Em processamento">
        				            <span>Em processamento</span>
        				            <input type="radio" name="acomodacoes" value="Indeferido">
        				            <span>Indeferido</span>
        				        </label>
        				    </p>
				    </fieldset>
				    <input type="submit" name="submit" value="Enviar">
				</form>
				    
			
			</main>
			
<?php 
    require_once 'footer.php';
?>