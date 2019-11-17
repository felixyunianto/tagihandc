<!DOCTYPE html>
<html lang="en">
<head>
  <title>Member | TagihanDC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/') ?>css/user.css">
       
  <script src="<?php echo base_url('bootstrap/') ?>js/jquery.min.js"></script>
  <script src="<?php echo base_url('bootstrap/') ?>js/popper.min.js"></script>
  <script src="<?php echo base_url('bootstrap/') ?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('bootstrap/') ?>js/user.js"></script>
  <link rel="shortcut icon" href="<?php echo base_url() ?>iconn.ico" type="image/x-icon">
  <style>
  body {
   background-image: url('<?php echo base_url('bootstrap/') ?>mt.png');
   background-position: center;
   background-size: cover;
   background-repeat: no-repeat;
   min-height: 100vh;
   font-family: 'Roboto', sans-serif;
}</style>
</head>
<body>
<div class="materialContainer">


   <div class="box">

      <div class="title">LOGIN</div>

      <div class="input">
         <label for="name">Username</label>
         <input type="text" name="name" id="name">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="pass">Password</label>
         <input type="password" name="pass" id="pass">
         <span class="spin"></span>
      </div>

      <div class="button login">
         <button><span>GO</span> <i class="fa fa-check"></i></button>
      </div>

      <a href="" class="pass-forgot">Forgot your password?</a>

   </div>

   <div class="overbox">
      <div class="material-button alt-2"><span class="shape"></span></div>

      <div class="title">REGISTER</div>

      <div class="input">
         <label for="regname">Username</label>
         <input type="text" name="regname" id="regname">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="regpass">Password</label>
         <input type="password" name="regpass" id="regpass">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="reregpass">Repeat Password</label>
         <input type="password" name="reregpass" id="reregpass">
         <span class="spin"></span>
      </div>

      <div class="button">
         <button><span>NEXT</span></button>
      </div>


   </div>

</div>
</body>
</html>