<?php
    // conexão com o banco de dados
    include_once '../includes/_dados.php';
    // include do arquivo de head
    include_once 'head.php';

    // verifica se o geet foi informado e se ele não esta vazio
    if(isset($_GET['id']) || !empty($_GET['id'])){
        // captura o ID
        $id = $_GET['id'];
        // consulta os dados
        $sql "SELECT * FROM categorias WHERE CategoriaID= ".$id;
        $resultado mysqli_query($conexao, $sql);
        // parametri qe converte as colunas em campos
        $dados = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    }else{
        $id ='';
        $dados [ 'Nome'];
        $dados ['Descricao'];
    }

    // inclui o menu na pagina
    include_once '_menu.php';
    ?>

    <main>
        <h2>Administração das Categorias</h2>
        <a href="categoria-lista.php">Listagem</a>
        <hr>
        <form action="categoria-processa.php" method="post">
            <input type="text" name="id" value="<?php echo $id; ?>"><br>
            <label for="name">Nome:</label><br>
            <input type="text" value="salvar" name="acao"> <input type="text" id="nome" name="nome" value="<?php echo $dados['Nome']; ?>"><br> <label for="descricao">Descrição:</label><br>
            <textarea id="descricao" name="descricao"><?php echo $dados['Descricao']; ?></textarea><br>
            <hr>
            <input type="submit" value="Enviar">
        </form>
    </main>
<?php
    // inclusao do arquivo do rodape
    include_once '_footer.php';
?>