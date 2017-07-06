
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

    public static function TablaUsuarios()
    {
        $archivo = fopen("usuarios.txt", "r", FILE_IGNORE_NEW_LINES + FILE_SKIP_EMPTY_LINES);
        $tabla="
        <script type='text/javascript' class='init'>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
        
        <div class='panel panel-success'>
        <div class='panel-heading'>TABLA DE USUARIOS</div>
        <div class='panel-body'>
                <table id='example' class='display' cellspacing='0' width='100%'>
                        <thead>
                            <tr>
                                <th>Mail</th>
                                <th>Password</th>
                                <th>Tipo</th>
                            </tr>
                        </thead>
                        <tbody>
        ";
        
        while(!feof($archivo))
		{
			$renglon=fgets($archivo);
			$persona=explode(",", $renglon);
                    $tabla.= " 	<tr>
                        <td>".$persona[0]."</td>
                        <td>".$persona[1]."</td>
                        <td>".$persona[2] ."</td>
                        </tr>";

		}
        return $tabla;
    }
}

