<html>
<head>
<title>Form</title>
<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="formcard " >
<?php echo validation_errors(); ?>

<?php echo form_open('auth_client'); ?>
<?php if(isset($message)){
  echo $message;
}?>
    <div class="form-group">	

    <!-- Structure of this need to be chaenged later -->
     <div class="form-group">
      <label for="phoneno">Phone number:</label>
      <input type="int" class="form-control" name="phoneno" placeholder="Enter Phone number">
    </div>

     <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd">
  </div>



  <button type="submit" class="btn btn-default">Submit</button>
</form><br><br><br><br><br><br><br><br>

</body>
</html>