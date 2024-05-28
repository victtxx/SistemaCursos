<?php
include('config.php'); 

if (isset($_GET) && !empty($_GET))
{
    if ($_GET["act"] == "excluir")
    {
        $sql = "DELETE FROM videos WHERE id = {$_GET["id"]}";
        if ($conn->query($sql) === TRUE) {
            print "<script>alert('Vídeo excluído com sucesso.');</script>";
            print "<script>location.href='admvideos.php';</script>";
        } else {
            echo "Erro excluindo vídeo: " . $conn->error;
          }
    }
}
else
{
    if (!empty($_POST["id"]))
    {
        $id = $_POST["id"];
    }

    $id_curso = $_POST["id_curso"];
    $titulo = $_POST["titulo"];
    $url = $_POST["url"];

    if (empty($id))
    {
        $sql = "INSERT INTO videos (id_curso, titulo, url) VALUES ('{$id_curso}', '{$titulo}', '{$url}')";
        $res = $conn->query($sql) or die($conn->error);
        if($res) 
        {
            print "<script>alert('Video criado com sucesso.');</script>";
            print "<script>location.href='admvideos.php';</script>";
        }
    }
    else
    {
        $sql = "UPDATE videos SET titulo='{$titulo}', id_curso='{$id_curso}', url='{$url}' where id={$id}";
        $res = $conn->query($sql) or die($conn->error);
        if($res) 
        {
            print "<script>alert('Vídeo alterado com sucesso.');</script>";
            print "<script>location.href='admvideos.php';</script>";
        }
    }
}

?>