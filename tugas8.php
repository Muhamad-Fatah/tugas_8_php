<?php
    // for($star=10; $star>=1; $star++) {

    
	$star = 20;
	for($a=1; $a<=$star; $a++){
	for($b=$star; $b>=$a; $b--){
		echo "-";
	}
	for($c=1; $c<=$a; $c++){
		echo "X";
	}
	echo "<br>";
	}
	for($a=1; $a<=$star; $a++){
	for($b=1; $b<=$a; $b++){
		echo "-";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "X";
	}
	echo "<br>";
	}

?>