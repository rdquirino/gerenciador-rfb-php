<?php
	error_reporting(E_ALL ^ E_NOTICE);
	require_once("mostra-alerta.php");
	require_once("conecta.php");
 ?>

<html>
<head>
	<meta charset="utf-8">
	<title>Vox</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="css/style.css" rel="stylesheet">

</head>
<body>
	
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Serenciador de Sócio RFB</a>
			</div>
			<div>
				<ul class="nav navbar-nav">

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							Empresa
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
				        	<li><a href="empresa-formulario.php">Cadastrar Empresa</a></li>
				        	<li><a href="empresa-lista.php">Empresas</a></li>
				        	<li><a href="empresa-pesquisa-formulario.php">Pesquisa Empresas</a></li>
				        </ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							Sócio
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="socio-formulario.php">Cadastrar Sócio</a></li>
							<li><a href="socio-lista.php">Sócios</a></li>
							<li><a href="socio-pesquisa-formulario.php">Pesquisa Sócio</a></li>
				        </ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
			    	<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>Sair</a></li>
			    </ul>
			</div>
		</div>
	</div> 
	<div class="container">
		<div class="principal">
			<?php  mostraAlerta("success"); ?>
			<?php mostraAlerta("danger"); ?>