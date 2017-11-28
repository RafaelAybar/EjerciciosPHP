# EjerciciosPHP
Principales funciones:
* Para comprobar que una variable está definida: ```isset($variable)```
* Para comprobar valores vacíos: ```empty($variable)```
* Para fechas:
  * ```strtotime()``` Convierte una fecha en formato inglés a UNIX
* Para archivos:
  * ```is_uploaded_file ($_FILES['imagen']['tmp_name'])``` Comprueba que se subió un archivo
  * ```is_readable("$rutacompletaarchivo")``` Comprueba que el archivo se puede leer
  * ```is_writable("$rutacompletaarchivo")``` Comprueba que en el archivo se puede escribir.
  * ```fopen("$rutacompletaarchivo", "modo(r lectura, w escritura)")``` Abre un fichero en el modo deseado
  * ```file("$rutacompletaarchivo")``` Vuelca el contenido del fichero en cuestión a un array.
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
  * ```mt_rand()``` (recomendado).
* Para cadenas:
  * ```substr($cadena, 1,2 )``` Devuelve los caracteres que estén en las posiciones indicadas.
  * ```str_replace("cadena a buscar","cadena reemplazo", $cadenadondesebusca)``` Busca y reemplaza partes de una cadena
  * ```strlen()``` Cuenta cuántos caracteres hay en una cadena.
  * ```substr_count()``` Cuenta el número de veces que se repite una cadena.
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
 * ```array_combine($array1,$array2)``` Da lugar a un array nuevo con los valores de array1 como índice del nuevo array, y los valores del array 2 como nuevos valores.
 * ```in_array("cadena", $array )``` Devuelve verdadero o falso, si la cadena está o no en el array introducido.
 * ```implode(",", $array);``` Separa los elementos del array con comas.
 * ```array_replace($base, $reemplazos, $reemplazos2);``` Reemplaza los datos del array por los datos deseados
 * ```array_splice($arraydef,0,-1);``` Elimina elementos del array en la posición indicada
* Constantes y variables superglobales útiles:
    * ```$_POST``` Recibe los datos que el formulario le envíe por POST.
    * ```$_GET``` Recibe los datos que el formulario le envíe por GET.
    * ```$_SERVER[DOCUMENT_ROOT]``` Indica la raíz del servidor web. muy útil para evitar porblemas de rutas.
    * ```FILE_IGNORE_NEW_LINES``` Esta constante elimina los saltos de línea y caracteres similares. Se puede usar como parámetro en la función file.
