<?php
session_start();
if(empty($_SESSION)){
    print "<script>location.href='index.php';</script>";
}

include('config.php');
$sql = "SELECT * FROM cursos ORDER BY Ordem ASC";
$res = $conn->query($sql) or die($conn->error);
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
        <h2>Uma plataforma completa onde você irá sedesenvolver e alavancar a sua carreira.</h2>
        <br>
    </div>

    <div class="container">

<?php
while($row = $res->fetch_assoc()) 
{
?>
        <div class="card card-1">
            <div class="card-header">
                <img src="img/curso_<?=$row["id"]?>.png"class="card-img" />
            </div>
            <div class="card-body">
                <h3 class="card-local"><?=$row['titulo']?></h3>
                <p class="card-texto">
                    <?=$row['resumo']?>
                </p>
            </div>      
            <div class="card-footer">
                <a href="curso.php?id=<?=$row["id"]?>">Ver curso</a>
            </div>          
        </div>              
<?php 
}
?>

    </div> 
</body>
</html>

                
