<?php
session_start();

if(empty($_SESSION) || $_SESSION["admin"] != 1){
    print "<script>location.href='dashboard.php';</script>";
}

include('config.php');
$sql = "SELECT * FROM cursos";
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
        <h2>Cursos</h2>
        <br>
    </div>

    <div class="admin-container">

    <div class="admin-adicionar">
        <button onclick="location.href='admcursoedit.php';"> Adicionar </button>
    </div>

    <div class="admin-tabela">
        <table>
            <tr>
                <th>Id</th>    
                <th>Nome</th> 
                <th>Resumo</th>
                <th>Ordem</th>
                <th class="text-end">Ações</th>
            </tr>
        
<?php
    while($row = $res->fetch_assoc()) 
    {
?>
    <tr>
        <td><?=$row["id"]?></td>
        <td><?=$row['titulo']?></td>
        <td><?=$row['resumo']?></td>
        <td><?=$row['ordem']?></td>
        <td class="text-end">
            <button onclick="location.href='admcursoedit.php?act=editar&id=<?=$row['id']?>';" > Editar </button>
            <button onclick="location.href='admcursopost.php?act=excluir&id=<?=$row['id']?>';" > Excluir </button>
         </td>
    </tr>

<?php      
    }   
?>
    </table>
    </div>
    <br><br>
    <a href="administrar.php"> <button style="background-image: linear-gradient(to right, #F0FFF0, #F0FFF0); color: #000000; padding: 12px 24px; border: none; border-radius: 25px; font-size: 16px; cursor: pointer; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2); transition: transform 0.3s ease, box-shadow 0.3s ease;">Voltar a administração</a></button>

    </div>
</body>
</html>