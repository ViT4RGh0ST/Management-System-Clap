<?php include '../inc/header.php'; ?>

    <main>
        <?php include '../inc/sidenav.php'; ?>
        <div class="inner-main">
            <aside id="left-side-menu">
                <ul class="collapsible collapsible-accordion">
                    <li class="no-padding  active">
                    <a href="#" class="waves-effect waves-grey ">
                        <i class="material-icons">dehaze</i>Noticias
                    </a>
                </li>
                <li class="no-padding ">
                    <a href="#" class="waves-effect waves-grey">
                        <i class="material-icons">question_answer</i>Encuesta CLAP
                    </a>
                </li>
                </ul>
            </aside>
            <article>
                <div class="conten-body">
                    <div class="card-panel">
                            <div class="card-title">
                                <div class="row">
                                    <div class="header-title-left col s12 m6">
                                        <h5>Encuesta CLAP</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                                        ¿Recibió usted la caja <b>CLAP de ayer</b>?
                                    </div>
                                </div>
                            </div>
                            <div class="row row-end">
                                <div class="col s12">
                                    <a title="Si recibí la caja o bolsa de CLAP" class="btn btn-first" href="#">SI</a>
                                    <a title="No recibí la caja o bolsa de CLAP" class="btn grey" href="#">NO</a>
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




    <script>
        $(document).ready(function () {
            $('.button-collapse').sideNav();
        });
    </script>
    

    

<div class="hiddendiv common"></div><div class="drag-target" data-sidenav="mobile-menu" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div></body></html>