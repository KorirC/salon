
<div class="bg-img"> 
<div class="formcard_login" style="margin-left:300px;">
<?php echo validation_errors(); ?>

<?php echo form_open('auth_client'); ?>
<?php if(isset($message)){
  echo $message;
}?>
    
    <div class="form-group-login">	
    <h2 class="login">LOGIN</h2> 
     <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter your email">
    </div>

     <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd">
  </div>
  <div class="form-group">
  <button type="submit" class="btn-login btn-default">Submit</button> <a style="color:black;" href="<?php echo base_url();?>forms">Sign Up</a>
 
  </div><br><br>
  </div>
</form>
</div>
</div>

