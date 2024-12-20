<?php
$m = array(array(2,3),array(4,5),array(6,7));
	$m[0][1] = $m[2][0];

foreach($m as $clave => $valor){
		//Posiçoes;
		echo "<br />";;
			foreach($m[$clave] as $p => $v){
			echo "[";
			echo $p;
			echo "]";
		}
		// Valores
		echo "<br />";
			foreach($m[$clave] as $p => $v){
			echo " | ";
			echo $v;
			
		}
		echo " |";
	}
