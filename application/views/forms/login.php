<div class="bg-img"> 
<div class="formcard_login" >
<?php echo validation_errors(); ?>

<?php echo form_open('auth_client'); ?>
<?php if(isset($message)){
  echo $message;
}?>
    <h2 class="login">LOGIN</h2> 
    <div class="form-group-login">	
     <div class="form-group">
      <label for="phoneno">Phone number:</label>
      <input type="int" class="form-control" name="phoneno" placeholder="Enter Phone number">
    </div>

     <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd">
  </div>
  <button type="submit" class="btn-login btn-default">Submit</button>
</form>
</div>
</div>
