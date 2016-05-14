<?php
$titulo = 'Atualizar dados cadastrais';
require_once ('header.php');

require_once ('nav.php');

?>

<main>
<h1>Atualize seus dados cadastrais</h1>
<form method="POST"
	action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	<fieldset>
		<legend>Dados do Participante</legend>

		<p>
			<label>Nome Completo (como no passaporte): <input type="text"
				size="35" name="nome">
			</label>
		</p>

		<p>
			<label>Endereço: <input type="text" size="50" name="endereco">
			</label>
		</p>

		<p>
			<label>Complemento: <input type="text" size="30" name="complemento">
			</label>
		</p>

		<p>
			<label>Bairro: <input type="text" size="30" name="bairro">
			</label>
		</p>

		<p>
			<label>Cidade: <input type="text" size="25" name="cidade">
			</label>
		</p>

		<p>
			<label>Estado: <input type="text" size="25" name="estado">
			</label>
		</p>

		<p>
			<label>CEP: <input type="text" size="25" name="cep">
			</label>
		</p>

		<p>
			<label>Telefones: <span>Residencial:</span> <input type="tel"
				name="residencial"> <span> Celular:</span> <input type="tel"
				name="celular"> <span> Comercial:</span> <input type="tel"
				name="comercial">
			</label>
		</p>

		<p>
			<label>Data de Nascimento: <input type="date" size="25"
				name="nascimento">
			</label>
		</p>

		<p>
			<label>Nacionalidade: <input type="text" size="25"
				name="nacionalidade">
			</label>
		</p>

		<p>
			<label>RG: <input type="text" size="25" name="rg">
			</label>
		</p>

		<p>
			<label>CPF: <input type="text" size="25" name="cpf">
			</label>
		</p>

		<p>
			<label>Passaporte: <input type="text" size="25" name="passaporte">
			</label>
		</p>

		<p>
			<label>Valido até: <input type="text" size="25" name="validade">
			</label>
		</p>

		<p>
			<label>Profissão: <input type="text" size="25" name="profissao">
			</label>
		</p>

		<p>
			<label>E-mail: <input type="email" size="25" name="email">
			</label>
		</p>

		<p>
			<label>Nome completo da mãe: <input type="text" size="25"
				name="nomedamae">
			</label>
		</p>

		<p>
			<label>Telefones: <span>Cel:</span> <input type="tel" size="25"
				name="celmae"> <span>Comercial:</span><input type="text"
				name="commae">
			</label>
		</p>

		<p>
			<label>E-mail:<input type="email" name="emailmae"></label>
		</p>

		<p>
			<label>Nome completo do pai: <input type="text" size="25"
				name="nomemae">
			</label>
		</p>

		<p>
			<label>Telefones: <span>Cel:</span> <input type="text" size="25"
				name="celpai"> <span>Comercial:</span><input type="text"
				name="compai">
			</label>
		</p>

		<p>
			<label>E-mail:<input type="email" name="emailpai"></label>
		</p>

		<p>
			<label>Contato em caso de emergência:<input type="text"
				name="emergencia" size="50"></label>
		</p>

		<p>
			<label>Telefones: <span>Cel:</span> <input type="tel" size="25"
				name="celemergencia"> <span>Comercial:</span><input type="tel"
				name="comemergencia">
			</label>
		</p>

		<p>
			<label>E-mail:<input type="email" name="emailemergencia"></label>
		</p>

		<p>
			<label>Nivel de conhecimento: <input type="radio" name="conhecimento"
				value="iniciante"> <span> Iniciante </span> <input type="radio"
				name="conhecimento" value="basico"> <span> Basico</span> <input
				type="radio" name="conhecimento" value="intermediario"> <span>
					Intermediário</span> <input type="radio" name="conhecimento"
				value="avancado"> <span> Avançado</span>
			</label>
		</p>

		<p>
			<label>Fumante: <input type="radio" name="fumante" value="sim"> <span>
					Sim</span> <input type="radio" name="fumante" value="nao"> <span>
					Não</span>
			</label>
		</p>

		<p>
			<label>Vegetariano: <input type="radio" name="vegetariano"
				value="sim"> <span> Sim</span> <input type="radio"
				name="vegetariano" value="nao"> <span> Não</span>
			</label>
		</p>

		<p>
			<label>Alergias?: <input type="radio" name="alergico" value="sim"> <span>
					Sim</span> <input type="radio" name="alergico" value="nao"> <span>
					Não</span>
			</label>
		</p>

		<p>
			<label for="">Caso seja alérgico, indique quais alergias possui:<input
				type="text" name="alergias"></label>
		</p>

		<p>
			<label for="">OBS: <textarea name="obs"></textarea>
			</label>
		</p>

	</fieldset>

	<fieldset>
		<legend>Dados do Pagante (caso seja diferente do participante)</legend>

		<p>
			<label>Nome completo:<input type="text" name="nomepagante"></label>
		</p>

		<p>
			<label>Endereço:<input type="text" name="enderecopagante"></label>
		</p>

		<p>
			<label>Complemento:<input type="text" name="complementopagante"></label>
		</p>

		<p>
			<label>Bairro:<input type="text" name="bairropagante"></label>
		</p>

		<p>
			<label>Cidade:<input type="text" name="cidadepagante"></label>
		</p>

		<p>
			<label>Estado:<input type="text" name="estadopagante"></label>
		</p>

		<p>
			<label>CEP:<input type="text" name="ceppagante"></label>
		</p>

		<p>
			<label>Telefones: <span>Residencial</span> <input type="tel"
				name="respagante"> <span> Celular:</span> <input type="tel"
				name="celpagante"> <span> Comercial:</span> <input type="tel"
				name="compagante">
			</label>
		</p>

		<p>
			<label>E-mail:<input type="email" name="emailpagante"></label>
		</p>

		<p>
			<label>CPF:<input type="text" name="cpfpagante"></label>
		</p>

	</fieldset>
	
	<input type="submit" name="submit" value="Atualizar">

</form>

</main>

<?php
require_once 'footer.php';
?>