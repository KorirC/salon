<br><style>
input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;

}
/* label{
  font-size:20px;
} */
input[type=email]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=gender]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.btn-default {
  width: 30%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.row{
  border-radius: 5px;
  background-color: rgb(233, 227, 227);
  padding: 20px; 
  width:70%;
  font-size:15px;
  
}
.error{
  color:red;
}
</style>

<div class="pagecontainer">
				<div class="headertext">
					  STYLIST<hr>
        </div>

<div class="container" ><!--  -->
<!-- <?php echo validation_errors(); ?> -->

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
    
<div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>" placeholder="Enter name"  >
      <?php echo form_error('name', '<div class="error">', '</div>'); ?>
</div>

<div class="form-group">
      <label for="gender">Gender:</label><br>
      <input type="radio" name="gender" value='Male'>Male <br>
      <input type="radio" name="gender" value='Female'>Female
      <?php echo form_error('gender', '<div class="error">', '</div>'); ?>
</div> 

<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" placeholder="Enter email" >
      <?php echo form_error('email', '<div class="error">', '</div>'); ?>
</div>

<div class="form-group">
      <label for="idno">ID number:</label>
      <input type="int" class="form-control" name="idno" value="<?php echo set_value('idno'); ?>" placeholder="Enter ID number"  >
      <?php echo form_error('idno', '<div class="error">', '</div>'); ?>
</div>
<div class="form-group">
      <label for="phoneno">Phone number:</label>
      <input type="int" class="form-control" name="phoneno" placeholder="Enter Phone number" value="<?php echo set_value('phoneno'); ?>">
      <?php echo form_error('phoneno', '<div class="error">', '</div>'); ?>
</div> 

<div class="form-group">
      <label for="hairstyle">Hairstyle/s:</label>
      <input type="int" class="form-control" name="hairstyle" placeholder="Good in which hairstyle?"  value="<?php echo set_value('hairstyle'); ?>">
</div>
      <div class="form-group">
        <button type="submit" class="btn btn-default">Submit</button> <a class="btn btn-default" href="<?=base_url('admin_stylists');?>">Back</a>
     </div>

  </div>
</form>
</div>