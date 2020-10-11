<!DOCTYPE html>
<html>
<body>
<?php
	function volume_tabung($r, $t){
    	$volume = pi()+pow($r,2)*$t;
    	return round($volume);
    }
?>
	<p>3. Sebuah tabung memiliki jari – jari dan tinggi masing – masing 10 cm dan 30 cm, lalu tentukan lah berapa volume dari tabung tersebut? </p>
	<h3>Jawab : </h3>
	<h5>Jadi volume dari tabung tersebut adalah : <?php echo volume_tabung(10, 30);?> cm<sup>3</sup></h5>

</body>
</html>


