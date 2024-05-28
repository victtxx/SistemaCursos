<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
       
    
<style>
  
    body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('img/areia.png'); /* Substitua pelo caminho da sua imagem */
    background-size: cover; 

}

    .container {
    text-align: center;
   
           
}

form {
            background-color: #f2f2f2; /* Substitua pela cor desejada */
            padding: 20px;
            border-radius: 8px;
        }

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}


button:hover {
    background-color: #0056b3;
}

</style>


<script src="validar.js"></script>


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

                    <h4>Crie sua conta</h4>


                    </div>
                            
                    <form action="registroPost.php" method="POST" name="formulario">     

             <div>


               <div class="mb">

               <label>Nome</label>

               <input type="text"

                name="nome"

                class="form-control">

               </div>   

            </div>



            <div>

               <div class="mb">

               <label>E-mail</label>

               <input type="text"

                name="email"

                class="form-control">


               </div>  

           </div>

       <div>


    <div class="mb">

               <label>Usuário</label>

               <input type="text"

                name="usuario"

                class="form-control">


               </div>  

           </div>

       <div>


       <div class="mb">

               <label>Senha</label>

               <input type="password"

                name="senha"

                class="form-control">

               </div>  

           </div>

        <div>


    <div class="mb">



               <label>Confirmar senha</label>

               <input type="password"

                name="confirmarsenha"

                class="form-control">

               
            </div>                

           </div>

       <div>


       <div class="mb">



                   <button type="submit" onclick="return validar()" 

                    class="btn 

                    btn-primary">Registrar</button>
                    


       <p>Já tem uma conta? <a href="login.php">Faça login</a></p>


               </div>

           </div>

       </form>

                        </div>    

                    </div>

                </div>

            </div>

        </div>

    </body>

</html>

