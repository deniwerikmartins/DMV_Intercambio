<body>
	<div id="wrapper" class="container">

		<nav>

			<a class="toggleMenu" href="#" tabindex="7">Menu</a>
			<ul class="nav">
				<li><a href="/home/index" tabindex="8">Home</a></li>
				<li><a href="/home/institucional" tabindex="9">Institucional</a>
					<ul>
						<li><a href="/home/institucional" tabindex="10">Quem
								somos</a></li><!--institucional.php#quem_somos-->
						<li><a href="/home/institucional" tabindex="11">Nossa
								História</a></li><!--institucional.php#nossa_historia-->
						<li><a href="/home/institucional" tabindex="12">Nossa
								Missão</a></li><!--institucional.php#nossa_missao-->
						<li><a href="/home/institucional" tabindex="13">Contato</a>
						</li>

					</ul></li>
				<li><a href="#" tabindex="14">Intercâmbio</a>
					<ul>
						<li><a href="/home/int_ingles" tabindex="15">Inglês</a></li>
						<li><a href="/home/int_espanhol" tabindex="16">Espanhol</a></li>
						<li><a href="/home/int_frances" tabindex="17">Francês</a></li>
						<li><a href="/home/int_alemao" tabindex="18">Alemão</a></li>
						<li><a href="/home/int_mandarim" tabindex="19">Mandarim</a></li>
						<li><a href="/home/int_italiano" tabindex="20">Italiano</a></li>
					</ul></li>
				<li><a href="#" tabindex="21">Agência</a>
					<ul>
						<li><a href="/home/destinos" tabindex="22">Destinos</a></li>
						<li><a href="/cliente/cadastro" tabindex="23">Cadastro em intercâmbio</a></li>
						<li><a href="/home/dep_aereo" tabindex="24">Departamento Aéreo</a></li>
					</ul>
				</li>
				<li><a href="/usuario/area" tabindex="25">Área do Usuário</a>
					<ul>
						<li><a href="/cliente/atualizar" tabindex="26">Atualizar Cadastro</a></li>
						<li><a href="/tramite/listar" tabindex="27">Acompanhar trâmite</a></li>
						<li><a href="/proposta/enviar" tabindex="28">Enviar propostas de Intercâmbio</a></li>
					</ul>
				</li>
				
				<li  id="navbusca"><a href="buscar.php">Busca</a></li>
				<li  id="navregistro"><a href="/usuario/registro">Registre-se</a></li>
				<li  id="navlogin"><a href="/login/usuario">Login</a></li>
			</ul>
			
			
				<form method="POST" action="#">
					<p id="busca">
						<label>
							<a href="buscar.php">Busca</a>
							<input type="text" size="10">
							<input type="submit" value="Buscar" name="submit">
						</label>
					</p>

					


				</form>

			
			<p id="login">
				<a href="/login/usuario">Login</a>
			</p>
			
			<p id="registre-se">
				<a href="/usuario/registro">Registre-se</a>
			</p>
			
			<p id="logout">
				<a href="/login/logout">Logout</a>
			</p>
		
		</nav>

		<script>
			<?php 
				include 'js/jquery-1.11.3.min.js';
			?>
		</script>
		<script>
			<?php 
				include 'js/script.js';
			?>
		</script>
			
			
		<!--<script>type="text/javascript" src="js/jquery-1.11.3.min.js"></script>-->
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
		<!--<script type="text/javascript" src="js/script.js"></script>-->

		<header>
			<picture>
			<source media="(max-width: 319px)" srcset="https://dmv-intercambio-redblood666-1.c9users.io/mvc/view/imagens/Logo_dmv.png">
			<img src="https://dmv-intercambio-redblood666-1.c9users.io/mvc/view/imagens/DMV.png" id="logo" alt="logo da empresa"> </picture>
		</header>