<div class="pagecontainer">
				<div class="headertext">
					  STYLIST<hr>
        </div>

<div class="container" ><!--  -->
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
    
    <div class="row" style="background-color:rgb(233, 227, 227); font-family:-webkit-pictograph; font-size:30px;">
    <div class="col-md-6 col-lg-6 col-sm-12">
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
      <input type="int" class="form-control" name="hairstyle" placeholder="Good in which hairstyle?">
    </div>
      <div class="form-group">
        <button type="submit" class="btn btn-default">Submit</button>  <a class="btn btn-default" href="<?=base_url('update_stylist');?>">Update</a>  <a class="btn btn-default" href="<?=base_url('admin_stylists');?>">Back</a>
      </div>
      </div>

  </div>
</form>
</div>