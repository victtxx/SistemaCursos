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
        $sql = "select * FROM videos WHERE id = {$_GET["id"]}";
        $res = $conn->query($sql) or die($conn->error);
        $row = $res -> fetch_object();
    }
}

$sqlCursos = "select * from cursos order by titulo";
$resCursos = $conn->query($sqlCursos) or die($conn->error);
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
        <h2>Cadastro de Vídeo</h2>
        <br>
    </div>

    <div class="container">

        <form  action="admvideopost.php" method="POST" name="formulario" autocomplete="off">

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
            <label for="id_curso"> Curso: </label>
            <select name="id_curso" id="id_curso">
            <?php
                while($rowCursos = $resCursos->fetch_assoc()) 
                {
            ?>    
                <option value="<?=$rowCursos['id']?>" <?php echo (empty($row) ? '' : ($row->id_curso == $rowCursos['id'] ? 'selected' : '')); ?>><?=$rowCursos['titulo']?></option>
            <?php 
                }
            ?>
            </select>
        </p>

        <p class="text-start">
            <label for="titulo"> Titulo: </label>
            <input type="text" name="titulo" id="titulo" value="<?php echo (empty($row) ? '' : $row->titulo); ?>"></input>
        </p>

        <p class="text-start">
            <label for="url"> URL: </label>
            <input type="text" name="url" id="url" value="<?php echo (empty($row) ? '' : $row->url); ?>"></input>
        </p>

        <p>
            <button onclick="location.href='admvideos.php'; return false;">Cancelar</button>
            <button onclick="return validarVideo();">Salvar</button>
        </p>

        </form>
    </body>

</html>  
        