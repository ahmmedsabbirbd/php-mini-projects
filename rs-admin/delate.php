<?php  

include('../connet.php');

$id= $_GET['id'];

$result = mysqli_query($connet, "SELECT * from `breakuppost` where id=$id");

	while($res = mysqli_fetch_array($result))
		{
			$storytitile = $res['storytitile'];
			$story = $res['story'];
			$cdate = $res['cdate'];
			$sdate = $res['sdate'];
		echo '<div class="story">';
			echo '<h2>'.$storytitile.'</h2>';
			echo '<p>'.$story.'</p>';
			echo '<span>Publish date : '.$cdate.'</span>';
			echo '<span class="sd">Story Date : '.$sdate.'</span>';
			echo "<a href=\"confrom-delate.php?id=$res[id]\" onclick='delate()'>Delate Story</a>";
		echo '</div>';
		}




?>

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

<script>
	function delate () {
		alert("Are Your sure boss");
	}
</script> 
	 
 

