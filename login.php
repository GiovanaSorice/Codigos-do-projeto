
<?php

include_once ("db_connect.php");

//$host="127.0.0.1";
//$username="root";
//$password="";
//$db_name= "bancomasterpiece";
//$connect=mysqli_connect($host,$username,$password) or die(mysqli_error());
//$bancodedados=mysqli_select_db($connect,$db_name) or die(mysqli_error());
$email_usu=filter_input(INPUT_POST, 'email_usu');
$senha_usu=filter_input(INPUT_POST, 'senha_usu');
$tipo_usu=filter_input(INPUT_POST,'OPCAO');
$select="SELECT * FROM usuario WHERE email_usu ='$email_usu' AND senha_usu ='$senha_usu'" ;
$query=mysqli_query($connect,$select);
$_SESSION['email_usu']=$email_usu;
$_SESSION['senha_usu']=$senha_usu;

if( $_POST['tipo_usu']=="1")  {
	echo "<h1><center> Bem vindo!!!</h1></center>";
	exit();

	}else {
		//($_POST['email_usu'] | | $_POST['senha_usu'] || $_POST['tipo_usu']=="2")  {
	
	header('Location: index.php');
	die();
}
session_start();
$username = mysqli_real_escape_string($connect, $_POST['username']);
$password = mysqli_real_escape_string($connect, $_POST['password']);

$query = "select Nome_U from usuario where usuario = '{$username}' and senha = md5('{$password}')";

$result = mysqli_query($connect, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['username'] = $usuario_bd['username'];
	header('Location: index.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	echo "<h1><center> Esse usuário não existe, por favor, reentre!</h1></center>";
	exit();
}


