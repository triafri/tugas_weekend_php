<!DOCTYPE html>
<html>
<body>
	<?php
		function luas_lingkaran($r){
			$luas = pi()*pow($r,2);
			return round($luas);
		}
	?>

	<p>5. Sebuah lingkaran memiliki jari-jari sebesar 14 cm. Tentukan luas lingkaran tersebut ? </p>
	<h3>Jawab : </h3>
	<h5>Luas lingkaran adalah : <?php echo luas_lingkaran(14);?> cm<sup>2</sup></h5>

</body>
</html>