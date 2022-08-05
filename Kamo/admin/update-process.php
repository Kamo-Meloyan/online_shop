<?php 

include_once "connect.php";

if (isset($_POST["update"])) {
	$id=$_GET["id"];
	$name=$_POST["name"];
	$price=$_POST["price"];
	$image_url=$_POST["image_url"];
	$description=$_POST["description"];

	$sql = "UPDATE `products` SET 
	`name` = '$name',
	`price` = '$price',
	`description` = '$description',
	`image_url`= '$image_url' WHERE id='$id' ";
 
mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location:../index.php");
}
else{
	header("Location:404.php");
}

 ?>

