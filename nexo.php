<?php
require("clases/materiales.php");

if(isset($_POST["accion"]))
{
    if($_POST["accion"]=="botonesagrega")
    {
        include("botonesagregar.php");
    }
    elseif($_POST["accion"]=="botonesmodifica")
    {
        include("botonesmodificar.php");
    }
    elseif($_POST["accion"]=="TablaMateriales")
    {
        echo(Materiales::TablaMateriales());
    }
}