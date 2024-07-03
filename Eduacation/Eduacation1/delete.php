<?php

include 'connection.php';


$id = $_GET['id'];


$deletequery = " DELETE FROM `ragister` WHERE  id=$id ";

$query = mysqli_query($con, $deletequery);

if($query){
	?>
	<script>
		alert("Deleted successfully")
	</script>
	<?php
}else{
	?>
	<script>
		alert( " Not Deleted ")
	</script>
	<?php
}

header('location:display.php');

?>