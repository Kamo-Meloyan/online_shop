<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin\main.css">
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>

</head>
<body>
<?php include_once "header.php";?>


	<main>
		<div class="container">
			<h2 class="heading">Contact us</h2>
			<div class="row">
				<div class="col">
					<form>
						<div class="form-item">
							<label>Name Surname</label>
							<input type="text" placeholder="Name Surname">
						</div>
						<div class="form-item">
							<label>Email</label>
							<input type="email" placeholder="youremail@gmail.com">
						</div>
						<div class="form-item">
							<label>Phone</label>
							<input type="number" placeholder="099-99-99-99">
						</div>
						<div class="form-item">
							<label>Country</label>
							<select>
								<option>Afghanistan</option>
								<option>Albania</option>
								<option>Algeria</option>
								<option>Andorra</option>
								<option>Angola</option>
								<option>Antigua and Barbuda</option>
								<option>Argentina</option>
								<option>Armenia</option>
								<option>Australia</option>
								<option>Austria</option>
							</select>
						</div>
						<div class="form-item">
							<label>Message</label>
							<textarea placeholder="Enter your message"></textarea>	
						</div>
						<button class="btn">Send Message</button>
					</form>
				</div>
				<div class="col">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97009.29384915064!2d44.904039169758114!3d40.55174135282521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404046c39477eb71%3A0xeb5b902ad8d28d76!2sSevan!5e0!3m2!1sen!2s!4v1637420744900!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				</div>
			</div>
		</div>
	</main>
	<?php include_once "footer.php";?>

</body>
</html>