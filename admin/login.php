<?php
    // include do arquivo de head 
    include_once 'head.php';
?>
   <main>
        <h2>Administração das Produtos<h2>
<?php

    // colecao de mensagens
    $mensagem = array(
        1=> 'Usuário ou senha inválidos!',
        2=> 'Você precisa ter um usuário válido para acessar!', 
        3=> 'Você saiu, volte sempre!'
    );

    // validacao da mensagem
    if( isset($_GET['msg']) || is_numeric($_GET)){
        // captura o cod da mensagem $cod= $_GET['msg'];
        $cod = $_GET['msg'];
?>
<h3><?php echo $mensagem[$cod]; ?></h3>
<?php
} 
?>

    <form action="login-processa.php" method="post">
        <input type="hidden" value="login" name="acao"><br> 
        <label for="email">E-mail:</label><br>
        <input type="text" id="email" name="email"><br> 
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha"><br>
        <hr>
        <input type="submit" value="Login"> 
    </form>

</main>
<?php
// inclusao do arquivo do rodape
include_once '_footer.php'; 
?>