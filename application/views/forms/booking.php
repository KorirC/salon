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

.test{
  color:red;
  font-size:15px;
  
}
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
<a href="#client_feedback" style="font-size:20px;float:right;">Give Us Feedback</a>
<div class="row">
<div class=' well row title_row '>
<h1 style="text-align:;">Number Of Bookings This Week</h1>
<?php 
$days=$bookings[0];
$counts=$bookings[1];
 for($i=0;$i<sizeof($days);$i++){
  echo "<div class='col-md-1'><div class=>".date("D",strtotime($days[$i]))."</div><br>".$days[$i]."<div><br><pre class='well'>".$counts[$i]."<br></div></div>";
 }
?>
</div>
</div>

</div>
<!-- <div class="formcard " style="padding-top:10px; background-color:white; font-size:large;"> -->
<?php echo validation_errors();
  
 ?>

<?php echo form_open('makebook'); ?>
<?php 
if(isset($message)){
  echo $message;
}

?>
<div class="container" style="color:black;">
  <h2 style=" font-family: -webkit-pictograph;text-align:center;">Book For Our Services</h2>
<!-- 1st row -->
 <div class="row"  ><!--style="margin-left:140px;"  -->
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
<div class="row" >
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
<div class="row">
<div class="col-md-9" id="datetimepicker">
      <label for="date">Date:</label>
      <input id="calid" type="date" class="form-control" style="width:70%;" name="date" min="<?php echo date('Y-m-d'); ?>" required><br>
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
</div>
</div>  <br>
</form>
<!-- Feedback  -->
<div class="container" style="background-color: rgb(233, 227, 227);color:black;">
    <div class="row">
        <div class="col-md-6">
            <h3 style="text-align:center;" >Get In Touch</h3>
            <p class="feedback">We would love to hear from you about our services and how we can best improve them to suit your needs. Kindly give us  a feed back </p>
        </div>

        <div class="col-md-6">
        <?php echo form_open('feedback'); ?>
        <textarea id="client_feedback" name="your_message" cols="50" rows="7"class="textarea">

        </textarea> <br>
        <div>
        <button type="submit" class="btn btn-default">Send</button>
        </form>
        </div>
       
        </div>
      
    </div>
</div>



<br><br>
