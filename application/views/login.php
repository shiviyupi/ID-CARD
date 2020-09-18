<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <style type="text/css">
    body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
  </style>
  <title>LOGIN</title>
</head>
<body>
<?php
        if(isset($msg))
        {
            echo "<script>alert('$msg');</script>";
        }
?>
<div class="sidenav">
         <div class="login-main-text">
            <h2>ID Card Generator<br>Login Page</h2>
            <p>Login from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="<?php echo base_url('Login/post_login');?>" enctype='multipart/form-data' method="post"> 
                  <div class="form-group">
                     <label for="username">Username:</label>
                     <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter your email','type'=>'email','name'=>'username','value'=>set_value('username')]); ?>
                     <?php  echo form_error('username');  ?>
                  </div>
                  <div class="form-group">
                     <label for="password">Password:</label>
                     <?php  echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password','name'=>'password','value'=>set_value('password')]); ?>
                     <?php  echo form_error('password');  ?>
                  </div>
                   
              
            <form method="post">
              <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-success','value'=>'Login' ,'name'=>'login']);  ?>
 <?php  echo form_reset(['type'=>'reset','class'=>'btn btn-info','value'=>'Reset']);  ?>
            <input type="submit"  value="Return Home Page" class="btn btn-danger" name="s" />
            </form>
            <?php if (isset($_POST['s'])) redirect (base_url().'Landing')?>
               </form>
            </div>
         </div>
      </div>
</body>
</html>