

<?php

	$chain=$_GET['chain'];
	
	$chain_array=explode(',',$chain);
	$length=sizeof($chain_array);

		

	for ($i=0; $i < $length ; $i++) { 
		echo"<p>".($chain_array[$i])."</p>";

	}
		
 ?>

