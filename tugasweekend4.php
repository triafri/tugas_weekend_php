<!DOCTYPE html>
<html>
<body>
	<?php
		function luas_permukaan_tabung($r, $t){
			$luas_Permukaan = 2*pi()*$r*($r+$t);
			return round($luas_Permukaan);
		}
	?>

	<p>4. Sebuah tabung memiliki jari – jari 14 cm dan tinggi nya 10 cm, maka tentukan lah luas nya?</p>
	<h3>Jawab :</h3>
	<h5>Jadi Luas Permukaan Sebuah Tabung adalah : <?php echo luas_permukaan_tabung(14, 10);?> cm<sup>2</sup></h5>

</body>
</html>