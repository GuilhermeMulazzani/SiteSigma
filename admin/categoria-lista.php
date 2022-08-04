<?php
include_once '../includes/_banco.php';
include_once './_header.php';
include_once './menu.php';

//SQL de consulta
$sql = "SELECT * FROM categorias";

// executa a consulta de dados ( variavel de conexao do dados, variavel sql de consulta)
$resultado = mysqli_query($conexao, $sql);
$total = mysqli_num_rows($resultado);

// inclui o menu na pagina
include_once 'menu.php';
?>

<main>

    <h2>Administração das Categorias</h2>
    <a href="categoria-salvar.php">Inserir</a>
    <hr>
    <table border="1">
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Ações</th>

    <?php
    // verifica se existe informacoes no banco de dados
    if($resultado){
        // converte os resultados em uma linha da matriz 
        while ($dado = mysqli_fetch_array($resultado)) {
    ?>

    <tr>
        <td><?php echo $dado[ 'CategoriaID']; ?></td>
        <td><a href="categoria-salvar.php?acao-salvar&id=<?php echo $dado[ 'CategoriaID']; ?>"><?php echo $dado['Nome']; ?></td> 
        <td><a href="categoria-processa.php?acao-excluir&id=<?php echo $dado['CategoriaID']; ?>">Excluir</a></td>
    </tr>

    <?php
        }
    }else{
    ?>
    <tr>
        <td colspan="3">Resultados não encontrados</td>
    </tr>
    <?php
    }
    ?>
    <tr>
        <td colspan="3">Total de Registros: <?php echo $total;?></td>
    </tr>
</table>

</main>

<?php
include_once './_footer.php';
?>