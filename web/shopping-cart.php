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
	$Cols = 3; // Dynamic number for Columns
	echo '<table border="1">';
	echo '<tr>';
	echo '<th>Item Name</th>';
	echo '<th>Quantity</th>';
	echo '<th>Delete</th>';
	echo '</tr>';
	
	for($i=0;$i<$Rows;$i++)
	{ 
		echo '<tr>';
		echo '<td>' . $items[$i] . '</td>';
		for($j=1;$j<$Cols;$j++)
		{ 
			echo '<tr>';
			 echo '<td>' . 1 . '</td>';
			 echo '<td>' . '<a href="?delete=<?php echo($i); ?>">Delete from cart</a>' . '</td>';
			 echo '</tr>';
		}
		echo '</tr>';
	}
	echo '</table>';

	if ( isset($_GET["delete"]) )
 {
   $i = $_GET["delete"];
   $qty = $_SESSION["qty"][$i];
   $qty--;
   $_SESSION["qty"][$i] = $qty;

 //remove item if quantity is zero
 if ($qty == 0) {
   $_SESSION["amounts"][$i] = 0;
   unset($_SESSION["cart"][$i]);
 }
 else
 {
   $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
 }
 }
	?>

	<a href="shopping-cart.html">Keep shopping</a>
	<a href="">Check out</a>

	<script>
		function deleteItem() {

		}
	</script>

</body>


</html>