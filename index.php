<?php require_once('initialize.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Home</title>
</head>
<body>
	<div class="container">
		<h1> Filter Table </h1>
		<div class="form-group">
			<p id="msg" class="text-danger"></p>
			<input type = "text" class="form-control" placeholder="name" id="name">
		</div>	
		<button type = "button" class="btn btn-primary" id="send">Submit</button>
		<hr/>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th>Column1</th>
					<th>Column2</th>
					<th>Column3</th>
					<th>Column4</th>
					<th>Column5</th>
					<th>Column6</th>
				</tr>
			</thead>
			<tbody id="my_table">
			</tbody>
		</table>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/filter.js"></script>
</body>
</html>