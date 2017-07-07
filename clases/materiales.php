<?php
require_once("AccesoDatos.php");

class Materiales
{
    public $codigo;
	public $nombre;
	public $precio;
	public $tipo;

    public static function TablaMateriales()
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("SELECT * from materiales");
		$consulta->execute();			
		$array= $consulta->fetchAll(PDO::FETCH_ASSOC);

        $tabla= "

        <script type='text/javascript' class='init'>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
        
        <div class='panel panel-success'>
        <div class='panel-heading'>TABLA DE MATERIALES</div>
        <div class='panel-body'>

        <table id='example' class='display' cellspacing='0' width='100%'>
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Tipo</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>";
                foreach ($array as $Aux)
                {
                    $id=$Aux["codigo"];
                    $tabla.= " 	<tr>
                                <td>".$Aux["codigo"]."</td>
                                <td>".$Aux["nombre"]."</td>
                                <td>".$Aux["precio"]."</td>
                                <td>".$Aux["tipo"]."</td>
                                <td>
                                    <div class='btn-group'>
                                    <button type='button' class='btn btn-warning' onclick='ModificarMaterial($id)'>Modificar</button>
                                    <button type='button' class='btn btn-danger' onclick='EliminarMaterial($id)'>Eliminar</button>
                                    </div>
                                </td>
                                </tr>";
                }
                        "</tbody>
                    </table>
                        </div>
                    </div>";	
        
            return $tabla;
    }

   public static function TablaComprador()
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("SELECT * from materiales");
		$consulta->execute();			
		$array= $consulta->fetchAll(PDO::FETCH_ASSOC);

        $tabla= "

        <script type='text/javascript' class='init'>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
        
        <div class='panel panel-success'>
        <div class='panel-heading'>TABLA DE MATERIALES</div>
        <div class='panel-body'>

        <table id='example' class='display' cellspacing='0' width='100%'>
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Tipo</th>
                            </tr>
                        </thead>
                        <tbody>";
                foreach ($array as $Aux)
                {
                    $id=$Aux["codigo"];
                    $tabla.= " 	<tr>
                                <td>".$Aux["codigo"]."</td>
                                <td>".$Aux["nombre"]."</td>
                                <td>".$Aux["precio"]."</td>
                                <td>".$Aux["tipo"]."</td>
                                </tr>";
                }
                        "</tbody>
                    </table>
                        </div>
                    </div>";	
        
            return $tabla;
    }

    public static function AgregarMaterial($nombre, $precio, $tipo){
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
        $consulta =$objetoAccesoDato->RetornarConsulta(
            "INSERT into 
            materiales (nombre, precio, tipo)
            values(:nombre, :precio, :tipo)"
            );
        $consulta->bindValue(':nombre',$nombre, PDO::PARAM_STR);
        $consulta->bindValue(':precio',$precio, PDO::PARAM_INT);
        $consulta->bindValue(':tipo',$tipo, PDO::PARAM_STR);
        //$consulta->bindValue(':operador',$_SESSION['usuario'], PDO::PARAM_STR);
        $consulta->execute();
        return "Material Agregado";
    }

    public static function EliminarMaterial($id)
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
        $consulta =$objetoAccesoDato->RetornarConsulta(
            "DELETE from materiales
            WHERE codigo=:id"
            );
        $consulta->bindValue(':id',$id, PDO::PARAM_STR);
        $consulta->execute();
        return "Material Eliminado";
    }

    public static function TraerUnMaterial($id)
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("SELECT * from materiales WHERE codigo=:id");
        $consulta->bindValue(':id',$id, PDO::PARAM_STR);
		$consulta->execute();
        $unmaterial= $consulta->fetchAll(PDO::FETCH_ASSOC);
        $unmaterial=json_encode($unmaterial);			
		//var_dump($unmaterial);
        return $unmaterial;
    }

    public static function AceptarModificacion($nombre, $precio, $tipo, $codigo){
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
        $consulta =$objetoAccesoDato->RetornarConsulta(
            "UPDATE materiales 
            SET nombre=:nombre, precio=:precio, tipo=:tipo
		    WHERE codigo=:codigo"
            );
        $consulta->bindValue(':nombre',$nombre, PDO::PARAM_STR);
        $consulta->bindValue(':precio',$precio, PDO::PARAM_INT);
        $consulta->bindValue(':tipo',$tipo, PDO::PARAM_STR);
        $consulta->bindValue(':codigo',$codigo, PDO::PARAM_STR);
        //$consulta->bindValue(':operador',$_SESSION['usuario'], PDO::PARAM_STR);
        $consulta->execute();
        return "Actualizacion Exitosa";
    }
}