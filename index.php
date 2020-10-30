
<?php 

require 'action.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title>Comments design</title>
	<!-- Here i will have all the bootstrap and font awesome plugin--->

<!-- font awesome plugin--->
<script src="https://kit.fontawesome.com/bed4e77d2b.js" crossorigin="anonymous"></script>


	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
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

						<h5 class="float-right text-success p-2"></h5>
					</div>
				</form>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-5 rounded bg-light p-3">
				<?php 
					$sql1 = "SELECT * FROM comment_table ORDER BY id DESC";
					$result = $conn->query($sql1);
					while ($row = $result->fetch_assoc()) {
						# code...
					}
				?>
				<div class="card mb-2 border-secondary">
					<div class="card-header bg-secondary py-1 text-light">
						<span class="font-italic">
							POSTED BY: <?= $row['name']?>
						</span>
						<span class="float-right font-italic"> ON: <?= $row['cur_date']?></span>
					</div>
					<div class="card-body py-2">
						<p class="card-text"><?= $row['comment']?></p>
					</div>
					<div class="card-footer py-2">
						<div class="float-right">
							<a href="action.php?del=<?= $row['id'] ?>" class="text-danger mr-2" onclick="return confirm('Do you want to delete this comment?');" title="Delete"><i class="fas fa-trash"></i></a>
							<a href="action.php?edit=<?= $row['id'] ?>" class="text-success" title="edit"><i class="fas fa-edit"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>