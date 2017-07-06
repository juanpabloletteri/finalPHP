
<?php

class Usuario
{
    public $mail;
    public $password;
    
    public static function BuscarUsuario($usuario, $pass)
    {
        $todos = file("usuarios.txt", FILE_IGNORE_NEW_LINES + FILE_SKIP_EMPTY_LINES);
        //var_dump($todos);

        foreach ($todos as $uno)
        {
            if ($uno==($usuario.",".$pass))
            {
                $fecha=date("Y-m-d H:i:s");
                $file=fopen("log.txt","a");
                fwrite($file,$usuario."   ".$fecha."\n");
                fclose($file);
                //return "MAIAMEEEE";
                return true;
            }
        }
            $fecha=date("Y-m-d H:i:s");
            $file=fopen("logFail.txt","a");
            fwrite($file,$usuario."   ".$pass."   ".$fecha."\n");
            fclose($file);
            return false;
            //return "AWAINTAAAA";

    }
}

