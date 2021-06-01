<?php  

include('connet.php');

$id= $_GET['id'];

$result = mysqli_query($connet, "SELECT * from `breakuppost` where id=$id");

	while($res = mysqli_fetch_array($result))
		{
			$storytitile = $res['storytitile'];
			$story = $res['story'];
			$cdate = $res['cdate'];
			$sdate = $res['sdate'];
		}
?>


<form action="#" class="form" method="POST">
			<h2>Edit your BreakUp Story</h2>

	<div>
		<div>
			<label>Story Title</label>
			<input required type="text" value="<?php echo $storytitile; ?>" name="storytitile">
		</div>

		<textarea required name="story"><?php echo $story ?></textarea>

		<div>
			<label>Careent Date</label>
			<input required type="cdate" value="<?php echo $cdate; ?>" name="cdate">
		</div>
		<div>
			<label>Story Date</label>
			<input required type="sdate" value="<?php echo $sdate; ?>" name="sdate">
		</div>
	</div>

	<input type="submit" value="Update" name="update">

	<?php 
		if (isset($_POST['update'])) {

			$story = $_POST['story'];
			$storytitile = $_POST['storytitile'];
			$cdate = $_POST['cdate'];
			$sdate = $_POST['sdate'];

			$result = mysqli_query($connet, "UPDATE `breakuppost` SET `story`='$story',`storytitile`='$storytitile',`cdate`='$cdate',`sdate`='$sdate' WHERE id=$id");

			if ($result) 
			{
				header('location: index.php');
			}else 
			{
				echo "Update Unsuccess";
			}
		}



	?>

</form>