<?php
require_once("config/conexao_bd.php");
?>

<?php
if(isset($_GET["pg"])){
	$pagina = $_GET["pg"];
}
else{
	$pagina = "inicio";
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>CaxiasNet</title>
		<meta charset="utf-8">

		<link rel="stylesheet" href="./css/bootstrap_css/bootstrap.min.css">

		<script src="./js/jquery-3.3.1.slim.min.js"></script>
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap_js/bootstrap.min.js" ></script>

		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<script type="text/javascript" src="js/funcoes.js"></script>

	</head>
	<body>

		<div class="container" id="cabecalho">
			
			<div class="jumbotron">
						
				<h1>Bem vindo ao CaxiasNet</h1>

				<ul class="menu">
					<li><a class="btn btn-secondary" role="button" href="?pg=inicio">Início</a></li>
					<li><a class="btn btn-secondary" role="button" href="?pg=sobre">Sobre</a></li>
					<li><a class="btn btn-secondary" role="button" href="?pg=cadastro">Cadastro</a></li>
					<li><a class="btn btn-secondary" role="button" href="?pg=listagem">Listagem</a></li>
				</ul>
			</div> 
		</div>

		<div class="container" id="corpo">
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item" aria-current="page">
				<a href="?pg=inicio" style="color: #808080">Home</a>
			</li>
			
			

			<?php
			if ($pagina == "sobre") {
				echo '<li class="breadcrumb-item active" aria-current="page" style="color: #808080">Sobre</li>';
			} elseif($pagina == "cadastro") {
				echo '<li class="breadcrumb-item active" aria-current="page" style="color: #808080">Cadastro</li>';
			} elseif($pagina == "listagem") {
				echo '<li class="breadcrumb-item active" aria-current="page" style="color: #808080">Listagem</li>';
			} elseif($pagina == "arma") {
				echo '<li class="breadcrumb-item active" aria-current="page" style="color: #808080">Arma</li>';
			} elseif($pagina == "quadro") {
				echo '<li class="breadcrumb-item active" aria-current="page" style="color: #808080">Quadro</li>';
			} elseif($pagina == "servico") {
				echo '<li class="breadcrumb-item active" aria-current="page" style="color: #808080">Serviço</li>';
			}
			?>
			
		</ol>
	</nav>

		<?php

		include("paginas/".$pagina.".php");

		?>
		</div>

		<div class="container" id="rodape">

			<div class="jumbotron">				

				<h4>Todos os direitos cautelados &copy;</h4>				

			</div>
		</div>
	</body>
</html>