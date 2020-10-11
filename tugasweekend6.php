<!DOCTYPE html>
<html>
<head>
<body>
	<?php
		function keliling_lingkaran($d){
			$keliling = pi()*$d;
			return round($keliling);
		}
	?>

	<p>6. Sebuah roda sepeda yang berbentuk lingkaran memiliki diameter sebesar 14 cm. Maka luas dan keliling roda tersebut adalah ?</p>
	<h3>Jawab :</h3>
	<h5>Keliling lingkaran adalah : <?php echo keliling_lingkaran(14);?> cm<sup>2</sup></h5>
</body>
</html>