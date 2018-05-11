<?php
require_once '../app/validacionAdmin.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
            <meta content="initial-scale=1.0, user-scalable=no" name="viewport"/>
            <title>
                Rutas
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
                                <i class="large material-icons">
                                    directions_bus
                                </i>Registro de la flota vehicular
                            </a>
                        </li>
                        <li class="NavLateralDivider">
                        </li>
                        <li>
                            <a class="waves-effect waves-light" href="#">
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
                            <a class="waves-effect waves-light" href="#">
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
                        Rutas
                    </span>
                    <p>
                        Seleccione una opcion:
                    </p>
                </div>
                <div class="card-action">
                    <a class="waves-effect waves-light btn modal-trigger green accent-4" href="#asignarruta">
                        Asignar Rutas<i class="material-icons right">person_pin_circle</i>
                    </a>
                    <a class="waves-effect waves-light btn modal-trigger light-blue accent-4" href="#verRuta">
                        Ver Rutas en Curso<i class="material-icons right">gps_fixed</i>
                    </a>
                <div class="modal" id="asignarruta">
                    <div class="modal-content">
                        <h4>
                            Asignar Ruta:
                        </h4>
                        <h6><b>Nota:</b>&nbsp;&nbsp;Agregue la carga a transportar.</h6>
                        <p>
                            <form action="" method="POST">
                                <div class="center-align">
                <a class="waves-effect waves-light btn modal-trigger grey darken-1 pulse" href="#carga">
                        Asignar Carga<i class="material-icons right">assignment</i>
                    </a>
                            </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">assignment</i>
                                    <input name="nCarga" type="text" disabled>
                                        <label for="nCarga">
                                            Cod. Carga
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">account_box</i>
                                    <input name="codCliente" type="text" disabled>
                                        <label for="codCliente">Cliente</label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">assignment_ind</i>
                                    <input name="codMotorista" type="text" disabled>
                                <label for="codMotorista">Motorista</label>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">event</i>
                                    <input name="fSalida" class="datepicker" type="text" disabled>
                                        <label for="fSalida">
                                            Fecha Salida
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">call_to_action</i>
                                    <input name="fEntrega" type="text" disabled>
                                        <label for="fEntrega">
                                            Fecha Entrega
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">timelapse</i>
                                    <input name="hSalida" type="text" disabled>
                                        <label for="hSalida">
                                            Hora Salida
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">timer</i>
                                    <input name="hEntrega" type="text" disabled>
                                        <label for="hEntrega">
                                            Hora Entrega
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">call</i>
                                    <input name="" type="text" disabled>
                                        <label for="hEntrega">
                                            Hora Entrega
                                        </label>
                                    </input>
                                </div>
                                <div class="center-align">
                                <button class="btn waves-effect waves-light center green accent-4" name="AgregarMotorista" type="submit" disabled>
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
                </div>
                <div class="modal" id="carga">
                    <div class="modal-content">
                        <h4>
                            Asignar Carga:
                        </h4>
                        <p>
                            <form action="" method="POST">
                                <div class="input-field">
                                    <i class="material-icons prefix">receipt</i>
                                    <input name="nomProducto" type="text">
                                        <label for="user">Nombre del Producto</label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">line_style</i>
                                    <textarea id="descripcion" class="materialize-textarea"></textarea>
                                    <label for="descripcion">Descripcion</label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">aspect_ratio</i>
                                    <input name="tamanio" type="text">
                                        <label for="tamanio">
                                            Tamaño
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">fitness_center</i>
                                    <input name="peso" type="text">
                                        <label for="peso">
                                            Peso
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">widgets</i>
                                    <input name="material" type="text">
                                        <label for="material">
                                            Material
                                        </label>
                                    </input>
                                </div>
                                <div class="center-align">
                                <button class="btn waves-effect waves-light center grey darken-1" name="asignarCarga" type="submit">
                                    Asignar<i class="material-icons right">assignment</i>
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
                </div>
                <div class="modal" id="modificar">
                    <div class="modal-content">
                        <h4>
                            Modificar datos de Motorista:
                        </h4>
                        <p>
                            <form action="" method="POST">
                                <h6>Ingrese nombre para buscar motorista:</h6>
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
                                        <label for="nombre">Nombres</label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">account_box</i>
                                    <input name="apellido" type="text" disabled>
                                        <label for="apellido">
                                            Apellidos
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">payment</i>
                                    <input name="licencia" type="text" disabled>
                                        <label for="licencia">
                                            Licencia
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">call_to_action</i>
                                    <input name="dui" type="text" disabled>
                                        <label for="dui">
                                            DUI
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">event</i>
                                    <input name="edad" type="text" disabled>
                                        <label for="edad">
                                            Edad
                                        </label>
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
                                <div class="center-align"> 
                                <button class="btn waves-effect waves-light light-blue accent-4" name="ModificarVehiculo" type="submit">
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
                            Eliminar Motorista:
                        </h4>
                        <p>
                            <form action="" method="POST">
                                <h6>Ingrese nombre para buscar motorista:</h6>
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
                                        <label for="nombre">Nombres</label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">account_box</i>
                                    <input name="apellido" type="text" disabled>
                                        <label for="apellido">
                                            Apellidos
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">payment</i>
                                    <input name="licencia" type="text" disabled>
                                        <label for="licencia">
                                            Licencia
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">call_to_action</i>
                                    <input name="dui" type="text" disabled>
                                        <label for="dui">
                                            DUI
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">event</i>
                                    <input name="edad" type="text" disabled>
                                        <label for="edad">
                                            Edad
                                        </label>
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
                                <div class="center-align"> 
                                <button class="btn waves-effect waves-light red accent-4" name="EliminarVehiculo" type="submit">
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
                            Buscar Motorista
                        </h4>
                        <p>
                            <form action="" method="POST">
                                <h6>Ingrese nombre para buscar motorista:</h6>
                                <div class="input-field">
                                    <i class="material-icons prefix">find_replace</i>
                                    <input name="nombreBuscar" type="text" autofocus>
                                        <label for="nombreBuscar">
                                            Buscar
                                        </label>
                                    </input>
                                </div>
                                <div class="center-align"> 
                                <button class="btn waves-effect waves-light lime darken-4" name="BuscarVehiculo" type="submit">
                                    Buscar<i class="material-icons right">find_in_page</i>
                                </button>
                            </div>
                            </form>
            <div class="container" style="margin-bottom: 1px;">
            <div class="row">
                <h5 class="center-align">Informacion del Motorista</h5>
                <div class="col s12">
                    <table class="responsive-table">
                        <thead>
                            <tr>
                                <th data-field="nombre"">Nombres</th>
                                <th data-field="apellido">Apellidos</th>
                                <th data-field="licencia">Licencia</th>
                                <th data-field="dui">DUI</th>
                                <th data-field="telefono">Telefono</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Carlos Alexander</td>
                                <td>Martinez Lopez</td>
                                <td>1232141-1</td>
                                <td>123567-3</td>
                                <td>2345-6789</td>
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