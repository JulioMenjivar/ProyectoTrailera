<?php
require_once '../app/validacionAdmin.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
            <meta content="initial-scale=1.0, user-scalable=no" name="viewport"/>
            <title>
                Registro de Clientes
            </title>
             <?php include_once '../src/header_v.php'; ?>

                        <!-- Sweet Alert JS -->
                        <script src="../resources/js/sweetalert.min.js">
                        </script>
                        <!-- jQuery -->
                        <script src="../pluggins/jquery-3.3.1.min.js">
                        </script>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js">
                        </script>
                        <script>
                            window.jQuery || document.write('<script src="../resourcesjs/jquery-2.2.0.min.js"><\/script>')
                        </script>
                        <!-- Materialize JS -->
                        <script src="../pluggins/materialize/js/materialize.js">
                        </script>
                        <!-- Malihu jQuery custom content scroller JS -->
                        <script src="../resources/js/jquery.mCustomScrollbar.concat.min.js">
                        </script>

                        <!-- MaterialDark JS -->
                        <script src="../resources/js/main1.js">
                        </script>
    
                <script>
                $(document).ready(function(){
                $('select').material_select();
                $(".button-collapse").sideNav();
                // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
                $('.modal').modal();
                  $('#modal1').modal('open');

                }
                );
            </script>
        </meta>
    </head>
    <body>
        <!-- Nav Lateral -->
        <section class="NavLateral full-width">
            <div class="NavLateral-FontMenu full-width ShowHideMenu">
            </div>
            <div class="NavLateral-content full-width">
                <header class="NavLateral-title full-width center-align red darken-4">
                    <a href="DashboardAdmin.php" class="white-text">Menu</a>
                    <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu">
                    </i>
                </header>
                <figure class="full-width NavLateral-logo red darken-4">
                    <img alt="material-logo" class="responsive-img center-box grey lighten-5" src="../resources/assets/img/logo1.png">
                        <figcaption class="center-align red darken-4">
                            Bienvenido Administrador
                        </figcaption>
                    </img>
                </figure>
                <div class="NavLateral-Nav">
                    <ul class="full-width">
                        <li>
                            <a class="waves-effect waves-light" href="RegistroVehicular.php">
                                <i class="large material-icons">directions_bus</i>Registro de la flota vehicular</a>
                        </li>
                        <li class="NavLateralDivider">
                        </li>
                        <li>
                            <a class="waves-effect waves-light" href="RegistroMotorista.php">
                                <i class="large material-icons">
                                    assignment_ind
                                </i>
                                Registro de motoristas
                            </a>
                        </li>
                        <li class="NavLateralDivider">
                        </li>
                        <li>
                            <a class="waves-effect waves-light" href="RegistroClientes.php">
                                <i class="large material-icons">folder_shared</i>
                                Informacion de Clientes
                            </a>
                        </li>
                        <li class="NavLateralDivider">
                        </li>
                        <li>
                            <a class="waves-effect waves-light" href="Rutas.php">
                                <i class="large material-icons">
                                    pin_drop
                                </i>
                                Rutas
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page content -->
        <section class="ContentPage full-width">
            <!-- Nav Info -->
          <div class="ContentPage-Nav full-width red darken-4">
                <ul class="full-width">
                    <li class="btn-MobileMenu ShowHideMenu">
                        <a class="tooltipped waves-effect waves-light" data-delay="50" data-position="bottom" data-tooltip="Menu" href="#">
                            <i class="zmdi zmdi-more-vert">
                            </i>
                        </a>
                    </li>
                    <li>
                        <figure style="border-radius: 25px 25px 25px 25px; background-color: white; height: 50px;">
                            <img alt="UserImage" src="../resources/assets/img/logo1.png"/>
                        </figure>
                    </li>
                    <li style="margin-right: 5px;">
                        <b style="font-size: 20px;">
                        <?php print_r($_SESSION['usuario']); ?>
                        </b>
                    </li>
                    <li>
                        <a class="tooltipped waves-effect waves-light btn-ExitSystem" data-delay="50" data-position="bottom" data-tooltip="Logout" href="#">
                            <i class="zmdi zmdi-power">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a class="tooltipped waves-effect waves-light btn-Search" data-delay="50" data-position="bottom" data-tooltip="Search" href="#">
                            <i class="zmdi zmdi-search">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a class="tooltipped waves-effect waves-light btn-Notification" data-delay="50" data-position="bottom" data-tooltip="Notifications" href="#">
                            <i class="zmdi zmdi-notifications">
                            </i>
                            <span class="ContentPage-Nav-indicator bg-danger">
                                0
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Notifications area -->
            <section class="z-depth-3 NotificationArea">
                <div class="full-width center-align NotificationArea-title">
                    Notifications
                    <i class="zmdi zmdi-close btn-Notification">
                    </i>
                </div>
                <a class="waves-effect Notification" href="#">
                    <div class="Notification-icon">
                        <i class="zmdi zmdi-accounts-alt bg-info">
                        </i>
                    </div>
                    <div class="Notification-text">
                        <p>
                            <i class="zmdi zmdi-circle tooltipped" data-delay="50" data-position="left" data-tooltip="Notification as UnRead">
                            </i>
                            <strong>
                                New User Registration
                            </strong>
                            <br>
                                <small>
                                    Just Now
                                </small>
                            </br>
                        </p>
                    </div>
                </a>
                <a class="waves-effect Notification" href="#">
                    <div class="Notification-icon">
                        <i class="zmdi zmdi-cloud-download bg-primary">
                        </i>
                    </div>
                    <div class="Notification-text">
                        <p>
                            <i class="zmdi zmdi-circle-o tooltipped" data-delay="50" data-position="left" data-tooltip="Notification as Read">
                            </i>
                            <strong>
                                New Updates
                            </strong>
                            <br>
                                <small>
                                    30 Mins Ago
                                </small>
                            </br>
                        </p>
                    </div>
                </a>
                <a class="waves-effect Notification" href="#">
                    <div class="Notification-icon">
                        <i class="zmdi zmdi-upload bg-success">
                        </i>
                    </div>
                    <div class="Notification-text">
                        <p>
                            <i class="zmdi zmdi-circle tooltipped" data-delay="50" data-position="left" data-tooltip="Notification as UnRead">
                            </i>
                            <strong>
                                Archive uploaded
                            </strong>
                            <br>
                                <small>
                                    31 Mins Ago
                                </small>
                            </br>
                        </p>
                    </div>
                </a>
                <a class="waves-effect Notification" href="#">
                    <div class="Notification-icon">
                        <i class="zmdi zmdi-mail-send bg-danger">
                        </i>
                    </div>
                    <div class="Notification-text">
                        <p>
                            <i class="zmdi zmdi-circle-o tooltipped" data-delay="50" data-position="left" data-tooltip="Notification as Read">
                            </i>
                            <strong>
                                New Mail
                            </strong>
                            <br>
                                <small>
                                    37 Mins Ago
                                </small>
                            </br>
                        </p>
                    </div>
                </a>
                <a class="waves-effect Notification" href="#">
                    <div class="Notification-icon">
                        <i class="zmdi zmdi-folder bg-primary">
                        </i>
                    </div>
                    <div class="Notification-text">
                        <p>
                            <i class="zmdi zmdi-circle-o tooltipped" data-delay="50" data-position="left" data-tooltip="Notification as Read">
                            </i>
                            <strong>
                                Folder delete
                            </strong>
                            <br>
                                <small>
                                    1 hours Ago
                                </small>
                            </br>
                        </p>
                    </div>
                </a>
            </section>
            <!-- Your code here -->
            <div class="row">
        <div class="col s12">
            <div class="card grey darken-3">
                <div class="card-content white-text">
                    <span class="card-title">
                        Registro de Clientes
                    </span>
                    <p>
                        Seleccione una opcion:
                    </p>
                </div>
                <div class="card-action">
                    <a class="waves-effect waves-light btn modal-trigger green accent-4" href="#agregar">
                        Agregar<i class="material-icons right">add</i>
                    </a>
                    <a class="waves-effect waves-light btn modal-trigger light-blue accent-4" href="#modificar">
                        Modificar<i class="material-icons right">border_color</i>
                    </a>
                    <a class="waves-effect waves-light btn modal-trigger red accent-4" href="#eliminar">
                        Eliminar<i class="material-icons right">clear</i>
                    </a>
                    <a class="waves-effect waves-light btn modal-trigger lime darken-4" href="#buscar">
                        Buscar<i class="material-icons right">find_in_page</i>
                    </a>
                    <a class="waves-effect waves-light btn modal-trigger teal accent-4" href="#reporte">
                        Reporte<i class="material-icons right">assignment</i>
                    </a>
                </div>
                <div class="modal" id="agregar">
                    <div class="modal-content">
                        <h4>
                            Agregar Cliente:
                        </h4>
                        <p>
                            <form action="" method="POST">
                                <div class="input-field">
                                    <i class="material-icons prefix">account_box</i>
                                    <input name="nombre" type="text">
                                        <label for="nombre">Nombre</label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">call</i>
                                    <input name="telefono" type="text">
                                        <label for="telefono">
                                            Telefono
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">add_location</i>
                                    <input name="direccion" type="text">
                                        <label for="direccion">
                                            Direccion
                                        </label>
                                    </input>
                                </div>
                                <div class="center-align">
                                <button class="btn waves-effect waves-light center green accent-4" name="AgregarCliente" type="submit">
                                    Agregar<i class="material-icons right">add</i>
                                </button>
                            </div>
                            </form>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a class="modal-action modal-close waves-effect waves-green btn-flat" href="#">
                            Cancelar
                        </a>
                    </div>
                </div>
                <div class="modal" id="modificar">
                    <div class="modal-content">
                        <h4>
                            Modificar datos del Cliente:
                        </h4>
                        <p>
                            <form action="" method="POST">
                                <h6>Ingrese nombre para buscar el cliente:</h6>
                                <div class="input-field">
                                    <i class="material-icons prefix">find_replace</i>
                                    <input name="nombreBuscar" type="text" autofocus>
                                        <label for="nombreBuscar">
                                            Buscar
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">account_box</i>
                                    <input name="nombre" type="text" disabled>
                                        <label for="nombre">Nombre</label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">call</i>
                                    <input name="telefono" type="text" disabled>
                                        <label for="telefono">
                                            Telefono
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">add_location</i>
                                    <input name="direccion" type="text" disabled>
                                        <label for="direccion">
                                            Direccion
                                        </label>
                                    </input>
                                </div>
                                <div class="center-align"> 
                                <button class="btn waves-effect waves-light light-blue accent-4" name="ModificarCliente" type="submit">
                                    Modificar<i class="material-icons right">border_color</i>
                                </button>
                            </div>
                            </form>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a class="modal-action modal-close waves-effect waves-green btn-flat" href="#">
                            Cancelar
                        </a>
                    </div>
                </div>
                <div class="modal" id="eliminar">
                    <div class="modal-content">
                        <h4>
                            Eliminar Cliente:
                        </h4>
                        <p>
                            <form action="" method="POST">
                                <h6>Ingrese nombre para buscar el cliente:</h6>
                                <div class="input-field">
                                    <i class="material-icons prefix">find_replace</i>
                                    <input name="nombreBuscar" type="text" autofocus>
                                        <label for="nombreBuscar">
                                            Buscar
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">account_box</i>
                                    <input name="nombre" type="text" disabled>
                                        <label for="nombre">Nombre</label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">call</i>
                                    <input name="telefono" type="text" disabled>
                                        <label for="telefono">
                                            Telefono
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">add_location</i>
                                    <input name="direccion" type="text" disabled>
                                        <label for="direccion">
                                            Direccion
                                        </label>
                                    </input>
                                </div>
                                <div class="center-align"> 
                                <button class="btn waves-effect waves-light red accent-4" name="EliminarCliente" type="submit">
                                    Eliminar<i class="material-icons right">clear</i>
                                </button>
                            </div>
                            </form>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a class="modal-action modal-close waves-effect waves-green btn-flat" href="#">
                            Cancelar
                        </a>
                    </div>
                </div>
                <div class="modal" id="buscar">
                    <div class="modal-content">
                        <h4>
                            Buscar Cliente
                        </h4>
                        <p>
                            <form action="" method="POST">
                                <h6>Ingrese nombre para buscar el cliente:</h6>
                                <div class="input-field">
                                    <i class="material-icons prefix">find_replace</i>
                                    <input name="nombreBuscar" type="text" autofocus>
                                        <label for="nombreBuscar">
                                            Buscar
                                        </label>
                                    </input>
                                </div>
                                <div class="center-align"> 
                                <button class="btn waves-effect waves-light lime darken-4" name="BuscarCliente" type="submit">
                                    Buscar<i class="material-icons right">find_in_page</i>
                                </button>
                            </div>
                            </form>
            <div class="container" style="margin-bottom: 1px;">
            <div class="row">
                <h5 class="center-align">Informacion del Cliente</h5>
                <div class="col s12">
                    <table class="responsive-table">
                        <thead>
                            <tr>
                                <th data-field="nombre">Nombre</th>
                                <th data-field="telefono">Telefono</th>
                                <th data-field="direccion">Direccion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Carlos</td>
                                <td>2345-7899</td>
                                <td>Santa Tecla</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a class="modal-action modal-close waves-effect waves-green btn-flat" href="#">
                            Cancelar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- Footer -->
            <br><br><br><br><br>
            <footer class="footer-MaterialDark">
                <div class="container">
                    <div class="row">
                        <div class="col l6 s12">
                            <h5 class="white-text">
                                Pie de Pagina
                            </h5>
                            <p class="grey-text text-lighten-4">
                                Proyeto ITCA La Trailera
                                <br>
                                    
                                </br>
                            </p>
                        </div>
                        <div class="col l4 offset-l2 s12">
                            <h5 class="white-text">
                                Desarrolladores:
                            </h5>
                            <ul>
                                <li>
                                    <a class="grey-text text-lighten-3" href="http://materializecss.com/">
                                        Julio Cesar
                                    </a>
                                </li>
                                <li>
                                    <a class="grey-text text-lighten-3" href="http://zavoloklom.github.io/material-design-iconic-font/icons.html">
                                        Edwin Ernesto
                                    </a>
                                </li>
                                <li>
                                    <a class="grey-text text-lighten-3" href="http://t4t5.github.io/sweetalert/">
                                        Miguel Alexander
                                    </a>
                                </li>
                                <li>
                                    <a class="grey-text text-lighten-3" href="http://manos.malihu.gr/jquery-custom-content-scroller/">
                                        Google Maps API
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="NavLateralDivider">
                </div>
                <div class="footer-copyright">
                    <div class="container center-align">
                        © 2016 ITCA FEPADE
                    </div>
                </div>
            </footer>
        </section>
    </body>
</html>