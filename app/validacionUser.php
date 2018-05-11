<?php
session_start(); 
if (isset($_SESSION['usuario'])) {
    if ($_SESSION['rol'] == 'Administrador') {
             header("Location:DashboardAdmin.php");
        }else if ($_SESSION['rol'] == 'Motorista') {
           
        }
}else{
        header("Location:../login.php");
}

?>