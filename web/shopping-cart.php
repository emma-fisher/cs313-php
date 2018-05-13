<!DOCTYPE html>
<html>
<head>
	<title>Submission Results</title>
</head>

<body>
	<h1>Submission Results</h1>
	The flavor you added is: 
	<?php 
	$items = array();
	foreach($_POST[flavors] as $flavor) {
			echo $flavor . ", ";
			array_push($items, $flavor);
		}

	$Rows = 4; //Dynamic number for Rowss
	$Cols = 3; // Dynamic number for Colsumns
	echo '<table border="1">';
	for($i=1;$i<=$Rows;$i++){ echo '<tr>';
	  for($j=1;$j<=$Cols;$j++){ echo '<td>' . mt_rand($i, $i*100) . mt_rand($j, $j*100) . '</td>'; }
		  echo '</tr>';
	  }
	echo '</table>';
	?>

</body>


</html>