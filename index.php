<!DOCTYPE html>
<html>

<head>
	<title>...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<h3>Ist die Überschrift rot?</h3>
	<!-- PHP Coding -->
	<?php  
		/************ 1.Variables **********************/
		$a = 4;
		echo $a;
		$b = $a + 6;
		echo $b;
		echo "<br>";
		echo "Version $b";
		echo "<br>";
		$f = "GetElementById";
		$g = strtolower($f);
		echo $g;


		/************ 2.Arrays **********************/
		$c = array(2,"hallo",10.5);
		echo "<br>";
		print_r($c);
		echo "<br>";
		$d = [3, 4, 8, "test"];
		print_r($d);
		echo "<br>";
		$d[] = 12;//Weiteren Wert ins Array einfügen
		$h = extract($d);
		echo $h;
		echo "<pre>";
			print_r($d);
		echo "</pre>";
		$g = extract($d);
		echo $g;
		$h = array("a" => "Cat", "b" => "Dog", "c" => "Horse");
		$i = extract($h);
		echo "<br>Array-Elemente als einzelne Variable: <br>";
		echo "$a <br>";
		echo " $b ";
		echo $c;
		echo "<br>Symboltabelle: $i";
		$vars = array();
		echo "<br> Jetzt kommt die Variable vars: ";
		echo print_r($vars);

		/************ 3.Verzweigungen **********************/
		if (is_array($d)){
			echo '<br>$d ist ein Array.';
			$d[] = "VfB aus if-Verzweigung";
			echo "<br>";
			print_r($d);
		}
		else {
			echo '$d ist kein Array.';
		}
		echo "<br>";
		$h = 10;
		switch($h){
			case 1: echo '$h ist 1'; break;
			case 2: echo '$h ist 2'; break;
			case 6: echo '$h ist 6'; break;
			default: echo '$h ist irgendwas anderes'; break;
		}

		/************ 4.Schleifen **********************/
		echo "Jetzt gebe ich das Array mit foreach aus: <br>";
		foreach($d as $temp){
			echo "$temp<br>";
		}
		$n = count($d);
		echo "<br>Anzahl Array-Elemente: $n";

		$p = 0;
		echo "<ul>";
		while ($d[$p] != 12){
			echo "<li>noch nicht 12.</li>";
			$p = $p + 1;
		}
		echo "</ul>";
		echo "<h3>Die 12 wurde gefunden.</h3>";

		/************ 5.Functions **********************/
		function berechne($a,$b=4){
			return $erg = $a + $b;
		}

		$q = berechne(5);
		echo "<br>$q";
		$q = berechne(2,9);
		echo "<br>$q";

		/************ 6.Classes **********************/
		class Sid {
			public $name;
			public function outputName(){
				echo "$this->name";
			}
		}

		$r = new Sid();
		// Objekt-Eigenschaft wird initialisiert.
		$r->name = "PDS";
		// Objekt-Eigenschaft wird ausgegeben.
		$r->outputName();

	?>

</body>

</html>