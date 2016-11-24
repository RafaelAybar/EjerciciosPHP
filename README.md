# EjerciciosPHP
Principales funciones:
* Para comprobar valores vacíos: ```isset($variable)```
* Para Números y operaciones matemáticas:
 * ```sqrt()``` Raíces cuadradas.
 * ```pow()``` Potencias.
 * ```decbin()``` Convierte decimal a binario.
 * ```dechex()``` Convierte de decimal a hexadecimal.
 * ```bin2hex()``` Convierte de binario a hexadecimal.
 * ```abs()``` Valor absoluto.
 * ```hex2bin()``` Convierte hexadecimal a binario.
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
* Para arrays:
 * ```array()``` Define un array.
 * ```implode(",", $array);``` Separa los elementos del array con comas.
