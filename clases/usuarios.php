
<?php

class Usuario
{
    public $mail;
    public $password;
    
    public static function BuscarUsuario($mail, $pass)
    {
        $archivo = fopen("usuarios.txt", "r", FILE_IGNORE_NEW_LINES + FILE_SKIP_EMPTY_LINES);

        while(!feof($archivo))
		{
			$renglon=fgets($archivo);
			$persona=explode(",", $renglon);
            if($persona[0]==$mail && $persona[1]==$pass)
            {
                $coincidencia=array("mail"=>$persona[0], "password"=>$persona[1], "tipo"=>$persona[2]);
                $coincidencia=json_encode($coincidencia);
                return $coincidencia;
            }  
		}
        return "null";
    }
}

