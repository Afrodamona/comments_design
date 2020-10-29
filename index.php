<!DOCTYPE html>
<html>
<head>
	<title>Comments design</title>
	<!-- Here i will have all the bootstrap and font awesome plugin--->
</head>
<body class="bg-dark">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5 bg-light rounded mt-5">
				<h4 class="text-center p-2">Write your comment hee</h4>
				<form action="index.php" method="POST" class="p-2">
					<div class="form-group">
						<input type="text" name="name" class="form-group rounded-0" placeholder="Enter your name here" required="">
					</div>
					<div class="form-group">
						<textarea name="comment" class="form-group rounded-0" placeholder="Write your comment here" required=""></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary rounded-0" value="Post Comment">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>