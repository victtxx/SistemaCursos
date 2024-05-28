<!-- <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Outfit', sans-serif;
}

body {
height: 900vh;
background-image: url('img/matinhos.png'); /* Substitua pelo caminho da sua imagem */
background-size: cover; /* Garante que a imagem cubra toda a área do body */
background-position: center; /* Centraliza a imagem */
background-repeat: no-repeat; 
margin: 0; /* Remove margens padrão */
padding: 0; /* Remove preenchimento padrão */
height: 100vh;
background-attachment: fixed;

}

nav.menu-lateral {
width: 80px;
height: 100%;
background-color: #32CD32;
padding: 40px 0 40px 1%;
box-shadow: 3px 0 0 #000080;
position: fixed;
top: 0;
left: 0;
overflow: hidden;
transition: .5s;

}


nav.menu-lateral.expandir {
    width: 300px;

}

.btn-expandir {
    width: 100%;
    padding-left: 10px;
}

.btn-expandir > i{
    color: #fff;
    font-size: 24px;
    cursor: pointer;
}

ul {
    height: 100%;
    list-style-type: none;
}

ul li.item-menu {
    transition: .2s;

}

ul li.ativo {
    background-color: #000080;
}

ul li.item-menu:hover a {
    background: #000080;
}

ul li.item-menu a{
    color: #000;
    text-decoration: none;
    font-size:  20px;
    padding: 20px 4%;
    display: flex;
    margin-bottom: 20px;
    line-height: 40px;
}

ul li.item-menu a .txt-link {
    margin-left: 70px;
    transition: .5s;
    opacity: 0;
}




nav.menu-lateral.expandir .txt-link {
    margin-left: 40px;
    opacity: 1;


}

ul li.item-menu a .icon > i{
    font-size: 30px;
    margin-left: 10px;

}

.container {
text-align: center; /* Centraliza horizontalmente dentro do container */

}

.centro-horizontal {
display: block; /* Para aplicar margens automáticas */
margin-left: auto; /* Margem à esquerda automática */
margin-right: auto; /* Margem à direita automática */
}

main {
background-color: white;
font-size: 5e;
margin: 2%;
padding: 0;
text-align: center;
position: absolute;
top: 41%;
left: 75%;
border: 1px solid #000080;
border-radius: 15px;

}


</style>

</head>
<body>
        
 
<div class="container">
    <img src="img/mega W sem Fundo.png" style='text-align: center'width="50%" class="centro-horizontal"/>
   <br> <h2> Mega W Uma plataforma completa onde você irá se
desenvolver e alavancar a sua carreira.</h2>

<br> <h2>Dicas de videos para assistir:</h2>

<br> <iframe src="https://www.youtube.com/embed/NVGDN29LiuU" frameborder="0" width="650" height="440"></iframe> <br>

    <br> <h2>Você também irá gostar de assistir: </h2> <br>

   <br> <iframe src="https://www.youtube.com/embed/VpermkIl14M" frameborder="0" width="650" height="440"></iframe> <br>



        <main>
             <h2>O que você vai aprender?</h2> 
    <br>Conhecer os passos para o bom desempenho da equipe. <br>
    <br> Conhecer os dez mandamentos para o trabalho em equipe. <br>
    <br> Qual as fases pelas quais o trabalho em equipe passa. <br>
    <br> Conhecer os diferentes tipos de personalidades. <br>
    <br>Objetivos bem traçados. <br>
    <br>Escolha das metas. <br>
    <br>Planejamento e tempo hábil para a sua realização. <br>
    <br>Priorizar tarefas. <br>

        </main>

  
        <nav class="menu-lateral">          
        <div class="btn-expandir">
        <i class="bi bi-list" id="btn-exp"></i>
        </div>

            <ul>
                <li class="item-menu ativo">
                    <a href="#">
                        
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="txt-link">Inicio</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#">
                        <span class="icon"><i class="bi bi-camera-reels"></i></span>
                        <span class="txt-link">Aulas</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#">
                        <span class="icon"><i class="bi bi-person-vcard"></i></span>
                        <span class="txt-link">Perfil</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#">
                        <span class="icon"><i class="bi bi-question-octagon"></i></span>
                        <span class="txt-link">Ajuda</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#">
                        <span class="icon"><i class="bi bi-tools"></i></span>
                        <span class="txt-link">Configurações</span>
                    </a>
        </li>
    </ul>                     
</nav>  
    <scripy src=menu.js> </scripy>       -->   



   <!--  <main class="cards">
        <section class="card">
            <div class="icon">           
            <img src="img/livro.png" alt="livro">
    </div>
            <h3>Se desenvolva.</h3>
            <span>Aqui vamos te desenvover todos os dias.</span>
            <button>Comece</button>
        </section>

        <section class="card">
        <div class="icon"> 
            <img src="img/progresso.png" alt="progresso">
            </div>
            <h3>Veja seu progresso.</h3>
            <span>Além de aprender você terá um guia prático sobre seu desempenho.</span>
            <button>Veja</button>
        </section>

        <section class="card">
        <div class="icon"> 
            <img src="img/parque.png" alt="parque">
            </div>
            <h3>Aprenda de onde quiser.</h3>
            <span>Nossa plataforma é flexível, asssim facilita seus estudos.</span>
            <button>Aprenda</button>
        </section>

<body>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Outfit', sans-serif;
}

body {
height: 900vh;
background-image: url('img/matinhos.png'); /* Substitua pelo caminho da sua imagem */
background-size: cover; /* Garante que a imagem cubra toda a área do body */
background-position: center; /* Centraliza a imagem */
background-repeat: no-repeat; 
margin: 0; /* Remove margens padrão */
padding: 0; /* Remove preenchimento padrão */
height: 100vh;
background-attachment: fixed;

}

