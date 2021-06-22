<?php
include('db.php');
$sql="update visitor_counter set visitor_counter=visitor_counter+1";
$stmt=$con->prepare($sql);
$stmt->execute();

$sql="select visitor_counter from visitor_counter";
$stmt=$con->prepare($sql);
$stmt->execute();
$arr=$stmt->fetchAll(PDO::FETCH_ASSOC);
$counter=$arr[0]['visitor_counter'];
$count=strlen($counter);
?>
<div>
	<div id="visitor_counter_box">Total Website Visitors</div>
	<ul id="visitor_counter">
		<?php for($i=0;$i<$count;$i++){?>
		<li><?php echo $counter[$i]?></li>
		<?php } ?>
	</ul>
</div>