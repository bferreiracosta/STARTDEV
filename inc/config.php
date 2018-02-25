<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = mysqli_connect($servername, $username, $password, 'Hackaton');

} catch (PDOException $e) {
    alert("conexão falhou");
}


$login = (isset($_POST['login'])) ? $_POST['login'] : '';//Pegando dados passados por AJAX
$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';


  //Consulta no banco de dados
$sql = "select * from CADASTRO where USUARIO ='" . $login . "' and SENHA='" . sha1($senha) . "'";
$resultados = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$res = mysqli_fetch_array($resultados); //

if (@mysqli_num_rows($resultados) == 0) {
    echo 0;	//Se a consulta não retornar nada é porque as credenciais estão erradas
} else {
    echo 1;	//Responde sucesso
    if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != true) {
        
    } else {
        echo "<h1>Seja bem-vindo, " . $_SESSION["user"] . "</h1>";
    };
}; 	
    //verifica se há sessão aberta
    session_start();		//Inicia seção

?>