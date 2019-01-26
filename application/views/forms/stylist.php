<div class="pagecontainer">
				<div class="headertext">
					  STYLIST<hr>
        </div>

<div class="formcard " style="padding-top:20px; background-color:white; font-size:initial;">
<?php echo validation_errors(); ?>

<?php echo form_open('addstylist'); ?>
<?php 
if(isset($message)){
  echo $message;
}

?>
     <!-- register form-->
    <div class="form-group">	

    <!--Beginning of row-->
    
    <div class="row">
    <div class="col-md-9 col-lg-9 col-sm-12">
   
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
      <label for="hairstyle">Hairstyle/s:</label>
      <input type="int" class="form-control" name="hairstyle" placeholder="Enter the hairstle">
    </div>
 

  <button type="submit" class="btn btn-default">Add stylist</button>
  </div>

  </div>
</form>
</div>