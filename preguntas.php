<?php
	//Creamos la clase abstracta Preguntas
abstract class Preguntas {

	//Creamos la funcion templateMethod que es publica y final para que no la puedan sobreescribir las hijas.
	final public function templateMethod() {
		$this->Pregunta1();
		$this->Respuesta1();
		$this->Pregunta2();
		$this->Respuesta2();
		$this->Pregunta3();
		$this->Respuesta3();
		$this->Bienvenido();
	}
	//Funcion protegida de Pregunta1
	protected function Pregunta1() {
		echo "Usuario o correo electronico: ";
	}
	//Funcion protegida de Pregunta2
	protected function Pregunta2() {
		echo "Contraseña: ";
	}
	//Funcion protegida de Pregunta3
	protected function Pregunta3() {
		echo "Numero de telefono:<br>";
	}
	//Funcion abstractas protegidas de Respuesta1 y Respuesta2. Respuesta3 es una funcion protegida sin definir.
	abstract protected function Respuesta1();
	abstract protected function Respuesta2();
	protected function Respuesta3() {}
	//Funcion Bienvenido, es una funcion protegida y sin definir.
	protected function Bienvenido() {}
}
?>