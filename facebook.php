<?php
require_once "preguntas.php";
class facebook extends Preguntas {
	private $usuario;
	private $telefono;
	protected function Respuesta1() {
		$this->usuario = "juanan@iesiliberis.com";
		echo "<b>juanan@iesiliberis.com<br></b>";
	}
	protected function Respuesta2() {
		echo "<b>facebook123<br></b>";
	}
	protected function Respuesta3() {
		$this->telefono = "658623840";
		echo "<b>658623840<br></b>";
	}
	protected function Bienvenido() {
		echo "Bienvenido ".$this->usuario." con numero de telefono ".$this->telefono;
	}
}
?>