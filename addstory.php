<?php 
	include('connet.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>BreakUp Post</title>
	</head>
	<body> 

		<form action="#" class="form" method="POST">
			<h2>Type your BreakUp Story</h2>

			<div>
				<div>
					<label>Story Title</label>
					<input required type="text" name="storytitile">
				</div>

				<textarea required name="story" placeholder="Yor Story Writing"></textarea>

				<div>
					<label>Careent Date</label>
					<input required type="date" name="cdate">
				</div>
				<div>
					<label>Story Date</label>
					<input required type="date" name="sdate">
				</div>
			</div>


			<div>
				<input type="submit" name="save" value="Save">
			</div>

			<?php 

			if (isset($_POST['save'])) {
				$stitle= $_POST['storytitile'];
				$story= $_POST['story'];
				$cdate= $_POST['cdate'];
				$sdate= $_POST['sdate'];

				$result=mysqli_query($connet, "INSERT INTO `breakuppost`(`storytitile`, `story`, `cdate`, `sdate`) VALUES ('$stitle', '$story','$cdate','$sdate')");

				if ($result)
				{
					echo "Succes";
					header("location: index.php");
				} else 
				{
					echo "Unsecceus Full";
				}
			}

			?>
		</form>
 
 
	</body>

</html>