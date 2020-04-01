<!DOCTYPE html>
<html>
	<body>

	<?php
		function check($str) {
		   $pisah = str_split($str);
		   $bnyk = count($pisah);
		   $kecil=0;
		   for($x = 0; $x < $bnyk; $x++) {
				    if(preg_match('@[a-z]@', $pisah[$x])){
		            	$kecil = $kecil + 1;
		            }
		            
				}
		   echo "$str mengandung $kecil buah huruf kecil"  ;
		    
		}

		check("TranSISI");

		?>

	</body>
</html>