<style>
.text-block{
  position: absolute; 
 top:0;
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  height: 500px;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
  FONT-FAMILY: -webkit-pictograph;
}
.mySlides 
{
	display: none;
}
img 
{
	vertical-align: middle;
}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  height: 500px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text 
{
	width: 100%;
	height: 500px;
	background-repeat: no-repeat;
	background-size: cover;
	padding-top: 1%;
}

.text h1
{
	color:white;
	font-size: 75px;
	font-weight: bold;
	margin: 0.5% 0% 0% 25%;
	display: inline;
}

.text a
{
	text-decoration: none;
}
.text button
{
	width: 180px;
	height: 40px;
	background-color: #55FF55;
	border-radius: 8px;
	padding: 10px 24px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 18px;
	margin: 4px 550px;
	cursor: pointer;
}
button:hover
{
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24);
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active 
{
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3.0s;
  animation-name: fade;
  animation-duration: 3.0s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<div class="container">
<div class="">

    <ul class="breadcrumb"style="float:right;">
    <li><a href="<?php echo base_url();?>booking" class="btn btn-default" >Make An Appointment</a></li>
    <li><a href="<?php echo base_url();?>myappointments" class="btn btn-default" >Check My Appointments</a></li>
    </ul>
  </div>
</div><br><br>

<br>
</div>
<br>
</div>
<!-- slideshow -->
<div class="slideshow-container">
		<div class="mySlides fade">
		  <div class="text" style="background-image: url(assets/img/bacs.jpg);">
      <div class="text-block">
    <h1 style=" text-align:center; margin:30 30 10px;">Wahu Salon</h1>
    <p style="text-align:center; font-size:20px; font-family:-webkit-pictograph;  margin:30 30 10px;">At Wahu Salon we provide services with a range of starting & maintaining locks, styling,various hairstyles as per one's desires and also sell various hairproducts. We offer the best services. </P>
    
</div>
		  </div>
		</div>
		<div class="mySlides fade">
		  
		  <div class="text" style="background-image: url(assets/img/salonbig3.jpg);">
      <div class="text-block">
    <h1 style=" text-align:center; margin:30 30 10px;">Wahu Salon</h1>
    <p style="text-align:center; font-size:20px; font-family:-webkit-pictograph;  margin:30 30 10px;">At Wahu Salon we provide services with a range of starting & maintaining locks, styling,various hairstyles as per one's desires and also sell various hairproducts. We offer the best services. </P>
    
</div>
		  </div>
		</div>

		<div class="mySlides fade">
		  <div class="text" style="background-image: url(assets/img/salon.jpg);">
      <div class="text-block">
    <h1 style=" text-align:center; margin:30 30 10px;">Wahu Salon</h1>
    <p style="text-align:center; font-size:20px; font-family:-webkit-pictograph;  margin:30 30 10px;">At Wahu Salon we provide services with a range of starting & maintaining locks, styling,various hairstyles as per one's desires and also sell various hairproducts. We offer the best services. </P>
    
   </div>
		  </div>
		</div>
		
		<div class="mySlides fade">
		  <div class="text" style="background-image: url(assets/img/salonoutlay.jpg);">
			<div class="text-block">
    <h1 style=" text-align:center; margin:30 30 10px;">Wahu Salon</h1>
    <p style="text-align:center; font-size:20px; font-family:-webkit-pictograph;  margin:30 30 10px;">At Wahu Salon we provide services with a range of starting & maintaining locks, styling,various hairstyles as per one's desires and also sell various hairproducts. We offer the best services. </P>
   
</div>
		  </div>
		</div>
	</div>
		<br>
		<br>
	<div style="text-align:center">
		<span class="dot"></span> 
		<span class="dot"></span> 
		<span class="dot"></span> 
		<span class="dot"></span>
	</div>

<script>
var slideIndex=0;
showSlides();

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slideIndex++;
  if(slideIndex>slides.length){slideIndex=1}
  for(i=0;i<dots.length;i++){
    dots[i].className=dots[i].className.replace("active","");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000);
}

</script>

<!-- service section -->
<div class="container">
<h2 style="text-align:center; font-family:-webkit-pictograph;">Our Services</h2>
 <div class="row">
  <div class="col-md-4 col-sm-4">
  <img  src="assets/img/Blowdry2(2).jpg" alt="Norway" class="img-rounded"style="width:250px; height:250px;">
  <p style=" font-size:20px; ">Blow dry starting from ksh 100</p>
  </div>
  <div class="col-md-4 col-sm-4">
  <img  src="assets/img/hairstyling2.jpg" alt="Norway" class="img-rounded"style="width:250px; height:250px; ">
  <p style=" font-size:20px; ">Hair styling starting from ksh 500</p>
  </div>
  <div class="col-md-4 col-sm-4">
  <img  src="assets/img/plaiting.jpg" alt="Norway" class="img-rounded"style="width:250px; height:250px;">
  <p style=" font-size:20px; ">Hair plaiting starting from ksh 500</p>
  </div>
 </div>
 <div class="row">
 <div class="col-md-4 col-sm-4">
  <img  src="assets/img/coloring2.jpg" alt="Norway" class="img-rounded"style="width:250px; height:250px;">
  <p style=" font-size:20px;">Hair coloring starting from ksh 500</p>
  </div>
  <div class="col-md-4 col-sm-4">
  <img  src="assets/img/haircut.jpg" alt="Norway" class="img-rounded"style="width:250px; height:250px;">
  <p style=" font-size:20px; ">Hair cut starting from ksh 200</p>
  </div>
  <div class="col-md-4 col-sm-4">
  <img  src="assets/img/hairtrim.jpg" alt="Norway" class="img-rounded"style="width:250px; height:250px;">
  <p style=" font-size:20px; ">Hair trimming starting from ksh 200</p>
  </div>
 </div>
</div>

<!-- Gallery part -->
<div class="row" style="background-color: rgb(233, 227, 227);">
<div class="col-md-6 col-sm-6" >
<p style="text-align:center; font-size:30px; font-family:-webkit-pictograph;  margin: 80 70 10px;">Wahu salon offers the best services. You can browse through our gallery to have a look. We look forward to partnering with you</p>
<a href="<?php echo base_url();?>gallery" class="btn btn-primary" style="margin: 40 250 10px;" >Gallery</a>
</div>
<div class="col-md-6 col-sm-6">
<img src="assets/img/GoldenBlondeCornrowsBun.jpg" class="img-rounded" style="width:100%; height:400px;" >
</div>
</div>




