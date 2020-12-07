
<?php

session_start();
include_once('db_connect.php');



//$nome_usu= $_POST['nome_usu'];
$nome_usu= filter_input(INPUT_POST, 'nome_usu');
$email_usu = filter_input(INPUT_POST, 'email_usu');
$senha_usu = filter_input(INPUT_POST, 'senha_usu');
$CPF_usu = filter_input(INPUT_POST, 'CPF_usu');
$telefone_usu = filter_input(INPUT_POST, 'Telefone_usu');
$tipo_usu = filter_input(INPUT_POST, 'OPCAO');




// Conexão

$conn = mysqli_connect($servername, $username, $password, $db_name );


$result_usuario = "INSERT INTO usuario (nome_usu, email_usu, senha_usu, CPF_usu, Telefone_usu, OPCAO) VALUES ('$nome_usu', '$email_usu', '$senha_usu', '$CPF_usu',  '$telefone_usu', '$tipo_usu' )";

mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)) {
	$_SESSION['msg']= "Cadastro realixzado com sucesso!! Efetue o Login e faça parte da Masterpiece";
	header("Location: index.php");
} else{
	header("Location: Pagina_Artistas.php");
}
  
  // Verificando a conexão

   //if (mysqli_query (!$result_usuario)){

      //   echo "Cadastro realizado com sucesso"; 
   	  
   //} else {
   	   // echo "Error:" . $result_usuario . "<br>" . mysqli_error($result_usuario);

   
   



