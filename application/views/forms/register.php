<html>
<head>
<title>Form</title>
<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
<style>
.error{
  color:red;
  
}
</style>
</head>
<body>
<div class="pagecontainer-reg">
				<div class="headertext">
					 REGISTER <hr>
        </div>
<div class="formcard">
<!-- <?php echo validation_errors(); ?> -->
<?php echo form_open('register'); ?>
<?php 
if(isset($message)){
  echo $message;
}

?>
<div class="register_top">
      <h2>REGISTER</h2>
    <!-- <P style="text-align:center;FONT-FAMILY: -webkit-pictograph;">
    We aim to be your home from home,where you always feel special and welcome within our relaxed, <br> unhurried surroundings, all designed to ensure your total relaxation. </P> -->
 </div>


<!-- closed the top card there -->
     <!-- register form-->
    <div class="form-group-register">	

    <!--Beginning of row-->
    
    <div class="row" style="">
    <div class="col-md-9 col-lg-9 col-sm-12" >
    
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>" placeholder="Enter name" required>
      <?php echo form_error('name', '<div class="error">', '</div>'); ?>
    </div>

     <div class="form-group">
      <label for="gender">Gender:</label><br>
      <input type="radio" name="gender" value="Male">Male <br>
      <input type="radio" name="gender" value="Female">Female
      <?php echo form_error('gender', '<div class="error">', '</div>'); ?>
    </div>

    <div class="form-group">	
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" placeholder="Enter email">
      <?php echo form_error('email', '<div class="error">', '</div>'); ?>
    </div>

    <div class="form-group">
      <label for="idno">ID number:</label>
      <input type="int" class="form-control" name="idno" value="<?php echo set_value('idno'); ?>" placeholder="Enter ID number">
      <?php echo form_error('idno', '<div class="error">', '</div>'); ?>
    </div>

     <div class="form-group">
      <label for="phoneno">Phone number:</label>
      <input type="int" class="form-control" name="phoneno" value="<?php echo set_value('phoneno'); ?>" placeholder="Enter Phone number">
      <?php echo form_error('phoneno', '<div class="error">', '</div>'); ?>
</div>
     <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd" value="<?php echo set_value('pwd'); ?>">
  </div>

  <div class="form-group">
    <label for="pwd">Password Confirmation:</label>
    <input type="password" class="form-control" name="cpwd" value="<?php echo set_value('cpwd'); ?>">
  </div>
<div class="form-group">
  <button type="submit" class="btn btn-success">Submit</button>
  </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</form>
<div>

 
