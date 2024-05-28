<?php
session_start();
if(empty($_SESSION)){
    print "<script>location.href='index.php';</script>";
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
        <h2>Uma plataforma completa onde você irá se desenvolver e alavancar a sua carreira.</h2>
        <br>
    </div>

    <div class="container">
        <div class="card card-1">
            <div class="card-header">
                <img src="img/livro.png" class="card-img" />
            </div>
            <div class="card-body">
                <h3 class="card-local">Se desenvola</h3>
                <p class="card-texto">
                    Aqui vamos te desenvolver todos os dias.
                </p>
            </div>
            <div class="card-footer">
                <a href="#">Ver Mais</a>
            </div>
        </div>

        <div class="card card-2">
            <div class="card-header">
                <img src="img/progresso" class="card-img" />
            </div>
            <div class="card-body">
                <h3 class="card-local">Veja seu progresso</h3>
                <p class="card-texto">
                    Além de aprender você terá um guia prático sobre seu desempenho.
                </p>
            </div>
            <div class="card-footer">
                <a href="#">Ver Mais</a>
            </div>
        </div>
     
        <div class="card card-3">
            <div class="card-header">
                <img src="img/parque.png" class="card-img" />
            </div>
            <div class="card-body">
                <h3 class="card-local">Estude de onde quiser</h3>
                <p class="card-texto">
                    Nossa plataforma é flexícivel, assim facilitamos seus estudos.
                </p>
            </div>
            <div class="card-footer">
                <a href="#">Ver Mais</a>
            </div>
        </div>
    </div>

       

    
</body>
</html>
