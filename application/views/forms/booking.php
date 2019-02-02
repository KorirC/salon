<html>
<head>
<title>Form</title>
<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="row">

<?php 
$days=$bookings[0];
$counts=$bookings[1];
 for($i=0;$i<sizeof($days);$i++){
  echo "<div class='col-md-1'><div>".date("D",strtotime($days[$i]))."</div>".$days[$i]."<div> <pre>  ".$counts[$i]."</div></div>";
 }
?>
</div>
<div class="formcard " style="padding-top:10px; background-color:white; font-size:large;">
<?php echo validation_errors(); ?>

<?php echo form_open('makebook'); ?>
<?php 
if(isset($message)){
  echo $message;
}

?>






    <div class="form-group">	
  <!-- Booking Form-->
   <!-- beginning of row-->
    <div class="row">
    
    <h2>BOOK NOW!</h2>
  
    <label for="idno">Select service:</label>
    <div class="form-group ">
      <input type="radio" name="service" value="Blow dry" checked>Blow dry<br>
      <input type="radio" name="service" value="hair styling"> Hair styling <br>
    </div>
    <div class="form-group">
      <input type="radio" name="service" value="plaiting " checked>Hair plaiting<br>
      <input type="radio" name="service" value="hair trimming"> Hair trimming <br>
    </div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" name="date" placeholder="Enter date" required>
    </div>
  <div class="form-group">
  <button type="submit" class="btn btn-default">Submit</button>
  </div>
  </div>
 

  </div>
<!-- end of row-->
</form>
<div >
<h1>Graphical booking</h1>
</div>
</body>
</html>