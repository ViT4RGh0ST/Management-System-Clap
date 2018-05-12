<?php include '../inc/header.php'; ?>
    
    <main>
        <?php include '../inc/sidenav.php'; ?>
        <div class="inner-main">
            <aside id="left-side-menu">
                <ul class="collapsible collapsible-accordion">
                    <li class="no-padding">
                        <a href="#" class="waves-effect waves-grey ">
                            <i class="material-icons">assignment</i>Historial de Pagos
                        </a>
                    </li>
                    <li class="no-padding active">
                    <a href="fondos.html" class="waves-effect waves-grey">
                        <i class="material-icons">attach_money</i>Fondos
                    </a>
                </li>
                </ul>
            </aside>
            <article>
                <div class="conten-body">
                    <div class="card-panel">
                        <div class="card-title">
                            <div class="row">
                                <div class="header-title-left col s12">
                                    <h5>Saldo actual
                                        <span class="chip clap white-text amount">Bs. 0,00</span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <p>Para verificar tu pago debes subir el comprobante de la transferencia</p>
                        <form action="#">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Archivo</span>
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Seleccione un archivo PDF, JPG o PNG">
                                </div>

                            </div>
                            <button class="btn waves-effect waves-light right" type="submit" name="action">Enviar
                                <i class="material-icons right">send</i>
                            </button>
                        </form>
                    </div>
                    
                </div>
            </article>
            
        </div>
        <div class="clearfix"></div>
    </main>
</body>


    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>




    <script>
        $(document).ready(function () {
            $('.button-collapse').sideNav();
        });
    </script>
    

    

<div class="hiddendiv common"></div><div class="drag-target" data-sidenav="mobile-menu" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div></body></html>