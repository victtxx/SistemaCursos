<?php
include('config.php'); 

if (isset($_GET) && !empty($_GET))
{
    if ($_GET["act"] == "excluir")
    {
        $sql = "DELETE FROM cursos WHERE id = " . $_GET["id"];
        if ($conn->query($sql) === TRUE) {
            print "<script>alert('Curso excluído com sucesso.');</script>";
            print "<script>location.href='admcursos.php';</script>";
        } else {
            echo "Erro excluindo curso: " . $conn->error;
          }
    }
}
else
{
    if (!empty($_POST["id"]))
    {
        $id = $_POST["id"];
    }

    $titulo = $_POST["titulo"];
    $descricao = htmlspecialchars($_POST["descricao"]);
    $resumo = htmlspecialchars($_POST["resumo"]);
    $ordem = $_POST["ordem"];

    if (empty($id))
    {
        //Verificar se já existe essa ordem no banco de dados
        $sql = "select * from cursos where ordem={$ordem}";
        $res = $conn->query($sql) or die($conn->error);
        $row = $res->fetch_object();
        if ($row)
        {
            print "<script>alert('Já existe um curso com a ordem informada.');</script>";
            print "<script>history.back();</script>";
        }
        else
        {
            $sql = "INSERT INTO cursos (titulo, descricao, resumo, ordem) VALUES ('{$titulo}', '{$descricao}', '{$resumo}', '{$ordem}')";
            $res = $conn->query($sql) or die($conn->error);
            if($res) 
            {
                print "<script>alert('Curso criado com sucesso.');</script>";
                print "<script>location.href='admcursos.php';</script>";
            }
        }
        
    }
    else
    {
        //Verificar se já existe essa ordem no banco de dados
        $sql = "select * from cursos where ordem = {$ordem} and id <> {$id}";
        $res = $conn->query($sql) or die($conn->error);
        $row = $res->fetch_object();
        if ($row)
        {
            print "<script>alert('Já existe um curso com a ordem informada.');</script>";
            print "<script>history.back();</script>";
        }
        else
        {
            $sql = "UPDATE cursos SET titulo='{$titulo}', descricao='{$descricao}', resumo='{$resumo}', ordem='{$ordem}' where id={$id}";
            $res = $conn->query($sql) or die($conn->error);
            if($res) 
            {
                print "<script>alert('Curso alterado com sucesso.');</script>";
                print "<script>location.href='admcursos.php';</script>";
            }
        }
    }
}

?>