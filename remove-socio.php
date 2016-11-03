<?php
require_once("cabecalho.php"); 
require_once("logica-usuario.php");
require_once("logica-usuario.php");
require_once("class/SocioDao.php");

verificaUsuario();

$socioDao = new SocioDao($conexao);

$id = $_POST['id'];
$socioDao->removeSocio($id);
$_SESSION["success"] = "Sócio removido com sucesso.";
header("Location: socio-lista.php");
die();

?>