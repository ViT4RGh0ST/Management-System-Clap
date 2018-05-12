<?php include '../inc/header.php'; ?>

    <main>
        <?php include '../inc/sidenav.php'; ?>

        <div class="inner-main">
            <aside id="left-side-menu">
                <ul class="collapsible collapsible-accordion">
                    <li class="no-padding active">
                    <a href="#" class="waves-effect waves-grey ">
                        <i class="material-icons">assignment</i>Historial de Pagos
                    </a>
                </li>
                <li class="no-padding">
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
                            <div class="row">
                                <table class="bordered highlight responsive-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Fecha</th>
                                            <th>Descripcion</th>
                                            <th>Monto</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>2018-03-17</td>
                                            <td>Pago de CLAP</td>
                                            <td>125.000 Bs.F</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>2018-03-07</td>
                                            <td>Pago de CLAP</td>
                                            <td>115.000 Bs.F</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>2018-02-17</td>
                                            <td>Pago de CLAP</td>
                                            <td>102.000 Bs.F</td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td>2018-02-07</td>
                                            <td>Pago de CLAP</td>
                                            <td>195.000 Bs.F</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
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