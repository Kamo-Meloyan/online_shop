<?php
include_once "admin/connect.php";
$sql = "SELECT * FROM `products`";
$products = mysqli_query($conn,$sql);

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	
		<link rel="stylesheet" type="text/css" href="admin\main.css">
		   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<?php include_once "header.php";?>
	<main>
<div class="parent">
<?php
    if (mysqli_num_rows($products) > 0) {
        while ($product = mysqli_fetch_assoc($products)) {?>
<div class="product">
	<div>

	</div>
	<div>
	<img src='<?php echo $product["image_url"]; ?>'>
    </div>
    <div class="product_name">
    	<h4><a href="#"><?php echo $product["name"]; ?></a></h4>
    </div>
    <div class="product_description">
    	<p><?php echo $product["description"]; ?></p>
    </div>
    <div class="product_price">
		<div class="product_price_item">
			<span>Գինը</span>
			<span class="cost"><?php echo $product["price"]; ?></span>
		</div>   
		<div class="product_btn">
			<a href="#">Գնել</a>
			<a href="single.php/?id=<?php echo $product["id"];?>">Կարդալ ավելին</a>
		</div> 	
    </div>
</div>
<?php
		}
	} else {
		echo "0 resutls";
	}
?>


<!-- <div class="product">
	<div>
	<img src="img/gbf.jpg">
    </div>
    <div class="product_name">
    	<h4><a href="#">Samsung Galaxy Book Flex NP930QCG (Stylus)</a></h4>
    </div>
    <div class="product_description">
    	<p>13.3 դյույմ / Core i7 1065G7 / 8 ԳԲ RAM / 512 ԳԲ SSD / Intel UHD Graphics / Windows 10</p>
    </div>
    <div class="product_price">
		<div class="product_price_item">
			<span>Գինը</span>
			<span class="cost">637 200 ֏</span>
		</div>   
		<div class="product_price_item">
			<span>Գինը կանխիկ</span>
			<span class="cost cash">590 000  ֏</span>
		</div> 
		<div class="product_price_item">
			<span>Ամսական</span>
			<span class="cost">32 900 ֏</span>
		</div> 
		<div class="product_btn">
			<a href="#">Գնել</a>

			<a href="single.html">Կարդալ ավելին</a>
		</div> 	
    </div>
</div>
<div class="product">
	<div>
	<img src="img/ly9.png">
    </div>
    <div class="product_name">
    	<h4><a href="#">Lenovo Yoga 9 15IMH5</a></h4>
    </div>
    <div class="product_description">
    	<p>15.6 դյույմ / Core i7 10750H / 16 ԳԲ RAM / 1 ՏԲ SSD / GeForce GTX1650Ti 4Gb / Windows 10</p>
    </div>
    <div class="product_price">
		<div class="product_price_item">
			<span>Գինը</span>
			<span class="cost">860 700 ֏</span>
		</div>   
		<div class="product_price_item">
			<span>Գինը կանխիկ</span>
			<span class="cost cash">797 000 ֏</span>
		</div> 
		<div class="product_price_item">
			<span>Ամսական</span>
			<span class="cost">44 400 ֏</span>
		</div> 
		<div class="product_btn">
			<a href="#">Գնել</a>


			<a href="single.html">Կարդալ ավելին</a>
		</div>
		</div>
		</div>
<div class="product">	
		<div>
			<img src="img/asus.jpg">
		</div>   
   <div class="product_name">
    	<h4><a href="#">Asus TUF Dash FX516PM</a></h4>
    </div>
    <div class="product_description">
    	<p>15.6 դյույմ / Core i7 11370H / 8 ԳԲ RAM / 512 ԳԲ SSD / GeForce RTX3060 6Gb / Dos</p>
    </div>
    <div class="product_price">
		<div class="product_price_item">
			<span>Գինը</span>
			<span class="cost">799 200 ֏</span>
		</div>   
		<div class="product_price_item">
			<span>Գինը կանխիկ</span>
			<span class="cost cash">740 000 ֏</span>
		</div> 
		<div class="product_price_item">
			<span>Ամսական</span>
			<span class="cost">41 200 ֏</span>
		</div> 
		<div class="product_btn">
			<a href="#">Գնել</a>
			<a href="#">Կարդալ ավելին</a>
		</div> 	
    </div>
</div>
<div class="product">	
		<div>
			<img src="img/dell.jpg">
		</div>   
   <div class="product_name">
    	<h4><a href="#">Asus TUF Dash FX516PM</a></h4>
    </div>
    <div class="product_description">
    	<p>15.6 դյույմ / Core i7 11370H / 8 ԳԲ RAM / 512 ԳԲ SSD / GeForce RTX3060 6Gb / Dos</p>
    </div>
    <div class="product_price">
		<div class="product_price_item">
			<span>Գինը</span>
			<span class="cost">799 200 ֏</span>
		</div>   
		<div class="product_price_item">
			<span>Գինը կանխիկ</span>
			<span class="cost cash">740 000 ֏</span>
		</div> 
		<div class="product_price_item">
			<span>Ամսական</span>
			<span class="cost">41 200 ֏</span>
		</div> 
		<div class="product_btn">
			<a href="#">Գնել</a>



			<a href="single.html">Կարդալ ավելին</a>
		</div> 	
    </div> -->

</div>
</div>
</div>
</main>
<?php include_once "footer.php";?>
</body>
</html>