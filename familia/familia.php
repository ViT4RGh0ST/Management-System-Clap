<?php include '../inc/header.php'; ?>

    <main>
       <?php include '../inc/sidenav.php'; ?>
        <div class="inner-main">
            <aside id="left-side-menu">
                <ul class="collapsible collapsible-accordion">
                    <li class="no-padding active">
                        <a href="familias.html" class="waves-effect waves-grey ">
                            <i class="material-icons">assignment</i>Familias
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
                                    <h5>Familia</h5>
                                </div>
                                <div id="new-member-select" class="header-title-left col s12 m6 hide-on-small-only" style="text-align: right">
                                    <a title="Agregar nuevo familiar" class="dropdown-button btn" href="#" data-activates="familyadd">
                                        Agregar <i class="material-icons right">arrow_drop_down</i>
                                    </a>
                                    <ul id="familyadd" class="dropdown-content">
                                        <li>
                                            <a title="Agregar familiar cedulado" href="familiares/cedulado.html" class="add-url modal-trigger" href="#cedulado">Cedulado</a>
                                        </li>
                                        <li>
                                            <a title="Agregar familiar no cedulado" href="familiares/nocedulado.html" class="add-url modal-trigger" href="#nocedulado">Sin Cedula</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row row-end">
                            <div class="col s12">
                                <div id="familiar_table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="top"></div>
                                    <table id="familiar_table" class="bordered table-responsive dataTable no-footer" role="grid">
                                        <thead>
                                            <tr>
                                                <th class="hide-on-small-only">Cédula</th>
                                                <th>Nombre(s) y Apellidos</th>
                                                <th class="hide-on-small-only sorting">Parentesco</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="hide-on-small-only sorting_1">V-12526401</td>
                                                <td class="uppercase">Rosa Coromoto Meltrona Troso</td>
                                                <td class="hide-on-small-only">Madre</td>
                                                <td class="adjusted-size">
                                                <a title="editar" href="#"><i class="tyni material-icons">edit</i></a>
                                                <a title="Eliminar" href="#"><i class="tyni material-icons">delete</i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="hide-on-small-only sorting_1">V-24569878</td>
                                                <td class="uppercase">Petronila Sin Forosa Meltrona</td>
                                                <td class="hide-on-small-only">Hija</td>
                                                <td class="adjusted-size">
                                                <a title="editar" href="#"><i class="tyni material-icons">edit</i></a>
                                                <a title="Eliminar" href="#"><i class="tyni material-icons">delete</i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="hide-on-small-only sorting_1">V-31598789</td>
                                                <td class="uppercase">Esquirlo Ibraimovich Forosa Meltrona</td>
                                                <td class="hide-on-small-only">Hijo</td>
                                                <td class="adjusted-size">
                                                <a title="editar" href="#"><i class="tyni material-icons">edit</i></a>
                                                <a title="Eliminar" href="#"><i class="tyni material-icons">delete</i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="bottom">
                                        <div class="clear"></div>
                                    </div>
                                </div>
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