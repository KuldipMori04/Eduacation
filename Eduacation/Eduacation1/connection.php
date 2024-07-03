<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'eduacation';

$con = mysqli_connect($server,$username,$password,$db);

if($con)
{
    // echo "Connection Sucessful";

?>
<script>
    alert("Connection Sucessful");
</script>

<?php
}else
{
    // echo "No connection";
    die("No connection". mysqli_connect_error());
}

?>



