<?php
include 'funcionespruebas.php';
$totaljugadores = (int) 8;
//Creación de clases
class Torneo{
        public $idtorneo = 1;
        protected $rondaini = 0;
        public $rondamax;
        public $fechatorneo;
}
class Jugadores extends Torneo {
    public $nombre;
    private $passwd="2";
    public $mazo;
    private $puntos = 0;
    // Un jugador puede ser Ganador, Descalificado, Caído.
    public $estado;
}
$jugador1 = new Jugadores;
echo $jugador1 -> idtorneo;
?>