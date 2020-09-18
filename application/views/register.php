<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script type="text/javascript">
      
    </script>
   <style type="text/css">label {color: white;}</style>
  <title>Register Now</title>
</head>
<body>
<div class= "container" style="color: white;">
<div class="shadow-lg p-3 mb-5 bg-success rounded">
<form action="<?php echo base_url('AdminC/create');?>" enctype='multipart/form-data' method="post">
  <h1 style="text-align: center;">Register Now!</h1>
  <div class="table-responsive">
  <table class="table table-borderless"  align="center">
    <tr>
      <td>
        <div class="col-lg-6">
          <div class="form-group">
            <label for="name">Name:</label>
              <?php echo form_input(['class'=>'form-control','id'=>'name2','required','placeholder'=>'Enter your name','type'=>'text','name'=>'name','value'=>set_value('name')]);  ?>
          </div>
        <div class="col-lg-6" style="margin-top:40px;">
          <?php  echo form_error('name');  ?>
        </div>
        </div>
      </td>
      <td>
        <div class="col-lg-6">
          <div class="form-group">
            <label for="password">Password:</label>
              <?php  echo form_password(['class'=>'form-control','id'=>'passwd','type'=>'password','placeholder'=>'Enter Password','name'=>'password',    ]); ?>
          </div>
          <div class="col-lg-6" style="margin-top:40px;">
            <?php  echo form_error('password');  ?>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="col-lg-6">
          <div class="form-group">
            <label for="address">Address:</label>
            <?php  echo form_input(['class'=>'form-control','type'=>'textarea','id'=>'addr','placeholder'=>'Enter Address','name'=>'address','value'=>set_value('address')]); ?>
          </div>
        <div class="col-lg-6" style="margin-top:40px;">
          <?php  echo form_error('address');  ?>
        </div>
        </div>
      </td>
      <td>
        <div class="col-lg-6">
          <div class="form-group">
              <label for="dob">Date of Birth:</label>
                <?php  echo form_input(['class'=>'form-control','type'=>'date','id'=>'dobd','placeholder'=>'Enter your date of birth','name'=>'dob','value'=>set_value('dob')]); ?>
          </div>
          <div class="col-lg-6" style="margin-top:40px;">
            <?php  echo form_error('dob');  ?>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="col-lg-6">
          <div class="form-group">
            <label for="mob">Mobile No:</label>
            <?php  echo form_input(['class'=>'form-control','type'=>'text','placeholder'=>'Enter your mobile number','name'=>'mob','id'=>'mobs','value'=>set_value('mob')]); ?>
          </div>
        <div class="col-lg-6" style="margin-top:40px;">
          <?php  echo form_error('mob');  ?>
        </div>
        </div>
      </td>
      <td>
        <div class="col-lg-6">
          <div class="form-group">
          <label for="email">Email:</label>
          <?php  echo form_input(['class'=>'form-control','type'=>'email','placeholder'=>'Enter your mail address','name'=>'email','id'=>'email1','value'=>set_value('email')]); ?>
          </div>
          <div class="col-lg-6" style="margin-top:40px;">
            <?php  echo form_error('email');  ?>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="col-lg-6">
          <div class="form-group">
             <label for="course">Course Name:</label>
             <?php  echo form_input(['class'=>'form-control','type'=>'text','placeholder'=>'Enter your course name','name'=>'course','id'=>'course','value'=>set_value('course')]); ?>
          </div>
        <div class="col-lg-6" style="margin-top:40px;">
          <?php  echo form_error('course');  ?>
        </div>
        </div>
      </td>
      <td>
        <div class="col-lg-6">
          <div class="form-group">
          <label for="sem">Semester:</label>
         <?php  echo form_input(['class'=>'form-control','id'=> 'sems','type'=>'text','placeholder'=>'Enter your semester','name'=>'sem','value'=>set_value('sem')]); ?>
          </div>
          <div class="col-lg-6" style="margin-top:40px;">
             <?php  echo form_error('sem');  ?>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <label for="pic"> Select Image:</label>
        <?php  echo form_upload([ 'id'=> 'picc', 'name'=>'pic']); ?>
        <?php  if(isset($upload_error)) {echo $upload_error; }  ?>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit' ,'name'=>'save']);  ?>
        <?php  echo form_reset(['type'=>'reset','class'=>'btn btn-danger','value'=>'Reset']);  ?>
      </td>
    </tr>
  </table>
</div>
</form>
</div>
</div>
</body>
</html>