<?php
require_once 'db_connect.php';
session_start();

if(!isset($_SESSION['logado'])):
	header('Location: index.php');
	endif;

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);

?>
<html>
<html>
<head>
	<meta charset="utf-8">
	<title> Página Restrita</title>
</head>
<body>
<h1>
<a href="logout.php"> SAIR </a>
<?php 
echo "Olá, ".$dados['nome'];
?>
</h1>
<p></p>
</body>
</html>