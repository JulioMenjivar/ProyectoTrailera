<?php
session_start(); 
if (isset($_SESSION['usuario'])) {
    if ($_SESSION['rol'] == 'Administrador') {

        }else if ($_SESSION['rol'] == 'Motorista') {
            header("Location:DashboardUser.php");
        }
}else{
        header("Location:../login.php");
}

?>