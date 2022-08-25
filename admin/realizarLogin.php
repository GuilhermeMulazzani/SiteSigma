<?php
// todo session start precisa estar no TOPO DO TOPO DE TUDO 
session_start();

require '../includes/Banco.php';

$user = $_POST['user'];
$password = $_POST['password'];

$sql = "SELECT * FROM adm WHERE usuario = '{$user}' and senha = '{$password}'";
$res = mysqli_query($conn, $sql);
$linhas = mysqli_num_rows($res);

if($linhas > 0){
    $_SESSION['logado'] = 'logado';
    header('Location: ./admin.php');
}else{
    header('Location: ./login.php?erro=1');
}
mysqli_close($conn);