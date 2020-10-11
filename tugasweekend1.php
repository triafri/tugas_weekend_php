<!DOCTYPE html>
<html>
<body>

<?php
	function luas_kubus($sisi){
    	return "Luas kubus dengan panjang $sisi cm : " . 6*pow($sisi,2) . "cm<sup>2</sup>";
    }
?>

	<p>1. Hitunglah luas permukaan kubus dengan panjang setiap rusuknya sebagai berikut :</p>
	<ol type="a">
		<li>4 cm</li>
		<li>7 cm</li>
		<li>10 cm</li>
		<li>12 cm</li>
	</ol>
	<h3>Jawab : </h3>
	<ol  type="a">
		<li><?php echo luas_kubus(4);?></li>
		<li><?php echo luas_kubus(7);?></li>
		<li><?php echo luas_kubus(10);?></li>
		<li><?php echo luas_kubus(12);?></li>
	</ol>
</body>
</html>