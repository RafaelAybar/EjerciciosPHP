<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio3</title>
        <style>
            h1 { font-size: 29px; font-family: Verdana; color:  #000000; }
            h4 { font-size: 20px; font-family: Verdana; color:  #000000; background: #efefef;}
            td { font-size: 15px; font-family: Verdana; color:  #000000; background: #efefef; }
            table{ border-collapse: collapse; box-shadow: 8px 8px 16px #cccccc; }
            button{ font-size: 11px; font-weight: bold; }
</style>
    </head>
    <body>
        <h1>Eliminación de datos</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
                <td><h4>Introduzca qué pedido desea borrar (Introduzca el id del pedido) </h4></td>
            </tr>
            <tr>
                <td> 
                    Idpedido: <input type="text" name="codigo" required>
            </tr>
            <tr>
                <td>              
                    <input type="submit" value="Enviar">
                    <input type="reset" name="Reestablecer los campos">
                </td>
            </tr>
            <tr>
                <td>
                <?php
                //Establecemos qué errores de PHP son notificados
                error_reporting(E_ERROR);
                        //declaramos las variable introducida en el formulario
                        $codigo = $_POST['codigo'];
                        //abrimos la conexión al servidor mysql
                        $conexion = mysqli_connect("localhost", "root", "")
                        or die("No es posible conectarse a la BD");
                        //seleccionamos la base de datos
                        mysqli_select_db ($conexion, "ZAPATOS")
                        or die ("no se puede seleccionar la BD" );
                        //Declaramos las condiciones de actualización:
                        if (isset($codigo)){
                            //definimos las consultas

                $consultaprod = "DELETE FROM `PEDIDO` WHERE idpedido ='$codigo'";
                                    
                $delete = mysqli_query($conexion, $consultaprod) or die("(1)No se ha podido ejecutar esta consulta");
                

                $comprobacion = "SELECT * FROM `PEDIDO` WHERE idpedido='$codigo' ";

                $select = mysqli_query($conexion, $comprobacion) or die("(2)No se ha podido ejecutar esta consulta");
            echo "Se ha borrado el pedido con id $codigo";
        }
            mysqli_close($conexion);

        ?>
        </td>
            </tr>
    </table>
    </form>
    </body>
</html>