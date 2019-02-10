<html>
<head>
<title>Form</title>
<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
<style>
/* HIDE RADIO */
[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
/* [type=radio]:checked + img {
  border: 1px solid black;
  background-color:red;
  outline-style: solid;
  outline-color: coral;
} */
.radioButton input:checked ~ .image_option{
  background-color:#717bd1 !important;
  color:#717bd1 !important;
  font-size:20px;
  padding:10px;
 }

 .radioButton input:checked ~ .input_text{
  color:#717bd1 !important;
  font-size:30px;
 }

.image_option{
  padding:20px;
}
</style>
</head>
<body>
<div class="row">
<h2 style="text-align:center;">Number Of Bookings This Week</h2>
<?php 
$days=$bookings[0];
$counts=$bookings[1];
 for($i=0;$i<sizeof($days);$i++){
  echo "<div class='col-md-2'><div class=>".date("D",strtotime($days[$i]))."</div><br>".$days[$i]."<div><br><pre>".$counts[$i]."<br></div></div>";
 }
?>
</div>

</div>
<!-- <div class="formcard " style="padding-top:10px; background-color:white; font-size:large;"> -->
<?php echo validation_errors(); ?>

<?php echo form_open('makebook'); ?>
<?php 
if(isset($message)){
  echo $message;
}

?>
<div class="form-group">
  <h2 style="text-align:center;">Book For Our Services</h2>
<!-- 1st row -->
<div class="row" style="margin-left:140px;">
<div class="col-md-4">
<label class="radioButton">
      <input  type="radio" name="service" value="Hair cut" checked><h4 class="input_text">Hair Cut</h4><br>
      <img class="image_option" src="assets/img/haircut.jpg">
    </label>
</div>
<div class="col-md-4">
<label class="radioButton">
      <input type="radio" name="service" value="Hair Coloring"><h4 class="input_text">Hair Coloring</h4><br>
      <img class="image_option" src="assets/img/coloring2.jpg">
    </label>
</div>
<div class="col-md-4">
<label class="radioButton">
      <input type="radio" name="service" value="Blow dry"><h4 class="input_text">Blow dry</h4><br>
      <img class="image_option" src="assets/img/Blowdry2(2).jpg">
    </label>
</div>
</div>

<!-- 2nd row -->
<div class="row" style="margin-left:140px;">
<div class="col-md-4" >
<label class="radioButton">
      <input type="radio" name="service" value="Hair styling"><h4 class="input_text">Hair Styling</h4><br>
      <img class="image_option" src="assets/img/hairstyling2.jpg">
    </label>
</div>
<div class="col-md-4">
<label class="radioButton">
      <input type="radio" name="service" value="Hair trimming"><h4 class="input_text">Hair Trimming</h4><br>
      <img class="image_option" src="assets/img/hairtrim.jpg">
    </label>
</div>
<div class="col-md-4">
<label class="radioButton">
      <input type="radio" name="service" value="Hair plaiting"><h4 class="input_text">Hair Plaiting</h4><br>
      <img class="image_option" src="assets/img/plaiting.jpg">
    </label>
</div>
</div>
<div class="form-group" style="margin-left:400px; margin-right:400px;">
      <label for="date">Date:</label>
      <input type="date" class="form-control" name="date" placeholder="Enter date" required>
    </div>
  <div class="form-group"style="margin-left:600px;">
  <button type="submit" class="btn btn-default">Submit</button>
  </div>
</div>  
    <!-- <div class="form-group">	 -->
  <!-- Booking Form-->
   <!-- beginning of row-->
    <!-- <div class="row"> -->
   
    <!-- <h2>Book Now</h2>
</div>
  
    <label for="idno">Select service:</label>
  
      <div class="col-md-6">
      <label>
      <input type="radio" name="service" value="Blow dry" checked>Blow dry<br>
      <img src="assets/img/haircut.jpg">
    </label>
</div>
<div class="col-md-6">
    <label>
      <input type="radio" name="service" value="hair styling"> Hair styling <br>
      <img src="assets/img/haircut.jpg">
</label>
</div>
<div class="col-md-6">
    <label>
      <input type="radio" name="service" value="hair styling"> Hair styling <br>
      <img src="assets/img/haircut.jpg">
</label>
</div>
<div class="col-md-6">
    <label>
      <input type="radio" name="service" value="hair styling"> Hair styling <br>
      <img src="assets/img/haircut.jpg">
</label>
</div>
    </div>
    <div class="form-group">
      <label>
      <input type="radio" name="service" value="plaiting " checked>Hair plaiting<br>
      <img src="assets/img/haircut.jpg">
      </label>
      <label>
      <input type="radio" name="service" value="hair trimming"> Hair trimming <br>
      <img src="assets/img/haircut.jpg">
      </label>
    </div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" name="date" placeholder="Enter date" required>
    </div>
  <div class="form-group">
  <button type="submit" class="btn btn-default">Submit</button>
  </div>
  </div>
 

  </div> -->
<!-- end of row-->
<!-- </form> -->
<div>
<h1>Graphical booking</h1>
</div>
