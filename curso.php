<?php
session_start();
if(empty($_SESSION)) 
{
    print "<script>location.href = 'index.php';</script>";
}

if (!isset($_GET) || empty($_GET))
{
    if (headers_sent())
    {
        print "<script>location.href = 'index.php';</script>";
        die();
    }
    else 
    {
        header('Location: cursos.php'); die();
    }
}

include('config.php');
$sql = "SELECT * FROM cursos WHERE id = ".$_GET["id"];
$res = $conn ->query($sql) or die($conn -> error);
$row = $res -> fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mega W - Cursos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
        <h2><?=$row->titulo?></h2>
        <br>
    </div>

    <div class="container">
        <div class="bloco-descricao">
            <p>
                <?=$row->descricao?>
            </p>   
        </div>
    </div>

    <div class="bloco-video">       
           
        <?php
        $sql = "SELECT * FROM videos WHERE id_curso = ".$_GET["id"];
        $res = $conn ->query($sql) or die($conn -> error);
        while($row_video = $res->fetch_assoc()) 
        {
        ?>

        <p>
            <h3><?=$row_video["titulo"]?></h3>
            <object data="<?=$row_video["url"]?>"
            style="width: 650px; height:461.25px; float:none clear: both; margin: 20px auto;"> </object>
        </p>

        <?php      
        }   
        ?>

    </div>

    <div class="container">
        <div class="anterior">
            <a href="curso.php">           
                <span class="icon" style="background-image: linear-gradient(to right, #32CD32, #32CD32);  color: #000000; padding: 12px 24px; border: none; border-radius: 25px; font-size: 16px; cursor: pointer; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2); transition: transform 0.3s ease, box-shadow 0.3s ease;"> <i class="bi bi-chevron-double-left"></i> </span>              
            </a>
        </div>
        <div class="proximo">
            <a href="curso.php">
                <span class="icon" style="background-image: linear-gradient(to right, #32CD32, #32CD32);  color: #000000; padding: 12px 24px; border: none; border-radius: 25px; font-size: 16px; cursor: pointer; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2); transition: transform 0.3s ease, box-shadow 0.3s ease;"><i class="bi bi-chevron-double-right"></i> </span> 
            </a>
        </div>
    </div>

    </body>
</html>