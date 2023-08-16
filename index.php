<?php 
	include('connet.php');
	$connet = mysqli_query($connet, "SELECT * FROM `breakuppost` ORDER BY story DESC");

	if (!$connet) {
		echo "connet error".mysqli_connect_error();
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>BreakUp Post</title>
		<style type="text/css">
			
			.story {
				width: 500px;
				height: 100%;
				margin-left: auto;
				margin-right: auto;
			}

			.sd {
				margin-left: 165px;
			}
		</style>
	</head>
	<body> 
 	
  			<?php 
			while ($show=mysqli_fetch_array($connet)) {
				echo '<div class="story">';
					echo '<h2>'.$show['storytitile'].'</h2>';
					echo '<p>'.$show['story'].'</p>';
					echo '<span>Publish date : '.$show['cdate'].'</span>';
					echo '<span class="sd">Story Date : '.$show['sdate'].'</span>';
 					echo "<a href=\"edit.php?id=$show[id]\">Edit Story</a>";
				echo '</div>';
			}


		?>
 
 		<a href="addstory.php">create story</a>
	</body>

</html>