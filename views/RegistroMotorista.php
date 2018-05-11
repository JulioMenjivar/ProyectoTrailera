<?php 
    require_once '../app/validacionAdmin.php';
    require_once "../controller/usuarioController.php";
 ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
            <meta content="initial-scale=1.0, user-scalable=no" name="viewport"/>
            <title>
                Registro de Motorista
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
                        <script type="text/javascript" src="../resources/js/motorista.js"></script>

                        <link rel="stylesheet" type="text/css" href="../pluggins/dataTable/material.min.css">
                        <link rel="stylesheet" type="text/css" href="../pluggins/dataTable/dataTables.material.min.css">
                        <script type="text/javascript" src="../pluggins/dataTable/jquery.dataTables.min.js"></script>
                        <script type="text/javascript" src="../pluggins/dataTable/dataTables.material.min.js"></script>

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
                            <span class="ContentPage-Nav-indicator bg-danger" id="numNotifica">
                                
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Notifications area -->
            <!-- Notifications area -->
            <!-- Notifications area -->
            <section class="z-depth-3 NotificationArea">
                <div class="full-width center-align NotificationArea-title">
                    Notifications
                    <i class="zmdi zmdi-close btn-Notification">
                    </i>
                </div>
                <?php $idUsuarioLog = $_SESSION['id']; ?>
                <input type="hidden" name="idUsuarioLog" id="idUsuarioLog" value='<?php echo $idUsuarioLog; ?>'>
                <div id="AreaDeNotifi">
                    
                </div>
            </section>
            <!-- FIN Notifications area -->
            <!-- FIN Notifications area -->
            <!-- FIN Notifications area -->


            <!-- Your code here -->
            <div class="row">
        <div class="col s12">
            <div class="card grey darken-3">
                <div class="card-content white-text">
                    <span class="card-title">
                        Registro de Motoristas
                    </span>
                    <p>
                        Seleccione una opcion:
                    </p>
                </div>
                <div class="card-action">
                    <a class="waves-effect waves-light btn modal-trigger green accent-4" id="nuevoMotorista" href="#agregar">
                        Agregar<i class="material-icons right">add</i>
                    </a>
                    <a class="waves-effect waves-light btn modal-trigger lime darken-4" href="#buscar">
                        Buscar<i class="material-icons right">find_in_page</i>
                    </a>
                    <a class="waves-effect waves-light btn modal-trigger teal accent-4" href="PDFs/rptMotorista.php" target="_blank">
                        Reporte<i class="material-icons right">assignment</i></a>



                   <div class="modal" id="agregar">
                    <div class="modal-content">
                        <h4>
                            Agregar Motorista:
                        </h4>
                       
                        <p>
                            <form action="../controller/usuarioController.php" method="POST">
                                <div class="input-field">
                                    <i class="material-icons prefix">account_box</i>
                                    <input name="nombre" type="text" required>
                                        <label for="nombre">Nombres</label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">account_box</i>
                                    <input name="apellido" type="text" required>
                                        <label for="apellido">
                                            Apellidos
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">payment</i>
                                    <input name="licencia" type="text" required>
                                        <label for="licencia">
                                            Licencia
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">call_to_action</i>
                                    <input name="dui" type="text"  pattern="([0-9]{8})([-]?)([0-9]{1})" placeholder="00000000-0" required>
                                        <label for="dui">
                                            DUI
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">event</i>
                                    <input name="edad" type="number" min="18" max="99"  pattern="[0-9]{2}" required>
                                        <label for="edad">
                                            Edad
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">call</i>
                                    <input name="telefono" type="text" required>
                                        <label for="telefono">
                                            Telefono
                                        </label>
                                    </input>
                                </div>
                                <center>
                                    <h4>!Debe crear un usuario antes!</h4>
                                </center>
                                  <div class="center-align">
                                        <a class="waves-effect waves-light btn modal-trigger green accent-4 pulse" href="#CrearUsuario">
                                    Crear Usuario<i class="material-icons right">account_circle</i>
                                </a>
                            </div>
                             <br> 
                                
                            <!--</form>-->
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a class="modal-action modal-close waves-effect waves-green btn-flat" href="#">
                            Cancelar
                    </a>
                </div>
                    </div>
                </div>
                <div class="modal" id="CrearUsuario">
                    <div class="modal-content">
                        <h4>
                            Crear Usuario:
                        </h4>
                        <p>
                            <!--<form action="" method="POST">-->
                                <div class="input-field">
                                    <i class="material-icons prefix">account_box</i>
                                    <input name="user" type="text" required>
                                        <label for="user">Usuario</label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">https</i>
                                    <input name="pass" type="password" required>
                                        <label for="pass">
                                            Contraseña
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">https</i>
                                    <input name="pass2" type="password" required>
                                        <label for="pass2">
                                            Repetir Contraseña
                                        </label>
                                    </input>
                                </div>
                                <div class="center-align">
                                <button class="btn waves-effect waves-light center green accent-4" name="AgregarMotorista" type="submit" >
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
                                <button class="btn waves-effect waves-light lime darken-4" name="BuscarMotorista" type="submit">
                                    Buscar<i class="material-icons right">find_in_page</i>
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
        </div>
    </div>

    <div id="modal2" class="modal fade" style="">
        <div style="background-color: #333; padding: 10px; color: orange; font-size: 20px">
            <a class="modal-action modal-close btn-flat" href="#" style="float:right; color: orange;">
                X
            </a>
            <b>
                Modificar datos de Motorista:
            </b>
            
        </div>
    <div class="modal-content"> 
                        <p>
                           <div id="modificarMotoristaEdit">
                                <div class="input-field">
                                    <i class="material-icons prefix">account_box</i>
                                    <input type="hidden" name="id" id="idEdit">
                                    <input name="nombresEdit" type="text" id="nombresEdit" required>
                                        
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">account_box</i>
                                    <input name="apellido" type="text" id="apellidosEdit" required>
                                        
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">payment</i>
                                    <input name="licencia" type="text" id="licenciaEdit" required>
                                        <label for="licencia">
                                            Licencia
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">call_to_action</i>
                                    <input name="dui" type="text" id="duiEdit" required>
                                        <label for="dui">
                                            DUI
                                        </label>
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">event</i>
                                    <input name="edad" type="number" id="edadEdit" required>
                                       
                                    </input>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">call</i>
                                    <input name="telefono" type="text" id="telefonoEdit" required>
                                        <label for="telefono">
                                            Telefono
                                        </label>
                                    </input>
                                </div>
                                <div class="center-align"> 
                                <input type="button" class="btn" name="btnModificarEdit" id="btnModificarEdit" value="Modificar">

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

            <div class="row">
                <div class="col s12">
                    <div class="card grey darken-3">
                      <a href="RegistroMotorista.php" class="btn waves-effect waves-light lime darken-4" name="retorno">TODO</a>
                           <table id="listadoUsuarios" class="mdl-data-table" cellspacing="1" width="100%">
                                <thead>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Licencia</th>
                                    <th>Estado</th>
                                </thead>
                                <tbody>
                                    <form action="../x2.php" method="POST">
                                        
                                    
                                    <?php 

                                    $objUser = new Usuario();

                                    if (isset($_POST['retorno'])) {
                                       $data = $objUser->getAll();
                                    }
                                    else{
                                         if (isset($_POST['BuscarMotorista'])) {
                                            $nombress = $_POST['nombreBuscar'];
                                            $data = $objUser->getOne($nombress);
                                        }
                                        else{
                                           $data = $objUser->getAll();
                                        }
                                    }
                                  
                                    $est = "";
                                    $color = "";

                                    if ($data!=null) {
                                        foreach ($data as $value) {

                                        if($value['cod_estado'] == '1'){
                                            $est = "Disponible";
                                            $color = "green";
                                        }
                                        else{
                                            $est = "Ocupado";
                                            $color = "red";
                                        }

                                        echo "<tr>
                                                <td>".$value['cod_motorista']."</td>
                                                <td>".$value['nombres']."</td>
                                                <td>".$value['apellidos']."</td>
                                                <td>".$value['licencia']."</td>
                                                <td style='color: ".$color.";'><b>".$est."</b></td>
                                                <td>
                                                <input type='button' class='btn blue editarMotorista' id='".$value['id']."' value='Modificar' href='#modalModificacionUsuario'>
                                                <input type='button' class=' btn red eliminarUsuario' id='".$value['id']."' value='Eliminar'>
                                            </tr>";
                                    }

                                    }
                                    else{
                                        //en caso que no exista el motorista
                                    }

                                    
                                     ?>
                                     </form>
                                </tbody>

                            </table>
                    </div>
                 </div>
            </div>

            <!-- Footer -->
            
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