<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
    <link rel="stylesheet" href="stylelogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>   
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card">
                    <div class="card-body">
                        <img class='logomegaw' src="img/mega W sem Fundo.png" style='text-align: center'width="100%"/>
                    </div>
                    <div class="card-body">      
                        <h4>Seja bem-vindo(a)!</h4>
                    </div>
                    
                    <form action="login.php" method="POST"> 
                        <div>
                            <div class="mb">
                                <label>Usuário</label>
                                <input type="text" name="usuario" class="form-control"></input>
                            </div>   
                        </div>

                        <div>
                            <div class="mb">
                                <label>Senha</label>
                                <input type="password" name="senha" class="form-control"></input>
                            </div>  
                        </div>

                        <div>
                            <div class="mb">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                    
                                <p>
                                    <a href="redefinir.php">Redefinir senha</a>
                                </p> 

                                <p>
                                    Não tem uma conta? <a href="registro.php">Criar conta</a>
                                </p>
                            </div>
                        </div>
                    </form>

                </div>  
            </div>
        </div>
    </div>
</body>
</html>