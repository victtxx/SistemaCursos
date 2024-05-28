<?php

session_start();


if(empty($_SESSION) || $_SESSION["admin"] != 1){


    print "<script>location.href='dashboard.php';</script>";

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
        <h2>Administração</h2>
        <br>
    </div>

    
    <div class="admin-container">
        <a href="admcursos.php"> <button style="background-image: linear-gradient(to right, #4facfe, #00f2fe); color: #000000; padding: 12px 24px; border: none; border-radius: 25px; font-size: 16px; cursor: pointer; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2); transition: transform 0.3s ease, box-shadow 0.3s ease;">Administrar cursos</button></a>
        <a href="admusuarios.php"> <button style="background-image: linear-gradient(to right, #4facfe, #00f2fe);  color: #000000; padding: 12px 24px; border: none; border-radius: 25px; font-size: 16px; cursor: pointer; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2); transition: transform 0.3s ease, box-shadow 0.3s ease;">Administrar usuários</button></a>
        <br><br>
        <a href="admvideos.php"> <br> <button style="background-image: linear-gradient(to right, #4facfe, #00f2fe); color: #000000; padding: 12px 24px; border: none; border-radius: 25px; font-size: 16px; cursor: pointer; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2); transition: transform 0.3s ease, box-shadow 0.3s ease;">Administrar videos</button></a> <br>
        <br>
        <a href="dashboard.php"> <br> <button style="background-image: linear-gradient(to right, #4facfe, #00f2fe); color: #000000; padding: 12px 24px; border: none; border-radius: 25px; font-size: 16px; cursor: pointer; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2); transition: transform 0.3s ease, box-shadow 0.3s ease;">Voltar ao inicio</button></a> <br>
        
    </div>
</body>
</html>

 