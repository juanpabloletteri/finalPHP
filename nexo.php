<?php
require("clases/materiales.php");

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
    else if($_POST["accion"]=="TablaMateriales")
    {
        echo(Materiales::TablaMateriales());
    }
    else if($_POST["accion"]=="login")
    {
        include("login.php");
    } 
    else if($_POST["accion"]=="AgregarMaterial")
    {
        Materiales::AgregarMaterial($_POST["nombre"], $_POST["precio"], $_POST["tipo"]);
    }
    else if($_POST["accion"]=="EliminarMaterial")
    {
        Materiales::EliminarMaterial($_POST["id"]);
    }
    else if($_POST["accion"]=="ModificarMaterial")
    {
        echo(Materiales::TraerUnMaterial($_POST["id"]));
    }
    else if($_POST["accion"]=="AceptarModificacion")
    {
        echo(Materiales::AceptarModificacion($_POST["nombre"], $_POST["precio"], $_POST["tipo"], $_POST["codigo"]));
    }
}