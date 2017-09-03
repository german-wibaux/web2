
<table>
	<?php
		for ($i=0; $i <=20 ; $i++) {
			echo "<tr>";

				for ($i1=0;$i1<=20;$i1++) {
					if($i==0) {
						echo "<td>".$i1."</td>";						
					} else if ($i1==0) {
						echo "<td>".$i."</td>";
					} else {
						echo "<td>".$i1*$i."</td>";
					}						
				}		
			echo "</tr>";			
		}
	?>		
</table>
