<?php 
	$titulo = 'Institucional';
	require_once ('header.php');
	
	require_once ('nav.php');
?>
			
			<main>
			<h1>Institucional</h1>
			
			<a id="quem_somos"></a>
			<h2>Quem Somos:</h2>
				<p>
					Agente de Viagem,

					Fazer um intercâmbio faz parte do sonho de muitos brasileiros. O setor cresce, em média, 15% ao ano e deve movimentar R$ 5 milhões em 2014.

					O Brasil é o país da América Latina que mais manda estudantes para fora, em torno de 300 mil por ano  e os destinos mais procurados são Estados Unidos, com 53%, seguido pelo Canadá, Reino Unido, Espanha e Austrália. (Fonte: G1.Globo.com)

					Oferecer intercâmbio para os seus clientes é agregar um produto de muito valor ao seu negócio.

					Para este novo mercado, conte com a nossa consultoria pois estamos no mercado de cursos há 35 anos.

					Somos sócios-fundadores da Belta, Brazilian Educational & Language Travel Association, associação brasileira que reúne as principais instituições atuantes nos segmentos de cursos, estágios e intercâmbios no exterior e associados aos principais órgãos reguladores do mercado: Embratur, IATA, FELCA, ABAV e Sinditur.

					Atuando no mercado desde 1979, oferecemos programas em conceituadas instituições ao redor do mundo. Temos cadastrado em nosso sistema de orçamento online:



					Faça do seu atendimento um diferencial.

					Veja o passo a passo para vender intercâmbio e realize o sonho de muitos de seus clientes.

					Estamos esperando o seu contato.
			</p>
			
			<a id="nossa_historia"></a>
			<h2>NOSSA HISTÓRIA:</h2>
			
			<p>
				Fundada em 1988, a DMV Intercâmbio é a maior empresa de intercâmbio e turismo jovem do Brasil. Com mais de 80 franquias em todo o país, já embarcou mais de meio milhão de brasileiros para conhecer o mundo em viagens que unem estudo, trabalho e lazer.
			</p>
			
			<a id="nossa_missao"></a>
			<h2>NOSSA MISSÃO:</h2>
			<p>
				A essência da DMV Intercâmbio é conectar pessoas e lugares. 
				 
				"Nosso propósito consiste em promover aos estudantes uma experiência de intercâmbio única, sempre atenta às necessidades individuais. Temos como diretriz a certeza que cada estudante irá sempre obter o melhor serviço, com qualidade e informação, mantendo nossos objetivos de sempre buscar o que há de melhor no mercado e ajudá-lo a selecionar o programa que melhor se adapta às necessidades e expectativas de cada estudante."
				  
				A DMV Intercâmbio dedica-se a fornecer uma consultoria de intercâmbio de alta qualidade e garantir toda atenção aos detalhes.
			</p>
			
			<a id="contato"></a>
			
			<form action="recebido.php" method="post">
			
				<fieldset>
				
					<legend>Contato</legend>
					
						<p>Entre em contato Conosco</p>
						
						<p><label>Nome:<span> (obrigatório)</span> <input type="text" size="25" name="mome" id="nome" required></label></p>
						
						<p><label>E-mail:<span> (obrigatório)</span> <input type="email" size="25" name="email" id="email" required placeholder="seu@email.com"></label></p>

						<p><label>Telefone:<input type="tel" size="25" name="telefone" id="tel"></label></p>

						<p><label>Endereço: <input type="text" size="35" name="endereco" id="endereco"></label></p>
						
						<p><label>Comentários:<br><textarea name="comentarios" id="comentarios" rows="15" cols="35"></textarea></label></p>
						
						<input type="submit" value="Enviar" id="enviar">
					
				</fieldset>
			</form>
				
		</main>	

<?php 
require_once 'footer.php';
?>