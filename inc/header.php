<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Pagos - Historial</title>
    <link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/material-icons.css">
    <link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/fonts.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <?php 
        $directoryURI = $_SERVER['REQUEST_URI'];
        $path = parse_url($directoryURI);
        $ruta = explode('/', $path['path'])[2];
    ?>

    <header>
        <div id="main-menu" class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
                    <div class="container4">
                        <ul class="right">
                            <li>
                                <a class="dropdown-button-custom" href="javascript:void(0)" data-activates="dropdown1">
                                    <i class="material-icons left">perm_identity</i>
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                                <ul id="dropdown1" class="dropdown-content">
                                    <li><span>V-26895366</span></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Cambiar contraseña</a></li>
                                    <li><a href="#">Salir</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="right">
                            <li class="<?php if ($ruta=="inicio") {echo "active"; } else  {echo "noactive";}?>">
                                <a href="../inicio/noticias.php" title="Inicio">
                                    <i class="material-icons">dashboard</i>
                                    <span class="hide-on-small-only">Inicio</span>
                                </a>
                            </li>
                            <li class="<?php if ($ruta=="pagos") {echo "active"; } else  {echo "noactive";}?>">
                                <a href="../pagos/historial.php" title="Pagos">
                                    <i class="material-icons">monetization_on</i>
                                    <span class="hide-on-small-only">Pagos</span>
                                </a>
                            </li>
                                <li class="<?php if ($ruta=="familia") {echo "active"; } else  {echo "noactive";}?>">
                                    <a href="../familia/familia.php" title="Familia">
                                        <i class="material-icons">group</i>
                                        <span class="hide-on-small-only">Familia</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#" title="Perfil">
                                        <i class="material-icons">account_circle</i>
                                        <span class="hide-on-small-only">Perfil</span>
                                    </a>
                                </li>
                        </ul>
                        

                    </div>
                </div>
            </nav>
        </div>

        
    </header>