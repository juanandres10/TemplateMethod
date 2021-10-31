<?php
require_once "preguntas.php";
class instagram extends Preguntas {
	private $usuario;
	protected function Respuesta1() {
		$this->usuario = "The_king_of_king_10";
		echo "<b>The_king_of_king_10<br></b>";
	}
	protected function Respuesta2() {
		echo "<b>instagram123<br></b>";
	}
	protected function Bienvenido() {
		echo "Bienvenido ".$this->usuario;
	}
}
?>