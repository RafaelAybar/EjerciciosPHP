<?php
include 'funcionespruebas.php';
$totaljugadores = (int) 8;
//Creación de clases
class Torneo{
        public $idtorneo;
        protected $rondaini = 0;
        public $rondamax;
        public $fechatorneo;
        //Métodos
        function detalles_torneo(){
            echo "El id del torneo es: ".$this-> idtorneo . "<br>";
            echo "La ronda inicial es: " . $this -> rondaini . "</br>";
            echo "La ronda maxima es: ". $this -> rondamax;
        }

        
}

class Jugadores extends Torneo {
    public $nombre;
    private $passwd="2";
    public $mazo;
    private $puntos = 0;
    // Un jugador puede ser Ganador, Descalificado, Caído.
    public $estado;
    function obtenervalorpass(){
        echo "La pass es ". $this -> passwd;
    }
    function cambiapass(){
        $this->passwd = "Dat - BOI";
        //Devuelve un warningreturn passwd;
    }
}
//instanciacion de clases
$torneoalm = new Torneo();
$jugadoresalm = new Jugadores();
echo "La fecha del torneo es ". $torneoalm->fechatorneo = time()."<br>";
//Calculamos las rondas
$torneoalm -> rondamax = calcularonda($totaljugadores);
//Usamos un getter para obtener la pass
echo "El número de rondas a jugar es " . $torneoalm -> rondamax . "<br>";
//echo $jugadoresalm -> obtenervalorpass()."<br>";
$jugadoresalm -> cambiapass();
$jugadoresalm -> obtenervalorpass();