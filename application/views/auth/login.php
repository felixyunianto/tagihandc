<!DOCTYPE html>
<html lang="en">
<head>
  <title>Masuk | TagihanDC</title>
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
   background-image: url('<?php echo base_url('bootstrap/') ?>Bg.jpg');
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

      <div class="title">MASUK</div>

      <?= $this->session->flashdata('message'); ?>
      <form class="user" method="post" action="<?= base_url('auth'); ?>">

      <div class="input">
         <label for="email">Email</label>

         <input type="text" id="email" name="email"  value="<?= set_value('email'); ?>">
         <span class="spin"></span>
      </div>
      <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

      <div class="input">
         <label for="password">Password</label>
         <input type="password" id="password" name="password"> 
         <span class="spin"></span>
      </div>
      <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

      <div class="button login">
         <button type="submit"><span>MASUK</span> <i class="fa fa-check"></i></button>
      </div>
    </form>

      <a href="" class="pass-forgot">Lupa Password?</a>

   </div>

   <div class="overbox">
      <div class="material-button alt-2"><span class="shape"></span></div>

      <div class="title">DAFTAR</div>

      <form class="user" method="post" action="<?= base_url('auth/registration');  ?>" >
      <div class="input">
         <label for="name">Nama Lengkap</label>
         <input type="text" id="name" name="name" value="<?= set_value('name'); ?>">
                  <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="email1">Email</label>
         <input type="text" id="email1" name="email" value="<?= set_value('email'); ?>">
                   <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="password1">Password</label>
         <input type="password" id="password1" name="password1">
         <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
         <span class="spin"></span>
      </div>

      <div class="button">
         <button type="submit"><span>DAFTAR SEKARANG</span></button>
      </div>
    </form>



   </div>

</div>
</body>  
</html>  