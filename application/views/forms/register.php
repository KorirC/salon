<html>
<head>
<title>Form</title>
<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="pagecontainer-reg">
				<div class="headertext">
					 REGISTER <hr>
        </div>
<div class="formcard">
<?php echo validation_errors(); ?>
<?php echo form_open('register'); ?>
<?php 
if(isset($message)){
  echo $message;
}

?>
<div class="register_top">
      <h2>REGISTER</h2>
    <P style="text-align:center;FONT-FAMILY: -webkit-pictograph;">
    We aim to be your home from home,where you always feel special and welcome within our relaxed, <br> unhurried surroundings, all designed to ensure your total relaxation. </P>
 </div>


<!-- closed the top card there -->
     <!-- register form-->
    <div class="form-group-register">	

    <!--Beginning of row-->
    
    <div class="row" style="">
    <div class="col-md-9 col-lg-9 col-sm-12" >
    
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name" required>
    </div>

     <div class="form-group">
      <label for="gender">Gender:</label><br>
      <input type="radio" name="gender" value='Male'>Male <br>
      <input type="radio" name="gender" value='Female'>Female
    </div>

    <div class="form-group">	
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>

    <div class="form-group">
      <label for="idno">ID number:</label>
      <input type="int" class="form-control" name="idno" placeholder="Enter ID number">
    </div>

     <div class="form-group">
      <label for="phoneno">Phone number:</label>
      <input type="int" class="form-control" name="phoneno" placeholder="Enter Phone number">
    </div>
    <!-- <div class="form-group">
    <select name="level">
        <option value="1" >Admin</option>
        <option value="2" >Client</option>
    </select>
      
    </div> -->

     <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd">
  </div>

  <div class="form-group">
    <label for="pwd">Password Confirmation:</label>
    <input type="password" class="form-control" name="cpwd">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
  </div>
  </div>
</form>

</div>
</body>
</html>