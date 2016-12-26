# EjerciciosPHP
Principales funciones:
* Para comprobar valores vacíos: ```isset($variable)```
* Para fechas:
  * ```strtotime()``` Convierte una fecha en formato inglés a UNIX
* Para subir archivos: ```is_uploaded_file ($_FILES['imagen']['tmp_name'])```
* Para Números y operaciones matemáticas:
 * ```sqrt()``` Raíces cuadradas.
 * ```pow()``` Potencias.
 * ```decbin()``` Convierte decimal a binario.
 * ```dechex()``` Convierte de decimal a hexadecimal.
 * ```bin2hex()``` Convierte de binario a hexadecimal.
 * ```abs()``` Valor absoluto.
 * ```hex2bin()``` Convierte hexadecimal a binario.
 * ```round($numero,2)``` Redondea los valores con la precisión decimal del 2º parámetro.
* Para generar números aleatorios:
 * ```rand()``` (poco eficiente, antiguo).
 * ```mt_rand()``` (recomendado).
* Para cadenas:
  * ```substr()```
  * ```strlen()``` 
  * ```substr_count()``` Cuenta cuántos caracteres hay.
  * ```trim()``` Elimina los espacios en blanco antes y después de la cadena.
* Para cookies:
 * ```setcookie(nombredelagalleta,nombre, time()+cantidadX)```
* Para sesiones:
 * ```session_start()``` Inicia la sesión.
 * ```session_unset()``` Cierrra las variables y destruye los datos.
 * ```session_destroy()``` Destruye la sesión y las variables.
* Para BD MySQL:
 * ```mysqli_connect("127.0.0.1", "mi_usuario", "mi_contraseña", "mi_bd")``` Conecta a la BD.
 * ```mysqli_close ( mysqli $conexión )``` Desconcecta de la BD.
 * ```mysqli_select_db ( mysqli $link , string $dbname )``` Selecciona la BD.
 * ```mysqli_free_result()``` Libera la memoria asociada a un resultado
* Para arrays:
 * ```array()``` Define un array.
 * ```implode(",", $array);``` Separa los elementos del array con comas.
 * ```array_replace($base, $reemplazos, $reemplazos2);``` Reemplaza los datos del array por los datos deseados
 * ```array_splice($arraydef,0,-1);``` Elimina elementos del array en la posición indicada
