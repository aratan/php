<?php 

class facebook{
	public $nombre;
	public $edad;
	private $pass;

	public function __construct($nombre,$edad, $pass){
	$this -> nombre = $nombre;
	$this -> edad = $edad;
	$this -> pass = $pass;
	}

	public function verInformacion(){
	echo "<br>nombre: " . $this->nombre;
	echo "<br>edad:   " . $this->edad;
	echo "<br>pass:   " . $this-> pass;
	}

}

$facebook = new Facebook('Carlos Arbiol', 43,'123');
$facebook -> verInformacion();
echo $facebook -> edad;
?>