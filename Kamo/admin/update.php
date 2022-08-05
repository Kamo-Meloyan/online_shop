<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../main.css">
	<title>Update</title>
</head>
<body>
<div class="container">

			<div class="row">
				<div class="col">
	<form method="POST" action="../update-process.php/?id=<?php echo $_GET['id'];?>">
<div class="form-item">
		<input type="text" name="name" placeholder="Name" required>
</div>
<div class="form-item">
		<input type="text" name="price" placeholder="Price" required>
</div>
<div class="form-item">
		<input type="text" name="image_url" placeholder="Image Url" required>
</div>
<div class="form-item">
		<textarea  name="description" placeholder="Description"></textarea>
</div>		
<div class="form-item">
		<input type="submit" name="update" class="btn">
</div>
	</form>
	</div>
	</div>
	</div>
</body>
</html>




