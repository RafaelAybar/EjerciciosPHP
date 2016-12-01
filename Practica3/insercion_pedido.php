<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio1</title>
        <style>
            h1 { font-size: 29px; font-family: Verdana; color:  #000000; }
            h4 { font-size: 20px; font-family: Verdana; color:  #000000; background: #efefef;}
            td { font-size: 15px; font-family: Verdana; color:  #000000; background: #efefef; }
            table{ border-collapse: collapse; box-shadow: 8px 8px 16px #cccccc; }
            button{ font-size: 11px; font-weight: bold; }
</style>
    </head>
    <body>
        <h1>Inserción de datos</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
                <td><h4>Introduzca los cambios pertinentes</h4></td>
            </tr>
            <tr>
                <td> 
                    Idcliente: <input type="text" name="idcliente" required>
                    Idpedido: <input type="text" name="codigo" required>
                    Estado: <input type="text" name="estado">
                    Fecha: <input type="text" name="fecha" value="YYYY/MM/AA">
                    Iva: <input type="text" name="iva" value="IVA">
                    
                </td>
            </tr>
            <tr>
                <td>
                    Subtotal: <input type="text" name="subtotal">
                    Total: <input type="text" name="total">
                    Usuario:<input type="text" name="usuario">                
                    <input type="submit" value="Enviar">
                    <input type="reset" name="Reestablecer los campos">
                </td>
            </tr>
            <tr>
                <td>
                <?php
                        //declaramos las variable introducida en el formulario
                        $estado = $_POST['estado'];
                        $fecha = $_POST['fecha'];
                        $codigo = $_POST['codigo'];
                        $iva = $_POST['iva'];
                        $subtotal = $_POST['subtotal'];
                        $total = $_POST['total'];
                        $usuario = $_POST['usuario'];
                        $idcliente = $_POST['idcliente'];
                        //abrimos la conexión al servidor mysql
                        $conexion = mysqli_connect("localhost", "root", "")
                        or die("No es posible conectarse a la BD");
                        //seleccionamos la base de datos
                        mysqli_select_db ($conexion, "ZAPATOS")
                        or die ("no se puede seleccionar la BD" );
                        //Declaramos las condiciones de inserción:
                        echo "<h3>El formato de la fecha es AAAA/MM/DD </br>";
                        if (isset($estado) && isset($fecha) && isset($codigo) && isset($iva) && isset($subtotal) && isset($total) && isset($usuario) && isset($idcliente)){
                            //definimos las consultas
                                    //PARA QUE NO DE ERRORES LA PK AÑADIMOS EL ID DE CLIENTE
                $consultaclient = "INSERT INTO `CLIENTE` (`idcliente`, `nomcliente`, `email`, `empresa`, `pais`, `ciudad`, `clave`) VALUES ('$idcliente', 'no', 'no', 'no', 'no', 'no', '0')";
                                     
                $introdu1 = mysqli_query($conexion, $consultaclient) or die("(1) No se ha podido ejecutar esta consulta porque esa idcliente ya existe");
                
                $consultaprod = "INSERT INTO `PEDIDO` (`idpedido`, `idcliente`, `fecha`, `subtotal`, `iva`, `total`, `estado`, `usuario`) VALUES ('$codigo','$idcliente','$fecha','$subtotal','$iva','$total','$estado','$usuario')";
                                    
                $introdu2 = mysqli_query($conexion, $consultaprod) or die("No se ha podido ejecutar esta consulta");
                
                
                $id_pedido = mysqli_insert_id($conexion);
                    
                // PEDIMOS LOS DATOS GUARDADOS:
                
                $consulta_datos = mysqli_query($conexion,"SELECT * FROM PEDIDO WHERE idpedido='$id_pedido' ");
                
                //$resultado = mysqli_result(result, row);
                
                $numfilas = mysqli_num_rows ($consulta_datos);
                
                    if ($numfilas > 0){
                                            print ("<TABLE border>\n");
                                            print ("<TR>\n");
                                            print ("<td>Idpedido</td>\n");
                                            print ("<td>Idcliente</td>\n");
                                            print ("<td>Fecha</td>\n");
                                            print ("<td>Subtotal</td>\n");
                                            print ("<td>Iva</td>\n");
                                            print ("<td>Total</td>\n");
                                            print ("<td>Estado</td>\n");
                                            print ("<td>Usuario</td>\n");
                                            print ("</TR>\n");
                                            
                                            for ($i=0; $i<$numfilas; $i++){
                                                    $resultado = mysqli_fetch_array ($consulta_datos);
                                                    print ("<TR>\n");
                                                    print ("<TD>" . $resultado['idpedido'] . "</TD>\n");
                                                    print ("<TD>" . $resultado['idcliente'] . "</TD>\n");
                                                    print ("<TD>" . $resultado['fecha'] . "</TD>\n");
                                                    print ("<TD>" . $resultado['subtotal'] . "</TD>\n");
                                                    print ("<TD>" . $resultado['iva'] . "</TD>\n");
                                                    print ("<TD>" . $resultado['total'] . "</TD>\n");
                                                    print ("<TD>" . $resultado['estado'] . "</TD>\n");
                                                    print ("<TD>" . $resultado['usuario'] . "</TD>\n");
                                                    print ("</TR>\n");
                                                    print ("</TABLE>\n");
                                                    }
                                            }
                    }
                    else{
                        echo "Debes introducir los valores correctamente";
                    }
            mysqli_close($conexion);
        ?>
        </td>
            </tr>
    </table>
    </form>
    </body>
</html>