nav.menu-lateral {
width: 80px;
height: 100%;
background-color: #32CD32;
padding: 40px 0 40px 1%;
box-shadow: 3px 0 0 #000080;
position: fixed;
top: 0;
left: 0;
overflow: hidden;
transition: .5s;

}


nav.menu-lateral.expandir {
    width: 300px;

}

.btn-expandir {
    width: 100%;
    padding-left: 10px;
}

.btn-expandir > i{
    color: #fff;
    font-size: 24px;
    cursor: pointer;
}

ul {
    height: 100%;
    list-style-type: none;
}

ul li.item-menu {
    transition: .2s;

}

ul li.ativo {
    background-color: #000080;
}

ul li.item-menu:hover a {
    background: #000080;
}

ul li.item-menu a{
    color: #000;
    text-decoration: none;
    font-size:  20px;
    padding: 20px 4%;
    display: flex;
    margin-bottom: 20px;
    line-height: 40px;
}

ul li.item-menu a .txt-link {
    margin-left: 70px;
    transition: .5s;
    opacity: 0;
}




nav.menu-lateral.expandir .txt-link {
    margin-left: 40px;
    opacity: 1;


}

ul li.item-menu a .icon > i{
    font-size: 30px;
    margin-left: 10px;

}

.container {
text-align: center; /* Centraliza horizontalmente dentro do container */


}

.centro-horizontal {
display: block; /* Para aplicar margens automáticas */
margin-left: auto; /* Margem à esquerda automática */
margin-right: auto; /* Margem à direita automática */
}

main {
background-color: white;
font-size: 5e;
margin: 2%;
padding: 0;
text-align: center;
position: absolute;
top: 41%;
left: 75%;
border: 1px solid #000080;
border-radius: 15px;

}

.logo-container {
    text-align: center;
}

.logo-container img {
    max-width: 40%;
    height: auto;
}

.text-center {
    text-align: center;
}

    
 .container {
    width: 100%;
    display: flex;
    justify-content: center;

}
.card {
  width: 300px;
  height: 460px;
  margin: 25px;
  background-color: #fff;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.7);
  transition: 0.3s;
}

/* Card Header*/
.card-header {
  width: 100%;
  height: 200px;
  overflow: hidden;
  display: flex;

  
}

.card-img {
  min-width: 60%;
  width: auto;
  height: 100%;
 
}

/* Card Body */
.card-body {
  height: 170px;
  padding: 15px;
  text-align: center;
  font-family: sans-serif;
}

.card-local {
  font-size: 20px;
  margin: 10px 0;
}

.card-titulo {
  font-size: 32px;
  margin: 15px 0;
}

.card-texto {
  font-size: 12px;
  width: 250px;
  margin: 0 auto;
}

/* Card Footer */
.card-footer {
  margin-top: 10px;
  text-align: center;
  background-color: #000;
}

.card-footer a {
  color: #fff;
  display: block;
  padding: 16px;
  text-decoration: none;
  font-family: sans-serif;
  font-weight: 600;
}

/* Cores Cards */
.card-1 .card-footer {
  background-color: #2740d1;
}

.card-1 .card-local {
  color: #2740d1;
}

.card-2 .card-footer {
  background-color: #d12761;
}

.card-2 .card-local {
  color: #d12761;
}

.card-3 .card-footer {
  background-color: #00c702;
}

.card-3 .card-local {
  color: #00c702;
}

/* Animação Hover */
.card:hover {
  transform: scale3d(1.1, 1.1, 1);
}

.bloco-descricao {
    background: white;
    padding:  10px;
    width: 350px;
   
    }
      
</style>
</head>

        
<div class="logo-container">

        <img src="img/mega W sem Fundo.png" alt="Minha Logo">      
    </div>

    

    <div class="container">
            
        <nav class="menu-lateral">          
        <div class="btn-expandir">
        <i class="bi bi-list" id="btn-exp"></i>
        </div>

            <ul>
                <li class="item-menu ativo">
                    <a href="#">
                        
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="txt-link">Inicio</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#">
                        <span class="icon"><i class="bi bi-camera-reels"></i></span>
                        <span class="txt-link">Aulas</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#">
                        <span class="icon"><i class="bi bi-person-vcard"></i></span>
                        <span class="txt-link">Perfil</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#">
                        <span class="icon"><i class="bi bi-question-octagon"></i></span>
                        <span class="txt-link">Ajuda</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#">
                        <span class="icon"><i class="bi bi-tools"></i></span>
                        <span class="txt-link">Configurações</span>
                    </a>
          </div>
        </li>
    </ul>                     
</nav>              

<script src=menu.js> </script> 

?php

if (!isset($_GET) || empty($_GET))

{
  if (headers_sent()){ 
    die('<script type="text/javascript">window.location="cursos.php;</script‌​>');
   }else{
     header('Location: cursos.php'); die(); 
    }

}

 include('config.php'); 
$sql = "SELECT * FROM cursos WHERE id = " . $_GET["id"]; 
$res = $conn->query($sql) or die($conn->error);
$row = $res->fetch_object();

 ?>

<div class="text-center">

    <br><h2>Trabalho em equipe</h2> <br>

    </div>

<div class="container">
 
<iframe width="560" height="315" frameborder="0" allowfullscreen
 src="https://youtube.com/embed/NVGDN29LiuU"> 
 
</iframe>

    
   <div class="bloco-descricao">  ?=$row["titulo"]?>
        ?=$row["descricao"]?>

        </div>
      </div>
    </body>
</html>
