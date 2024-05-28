<?php
session_start();

if(empty($_SESSION) || $_SESSION["admin"] != 1){
    print "<script>location.href='dashboard.php';</script>";
}

include('config.php');

if (isset($_GET) && !empty($_GET))
{
    if ($_GET["act"] == "editar")
    {
        $sql = "select * FROM cursos WHERE id = {$_GET["id"]}";
        $res = $conn->query($sql) or die($conn->error);
        $row = $res -> fetch_object();
    }
}
else
{
    $sqlOrdem = "SELECT MAX(ordem) ordem FROM `cursos`";
    $ordem = $conn->query($sqlOrdem)->fetch_object()->ordem;
    if (empty($ordem))
        $ordem = 1;
    else
        $ordem++;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mega W - Cursos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="validar.js"></script>
</head>

<body>
    <div class="logo-container">
        <img src="img/mega W sem Fundo.png" alt="Minha Logo">      
    </div>

    <?php
        include("menulateral.php");
    ?>

    <div class="text-center">
        <br>
        <h2>Cadastro de Curso</h2>
        <br>
    </div>

    <div class="container">
        <form  action="admcursopost.php" method="POST" name="formulario" autocomplete="off">

        <?php
            if (!empty($row)) 
            {
        ?>
        <p class="text-start">
            <label for="titulo"> Id: </label>
            <input type="text" disabled value="<?=$row->id?>" class="form-control"></input>
            <input type="hidden" name="id" id="id" value="<?=$row->id?>"></input>
        </p>
        <?php
            }
        ?>
        <p class="text-start">
            <label for="titulo"> Titulo: </label>
            <input type="text" name="titulo" id="titulo" value="<?php echo (empty($row) ? '' : $row->titulo); ?>"></input>
        </p>

        <p class="text-start">
            <label for="descricao"> Descrição: </label>
            <textarea name="descricao" id="descricao" rows="4"><?php echo (empty($row) ? '' : $row->descricao); ?></textarea>
        </p>

        <p class="text-start">
            <label for="resumo">Resumo:</label>
            <textarea name="resumo" id="resumo" rows="4"><?php echo (empty($row) ? '' : $row->resumo); ?></textarea>
        </p>

        <p class="text-start">
            <label for="ordem">Ordem:</label>
            <input type="text" name="ordem" id="ordem" value="<?php echo (empty($row) ? (empty($ordem) ? '' : $ordem) : $row->ordem); ?>"></input>
        </p>

        <p>
            <button onclick="location.href='admcursos.php'; return false;">Cancelar</button>
            <button onclick="return validarCurso();">Salvar</button> 
        </p>

        </form>
    </body>

</html>  
        