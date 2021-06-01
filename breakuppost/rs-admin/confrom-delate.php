
<?php
include('../connet.php');

$id= $_GET['id'];

	$delate = mysqli_query($connet, "DELETE FROM `breakuppost` WHERE id=$id");

	if ($delate) 
	{
		header('location: index.php');
	} else 
	{
		echo "Delate unsuccesful";
	}
	
?>