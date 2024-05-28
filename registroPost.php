<?php
include('config.php'); 

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$confirma_senha = $_POST["confirmarsenha"];

$sql = "INSERT INTO Usuarios (nome, email, usuario, senha, data) VALUES ('{$nome}', '{$email}', '{$usuario}', '{$senha}', curdate())";

$res = $conn->query($sql) or die($conn->error);

    if($res) {

    print "<script>alert('Usuário criado');</script>";
        print "<script>location.href='index.php';</script>";

    }

?>