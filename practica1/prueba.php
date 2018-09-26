<?php
	$integer = 10;
	$float = 12.34;
	$string ="la super clase HCI"
	$array = array('key1'=>"hola",'key2'=>"mundo");
	$array2 = array("key1", "hola" ," key2","mundo");
	$bool= true;
	$bool2= false;
	
	class StrValTest
	{
		private $mivar="clase1";
		public $mivar2="clase2";
		public function __toString()
		{
			return __CLASS__;
		}
		public function example(){
			return "esto es una prueba";
		}
	}
	echo "entero".inval($integer)."<br/>";
	echo "float".inval($float)."<br/>";	
	echo "String".inval($string)."<br/>";	
	echo "array".inval($array)."<br/>";	
	echo "array int".(int)$array."<br/>"
	var_dump((array)new StrValTest());
	echo "<br/>";
	$ejemplo=(objet)$float;
	var_dump($ejemplo);
	
?>
