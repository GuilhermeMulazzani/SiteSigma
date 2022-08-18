<?php
include_once '../includes/_banco.php';
include_once './_header.php';
include_once './menu.php';

$sql =  "SELECT * FROM categorias";
$resultado = mysqli_query($conexao, $sql);

?>

<main>
    <h2>Administração de Produtos</h2>

    <form action="categoria-processa.php" method="post">
    <input type="hidden" value="salvar" name="acao">
            <label for="name">Nome:</label><br>
            <input type="text" value="nome" name="nome"><br> 
            <label for="descricao">Descrição:</label><br>
            <textarea id="descricao" name="descricao"></textarea>
            <label for="categoria">Categoria:</label>
            <select name="valor">
                <?php
                while ($dado = mysql_fetch_array($resultado)) {
                    echo '<option value="'.$dado['CategoriaID'].'">'.$dado['Nome'].'</option>';
                }
                ?>
            </select>
            <hr>
            <input type="submit" value="Enviar">
    </form>
</main>

<?php
include_once './_footer.php';
?>