<?php 
    $directoryURI = $_SERVER['REQUEST_URI'];
    $path = parse_url($directoryURI);
    $archive = explode('/', $path['path'])[3];
    $ruta = explode('/', $path['path'])[2];
?>

<div class="side-nav fixed" id="mobile-menu">
    <ul id="actions-menu" class="collapsible collapsible-accordion">
        <li class="menu-header"></li>
        <li>
            <div class="user-view">
                <div class="background">
                    <img class="" src="../images/backgroundperfil.jpg">
                </div>
                <a href="#!user"><img class="circle" src="../images/perfil.png"></a>
                <a href="#!name"><span class="black-text name">John Doe</span></a>
                <a href="#!email"><span class="black-text email">correoelectronico@gmail.com</span></a>
            </div>
        </li>
        <?php if ($ruta=="pagos") {  ?>
    

        <li class="no-padding <?php if ($archive=="historial.php") {echo "active"; } else  {echo "noactive";}?>">
            <a href="historial.php" class="waves-effect waves-grey ">
                <i class="material-icons">assignment</i>Historial de Pagos
            </a>
        </li>

        <li class="no-padding <?php if ($archive=="pagar.php") {echo "active"; } else  {echo "noactive";}?>">
            <a href="pagar.php" class="waves-effect waves-grey">
                <i class="material-icons">payment</i>Realizar Pagos
            </a>
        </li>
        <?php } elseif ($ruta=="inicio") { ?>


    

        <li class="no-padding <?php if ($archive=="noticias.php") {echo "active"; } else  {echo "noactive";}?>">
            <a href="noticias.php" class="waves-effect waves-grey ">
               <i class="material-icons">dehaze</i>Noticias
            </a>
        </li>

        <li class="no-padding <?php if ($archive=="clap.php") {echo "active"; } else  {echo "noactive";}?>">
            <a href="clap.php" class="waves-effect waves-grey">
                <i class="material-icons">question_answer</i>CLAP
            </a>
        </li>
        <?php } elseif ($ruta=="familia") {?>

        <li class="no-padding <?php if ($archive=="familia.php") {echo "active"; } else  {echo "noactive";}?>">
            <a href="familia.php" class="waves-effect waves-grey ">
               <i class="material-icons">group</i>Familias
            </a>
        </li>

        <?php } ?>
    </ul>
</div>