<nav class="menu-lateral">     
    <div class="btn-expandir">
        <i class="bi bi-list" id="btn-exp"></i>
    </div>

    <ul>
        <li class="item-menu ativo">
            <a href="dashboard.php">   
                <span class="icon"><i class="bi bi-house-door"></i></span>
                <span class="txt-link">Inicio</span>
            </a>
        </li>

        <li class="item-menu">
            <a href="cursos.php">
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

<?php
    if($_SESSION["admin"] == 1) {
?>
        <li class="item-menu">
            <a href="administrar.php">
                <span class="icon"><i class="bi bi-folder2-open"></i></span>
                <span class="txt-link">Administração</span>
            </a>
        </li>
<?php
    }
?>

        <li class="item-menu">
            <a href="logout.php">
                <span class="icon"><i class="bi bi-box-arrow-right"></i>
                <span class="txt-link">Sair</span>
            </a>
        </li>
    </ul> 
</nav>              

<script src=menu.js></script> 