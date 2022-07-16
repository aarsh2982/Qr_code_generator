<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>QR code generator</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">QRCode Generator</h1>
	<div class="row">
		<div class="col-sm-3 col-sm-offset-3">
			<form method="POST">
				<div class="form-group">
					<label>Name:</label> <br>
					<input type="text" class="form-control" name="text_code"> <br>
					<label>Email:</label> <br>
					<input type="email" class="form-control" name="Email">
				</div> 
				<button type="submit" class="btn btn-primary" name="generate">Generate QRCode</button>
			</form>
		</div> 
		<div class="col-sm-3">
			<?php
				if(isset($_POST['generate'])){
					$code = $_POST['text_code'];
					$email = $_POST['Email'];
					echo "<img src='https://chart.googleapis.com/chart?chs=250x200&cht=qr&chl=$code'$email'&choe=UTF-8'>";
				}
			?>
		</div>
	</div>
</div>
</body>
</html>