<?php
require_once('content.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>AJAX Form</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<section>
			<p><a href="#" class="edit-form">Edit info &raquo;</a></p>
			<form action="content.php" method="post" class="ajax" style="display: none;">
				<input name="name" type="text" placeholder="Enter Name" />
				<input name="email" type="text" placeholder="Enter E-Mail" />
				<textarea name="message" placeholder="Enter Bio"></textarea>
				<input type="submit" value="Update!" class="submit" />
			</form>

			<div class="responses">
				<?php
					bioBlock($ourBio->name, $ourBio->email, $ourBio->bio);
				?>
			</div>
		</section>
		<section class="github">
			<h3>Code on GitHub 
				<a href="https://github.com/adamaoc/ajax-php-form">
					HERE &raquo;
					<img src="GitHub-Mark.png" alt="github logo" />
				</a>
			</h3>
		</section>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="main.js"></script>
	</body>
</html>