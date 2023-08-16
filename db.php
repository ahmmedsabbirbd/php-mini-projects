<?php
try{
	$con=new PDO("mysql:host=localhost;dbname=mehaking","root","");
}catch(PDOExection $e){
	echo $e->getMessage();
}
?>