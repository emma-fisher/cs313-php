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

	$Rows = sizeof($items); //Dynamic number for Rowss
	$Cols = 2; // Dynamic number for Columns
	echo '<table border="1">';
	echo '<td>Item Name</td>';
	for($i=0;$i<$Rows;$i++)
	{ 
		echo '<tr>';
		echo '<td>' . $items[$i] . '</td>';
		for($j=1;$j<$Cols;$j++)
		{ 
			 echo '<td>' . 1 . '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
	?>

</body>


</html>