<!DOCTYPE html>
<html>
<body>
<?php
	function cari_sisi($luas){
    	return sqrt($luas/6);
    }
 ?>
 	<p>2. Sebuah kotak kayu berbentuk kubus memiliki luas permukaan 3.750 cm<sup>2</sup>. Hitunglah panjang sisi kotak kayu tersebut ?<br></p>
 	<h3>Jawab : </h3>
 	<p> Jadi panjang sisi kotak kayu tersebut adalah akar dari 3750 cm<sup>2</sup> . <p>
 	<h5>Maka sisi kubus = <?php echo cari_sisi(3750);?> cm.</h5>
</body>
</html>