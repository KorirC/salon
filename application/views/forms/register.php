<html>
<head>
<title>Form</title>
<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/img"); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="pagecontainer">
				<div class="headertext">
					 REGISTER <hr>
        </div>

<div class="formcard " style="background-color:#222; color:white; font-size:large; margin:; max-width:700px; margin-bottom:30px;margin-top:20px;margin-left:200px;">
<?php echo validation_errors(); ?>

<?php echo form_open('register'); ?>
<?php 
if(isset($message)){
  echo $message;
}

?>
      <div>
      <h2 style="text-align:center;FONT-FAMILY: -webkit-pictograph;">REGISTER</h2>
    <P style="text-align:center;FONT-FAMILY: -webkit-pictograph;">
We aim to be your home from home,where you always feel special and welcome within our relaxed, <br> unhurried surroundings, all designed to ensure your total relaxation. </P>
      
      </div>
     <!-- register form-->
    <div class="form-group">	

    <!--Beginning of row-->
    
    <div class="row" style="margin-left:100px;background-color:white;margin-right:100px; color:black;FONT-FAMILY: -webkit-pictograph;">
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