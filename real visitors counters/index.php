<?php 

	/// database conneted

	$hosn = "localhost";
	$datauser = "root";
	$datapass = "";
	$dataname = "real_time_counter";

	$connection = mysqli_connect($hosn,$datauser,$datapass,$dataname);

	if (!$connection) {
		echo "dissconnection php";
	}
///// RAEDFHULDFUJHRIFVHFHEFB

	$visitor_ip = $_SERVER['REMOTE_ADDR'];
	echo $visitor_ip;


	$query = "SELECT * FROM `tabble` WHERE ip_address='$visitor_ip'";
	$result = mysqli_query($connection, $query);

	if (!$result) {
		echo "Unsuccessful table conneted";
	}

	$total_visitors = mysqli_num_rows($result);

	// echo $total_visitors;

	if ($total_visitors<1) {
		$query = "INSERT INTO `tabble`(`ip_address`) VALUES ('$visitor_ip')";
		$result = mysqli_query($connection, $query);
	}

	echo $visitor_ip;

	///////SDFFDSDFFDFDFDGFD
	$query = "SELECT * FROM `tabble`";
	$result = mysqli_query($connection, $query);

	if (!$result) {
		echo "Unsuccessful table conneted";
	}

	$total_visitors = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<div class="wrapper">
		<h1>visitor counters</h1>
		<h3><?php echo $total_visitors; ?></h3>
	</div>
</body>
</html>





 $hostname = "localhost";
  $username = "id16918531_devbreakup_database";
  $password = "realAppdevbre@kUp0171292344++";
  $dbname = "id16918531_devbreakup";
