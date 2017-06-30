<?php
//require("tabla.php");

if(isset($_POST["accion"]))
{
    if($_POST["accion"]="dibujarbotones")
    {
        include("botones.php");
    }
}