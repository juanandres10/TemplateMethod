<?php
require_once "instagram.php";
require_once "facebook.php";
	//Funcion Login para llamar a la funcion templateMethod que esta en la clase abstracta Preguntas
	function Login(Preguntas $a) {
		$a->templateMethod();
	}
	//Inicio de sesion de instagram
	echo "<b><u>Inicio de sesion en instagram<br></u></b>";
	Login(new instagram());
	echo "<br>";
	//Inicio de sesion de facebook
	echo "<b><u>Inicio de sesion en facebook<br></u></b>";
	Login(new facebook());
	echo "<br>";
?>