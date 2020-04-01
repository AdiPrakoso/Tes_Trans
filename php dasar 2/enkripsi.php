<!DOCTYPE html>
<body>

	<form action="" method="POST">
		 <input name="kode" type="text">
		 <input type="submit" value="Encrypt!" />
	</form>

	<?php 
		$input=$_POST["kode"];

			$key = array(
			 'D' => 'E',
			 'F' => 'D',
			 'K' => 'G',
			 'N' => 'S',
			 'H' => 'K',
			 'Q' => 'K'
			 
			);


			// Change input
			$output = str_replace(array_keys($key), $key, $input);

			// Menampilkan output
			echo $output;
			?>

	
</body>
</html>