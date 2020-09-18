<?php
session_start();
include('conexao.php');

if(isset($_POST["email"])){

$usuario = $_POST['email'];
$senha = $_POST['senha'];

$result = $bd->query('SELECT * FROM cliente where email ="'.$usuario.'" and senha = "'.$senha.'" ');
$log = $result->num_rows;

$login = False;
if ($log == 1) { //verificar
	$cliente = $result->fetch_object();
        $_SESSION['usuario'] = $cliente->nome;
        $login = True;   
}
if ($login) {
    echo "<script>";
	echo "location.href='index.php';";
	echo "</script>"; //redirecionar

} else {
    echo "<script> alert('Usuário ou senha incorretos');";
	echo "location.href='login.php';";
    echo "</script>";

}
}
?>