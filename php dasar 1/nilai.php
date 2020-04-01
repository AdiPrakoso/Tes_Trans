<!DOCTYPE html>
<html>
	<body>

	<?php
		$str = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
		$pisah = explode(" ",$str);

		//mencari nilai rata-rata
		$bnyk = count($pisah);
		$jml = array_sum($pisah);
		$rerata = $jml/$bnyk;

		echo "Rata-rata nilainya adalah $rerata";
		echo "<br>";


		//mencari 7 nilai tertinggi
		rsort($pisah);
		$tinggi = 7;

		echo "7 Nilai Tinggi adalah ";
		for($x = 0; $x < $tinggi; $x++) {
		    echo $pisah[$x];
		    echo " ";
		}
		echo "<br>";

		//mencari 7 nilai trendah
		sort($pisah);
		$rendah = 7;

		echo "7 Nilai Terendah adalah ";
		for($x = 0; $x < $rendah; $x++) {
		    echo $pisah[$x];
		    echo " ";
		}
		

	?> 

	</body>
</html>