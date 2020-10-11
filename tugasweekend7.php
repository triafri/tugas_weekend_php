<!DOCTYPE html>
<html>
<body>
	<?php
		function cari_jarak($r, $n){
			$jarak = (2*pi()*$r)*$n;
			return round($jarak);
		}
	?>
	<p>7. Pak Andi memiliki sebuah mobil yang panjang jari-jari ban mobil tersebut sebesar 21 cm. Saat mobil tersebut berjalan, ban mobil tersebut berputar sebanyak 200 kali. Berapakah jarak yang ditempuh mobil tersebut ?</p>
	<h3>Jawab :</h3>
	<h5>Jarak yang ditempuh adalah : <?php echo cari_jarak(21, 200)/100;?> m</h5>
</body>
</html>