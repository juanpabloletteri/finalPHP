<?php
session_start();
require("clases/materiales.php");
require("clases/usuarios.php");

if(isset($_POST["accion"]))
{
    if($_POST["accion"]=="botonesagrega")
    {
        include("botonesagregar.php");
    }
    else if($_POST["accion"]=="botonesmodifica")
    {
        include("botonesmodificar.php");
    }
    /*else if($_POST["accion"]=="TablaMateriales")
    {
        echo(Materiales::TablaMateriales());
    }*/
    else if($_POST["accion"]=="login")
    {
        include("login.php");
    } 
    /*else if($_POST["accion"]=="AgregarMaterial")
    {
        Materiales::AgregarMaterial($_POST["nombre"], $_POST["precio"], $_POST["tipo"]);
    }
    else if($_POST["accion"]=="EliminarMaterial")
    {
        Materiales::EliminarMaterial($_POST["id"]);
    }*/
    else if($_POST["accion"]=="ModificarMaterial")
    {
        echo(Materiales::TraerUnMaterial($_POST["id"]));
    }
    /*else if($_POST["accion"]=="AceptarModificacion")
    {
        echo(Materiales::AceptarModificacion($_POST["nombre"], $_POST["precio"], $_POST["tipo"], $_POST["codigo"]));
    }*/
    else if($_POST["accion"]=="ingresar")
    {
        echo(Usuario::BuscarUsuario($_POST['mail'], $_POST['password']));
    }
    else if($_POST["accion"]=="tablausuarios")
    {
        echo(Usuario::TablaUsuarios());
    }
    else if($_POST["accion"]=="asignarusuario")
    {
        $_SESSION['mail']=$_POST['mail'];
        $_SESSION['password']=$_POST['password'];
        $_SESSION['tipo']=$_POST['tipo'];
        setcookie("ultimo", $_POST['mail'], time() + 3600);
    }
    else if($_POST["accion"]=="navbar")
    {
        include("navbar.php");
    }
    else if($_POST["accion"]=="cerrarsesion")
    {
        session_unset();
		session_destroy();
        echo($_COOKIE['ultimo']);
    }
    else if($_POST["accion"]=="borrarcookie")
    {
        setcookie("ultimo", "", -1);
    echo("Cookie eliminada exitosamente");
    } 
}