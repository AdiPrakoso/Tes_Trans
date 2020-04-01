<!DOCTYPE html>
<html>
	<body>

	<?php
		function unigram($str) {
		  $low = strtolower($str);
		  $pisah = explode(" ",$low);
		  $uni = join(",",$pisah);

		  echo "Unigram : $uni";
          echo "<br>";
		    
		}

		/*function bigram($str) {
		   
		    
		}

		function tigram($str) {
		   
		    
		}*/

		unigram("Jakarta adalah ibukota negara Republik Indonesia");

		?>

	</body>
</html>