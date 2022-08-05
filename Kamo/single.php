<?php
include_once "admin/connect.php";

$id = $_GET["id"];
$sql = "SELECT * FROM `products` WHERE `id` = '$id'";
$products = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($products);
// var_dump($product);
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../admin/main.css">
	<title></title>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="logo">
					<a href="index.html"><img src="../img/mc.png"></a>
				</div>
				<div class="nav">
					<ul class="row">
						<li><a href="../index.php">Home</a></li>
						<li><a href="../product.php">Product</a></li>
						<li><a href="../page.php">Page</a></li>
						<li><a href="../contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<main>
<div class="container">
<div class="row">
<h2 class="head single"><?php echo $product["name"]; ?></h2>
<div class="row">
<div class="col">
<img src="<?php echo $product["image_url"]; ?>">
</div>
<div class="col">
<span><?php echo $product["description"]; ?></span>
</div>
</div>
<div class="product_button index">
<span class="cost"><?php echo $product["price"]; ?></span>
<a href="#">Click here!</a>
</div>
</div>
</div>
</main>
			<footer>
		<div class="container">
			<div class="row">
				<div class="nav">
					<ul class="row">
						<li><a href="https://www.fb.com" target="_blank"><img src="../img/facebook.png" class="img"></a></li>
						<li><a href="https://www.instagram.com" target="_blank"><img src="../img/instagram.png" class="img"></a></li>
						<li><a href="https://www.youtube.com" target="_blank"><img src="../img/youtube.png" class="img"></a></li>
						<li><a href="https://www.telegram.org" target="_blank"><img src="../img/telegram.png" class="img"></a></li>
						<li><a href="https://www.vk.com" target="_blank"><img src="../img/vk.png" class="img"></a></li>
					</ul>
				  </div>
				   <div class="copyright">
				   	<p>Designed and Developed by Kamo Meloyan</p>
				   	
				   </div>
			   </div>
		   </div>
	</footer>
</body>
</html>