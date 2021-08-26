<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png"> 
  <title><?php echo $this->config->item('product_name')." | ".$this->lang->line("login"); ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/login_new/css/normalize.min.css')?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/v4-shims.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/login_new/css/style.css');?>">

  <?php 
  //if($this->config->item("language")=="arabic")
  if($this->is_rtl) 
  { ?>
    <style>
    input{text-align:right !important;}
    </style>
  <?php }
  ?>  
</head>

<body style="padding-top:50px;">
  <a style="magin:0 auto;display:block;text-align: center;" href="<?php echo site_url();?>" ><img style="max-width: 200px;" src="<?php echo base_url();?>assets/images/logo.png" alt="<?php echo $this->config->item('product_name');?>" class="img-responsive center-block"></a>
  <div class="logmod">
  <div class="logmod__wrapper">
  

    <span class="logmod__close"><?php echo $this->lang->line("close"); ?></span>
    <div class="logmod__container">
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a href=""><i class="fa fa-sign-in-alt"></i> <?php echo $this->lang->line("login"); ?></a></li>
        <li data-tabtar="lgm-1"><a href="<?php echo base_url('home/sign_up');?>"><i class="fa fa-user-circle"></i> <?php echo $this->lang->line("sign up"); ?></a></li>
      </ul>
      <div class="logmod__tab-wrapper">
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <!-- <span class="logmod__heading-subtitle"><?php echo $this->lang->line('Enter your email and password'); ?></span> -->
          <br>

          <?php 
            if($this->session->flashdata('login_msg')!='') 
            {
                echo "<div class='alert alert-danger text-center'>"; 
                    echo $this->session->flashdata('login_msg');
                echo "</div>"; 
            }   
            if($this->session->flashdata('reset_success')!='') 
            {
                echo "<div class='alert alert-success text-center'>"; 
                    echo $this->session->flashdata('reset_success');
                echo "</div>"; 
            } 
            if($this->session->userdata('reg_success') != ''){
              echo '<div class="alert alert-success text-center">'.$this->session->userdata("reg_success").'</div>';
              $this->session->unset_userdata('reg_success');
            }  
            if($this->session->userdata('jzvoo_success') != ''){
              echo '<div class="alert alert-success text-center">'.$this->lang->line("your account has been created successfully. please login.").'</div>';
              $this->session->unset_userdata('jzvoo_success');
            }     
            if(form_error('username') != '' || form_error('password')!="" ) 
            {
              $form_error="";
              if(form_error('username') != '') $form_error.=form_error('username');
              if(form_error('password') != '') $form_error.=form_error('password');
              echo "<div class='alert alert-danger text-center'>".$form_error."</div>";
             
            }     
          ?>

        </div> 
        <div class="logmod__form">
          <form accept-charset="utf-8" action="<?php echo site_url('home/login');?>" method="post" class="simform">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-email"><?php echo $this->lang->line("email"); ?> *</label>
                <input class="string optional" required name="username" id="user-email" placeholder="" type="email" autofocus="yes" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-pw"><?php echo $this->lang->line("password"); ?> *</label>
                <input class="string optional" required name="password" id="user-pw" placeholder="" type="password" />
                <span class="hide-password"><i class="fa fa-eye"></i></span>
              </div>
            </div>
            <div class="simform__actions">
              <div class="special-con"><a class="special" role="link" href="<?php echo site_url();?>home/forgot_password"><?php echo $this->lang->line("Forgot your password?"); ?><br><?php echo $this->lang->line("Click here"); ?></a></div>
              <button class="sumbit" name="commit" type="submit"><i class="fa fa-sign-in-alt"></i> <?php echo $this->lang->line("login"); ?></button>
            </div> 
          </form>
        </div> 
        <div class="logmod__alter">

        <div class="text-center social-login">      
          <?php $google_login_button2=str_replace(array("ThisIsTheLoginButtonForGoogle","btn-danger"),array($this->lang->line("login with google"),"btn-outline-danger"), $google_login_button); ?>
          <?php $fb_login_button2=str_replace(array("ThisIsTheLoginButtonForFacebook","btn-primary"),array($this->lang->line("login with facebook"),"btn-outline-primary"), $fb_login_button); ?>
          <?php echo $fb_login_button2."&nbsp;".$google_login_button2; ?>
        </div>
        <br>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo base_url('assets/login_new/js/jquery.min.js');?>"></script>
<script  src="<?php echo base_url('assets/login_new/js/index.js');?>"></script>


<?php $this->load->view("include/fb_px"); ?> 
<?php $this->load->view("include/google_code"); ?> 

</body>

</html>
