<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin\main.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
</head>
<body>
<?php include_once "header.php";?>
	<main>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/mcs.png">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/mcs2.png">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/mcs3.png">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/mcs4.png">
  <div class="text"></div>
</div>



<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<div class="container">
			<h2 class="heading">Answers to me</h2>
			<div class="row">
				<div class="col">
					
					<form>
							<div class="form-item">
							
							<input type="email" placeholder="youremail@gmail.com">
						</div>
					</form>
				</div>
			</div>
			<div class="product_btn page">
				<a href="#">Send to me!</a>
			</div>
		</div>




	</main>
	<?php include_once "footer.php";?>
  <script type="text/javascript">
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>