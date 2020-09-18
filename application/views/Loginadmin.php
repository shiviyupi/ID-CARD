<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container" style="text-align: center;">
	<h1><strong>Welcome to Admin Page</strong></h1>
	</div>
	<div class="row">
    	<div class="col-lg-12" style="text-align:center;">           
        	<h2>Issued Admit Card List           
            	<div>
               	<a class="btn btn-primary" href="<?php echo base_url('AdminC/Create');?>"> Create New Admit Card</a>
            </div>
        </h2>
     </div>
	</div>
<div class="table table-responsive">
	<table class="table table-striped">
		<tr>
			<td>UID</td>
			<td>Name</td>
			<td>Photo</td>
			<td>Address</td>
			<td>DOB</td>
			<td>Email</td>
			<td>Mobile</td>
			<td>Course</td>
			<td>Sem</td>
			<td></td>
		</tr>
		<?php foreach($data as $d){	$src="https://idcard-2020.000webhostapp.com/";
		$src.=$d->pic;
		$imgsyn="<img width=100px; height=100px; src=".$src.">";
		;?>
			
		<tr>
			<td><?php echo $d->id;?></td>
			<td><?php echo $d->name;?></td>
			<td><?php echo $imgsyn;?></td>
			<td><?php echo $d->address;?></td>
			<td><?php echo $d->dob;?></td>
			<td><?php echo $d->email;?></td>
			<td><?php echo $d->mob;?></td>
			<td><?php echo $d->course;?></td>
			<td><?php echo $d->sem;?></td>
		<td>
		<a class="btn btn-warning btn-xs" href="<?php echo base_url('AdminC/viewid/'.$d->id); ?>">View ID Card</a>
          </td>
		</tr>
	<?php }?>
	</table>
	<table align="center"><tr>
	<td>
			<form method="post">
			&nbsp; &nbsp; <input type="submit"  value="Logout" class="btn btn-success" name="s" />
			</form>
			<?php if (isset($_POST['s'])) redirect (base_url().'Landing')?>
	</td>
</tr></table>
</div>
</body>
</html>