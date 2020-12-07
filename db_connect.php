<?php
//include_once("cadastrar.php")

// Conexão com banco de dados
$servername = "127.0.0.1";
$username= "root";
$password = "";
$db_name = "bancomasterpiece";

// criando a conexão

$conn = mysqli_connect($servername, $username, $password, $db_name );

// verificando a conexão 


if (!$conn) {

	die ("Erro na conexão:".mysqli_connect_error());

} else {
	

 echo "Conexão realizada!";

}
 	 
 // mysqli_close($conn);