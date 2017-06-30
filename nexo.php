<?php
require("clases/materiales.php");

if(isset($_POST["accion"]))
{
    if($_POST["accion"]=="dibujarbotones")
    {
        include("botones.php");
    }
    if($_POST["accion"]=="TablaMateriales")
    {
        echo(Materiales::TablaMateriales());
    }
}