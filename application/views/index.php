<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>ID Card Generation</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<?php
        if(isset($msg))
        {
            echo "<script>alert('$msg');</script>";
        }
      ?>
		<div style="text-align: center; align-items: center;">
		<h1>Dr. Shakuntala Mishra National Rehabilitation University</h1>
		<h2>Automated ID Card Generation System</h2>
		<img class="img-fluid" src="http://dsmru.up.nic.in/images/demo/slider/1.jpg"><br><br><br>
		<div class="shadow-lg p-3 mb-5 bg-success rounded">
		<table align="center"><td>
			<div style="text-align: left; color:  white">
		<h2 style="text-align: center;">Get Instantly Ur ID Card</h2>
		<h3> Just input ur UID</h3>
	</div>
	</td><td></td><td></td><td></td><td></td><td></td>
	<td>
		<form class="form-inline"  method="post" style="align-content: center;">
			<input type='text' class="form-control" name='id' placeholder="UID">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
			<input type='submit' name='submit' value='Submit' class="btn btn-primary">
			 &nbsp;&nbsp;
			<a class="btn btn-danger" href="<?php echo base_url('Login');?>"> Login</a></td></tr>
		</form>
	</td></table>
		</div>
		</div>
		<?php
			if(isset($_POST['submit']))
			{
				redirect (base_url().'Landing/view/'.$_POST['id']);
			}
		?>
	</div>
	<br>
	<footer>
		<div class="container" style="text-align: center;">
			<hr>
			&#169;2020 Dr. Shakuntala Mishra National Rehabilitation University
		</div>
	</footer>
</body>
</html>