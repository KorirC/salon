<style>
ul.breadcrumb {
  list-style: none;
  background-color: #eee;
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 2s ease;
  
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 20s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation: fade 2s infinite;
  /* -webkit-animation-duration:2s ; */
  animation: fade 2s infinite;
  /* animation-duration: 2s; */
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
  .prev, .next,.text {font-size: 11px}
}
</style>

<div class="container">

  <div class="jumbotron" style="margin:auto;">
    <h1 style="text-align: center; font-family: auto;
    font-variant-caps: small-caps;">Wahu Salon</h1>
    <ul class="breadcrumb"style="float:right;">
    <li><a href="<?php echo base_url();?>booking" class="btn btn-default" >Make An Appointment</a></li>
    <li><a href="<?php echo base_url();?>myappointments" class="btn btn-default" >Check My Appointments</a></li>
    </ul>
  </div>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="assets/img/salonbig3.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="assets/img/bacs.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="assets/img/salonbig3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>








<!-- beginning of first row -->
<div class="row">
    
   
    <!-- column with image-->
    <div class="col-md-6 col-lg-6 col-sm-12">
    <img src="assets/img/GoldenBlondeCornrowsBun.jpg" style="width:500px;height:400px; padding-left:0px;">
    </div>
    <!--column with the paragraph -->
     <div class="col-md-6 col-lg-6 col-sm-12">
    <h1 style="margin-top:100px; color:#333; text-align:center;FONT-FAMILY: -webkit-pictograph;">Welcome To Wahu Salon</h1>
    <p style="display:block; margin-block-start:1em; margin-block-end:1em; margin-inline-start:0px; margin-inline-end: 0px; font-size:150%;margin-top:50px;FONT-FAMILY: -webkit-pictograph">At Wahu Salon we provide services with a range of starting & maintaining locks, styling,various hairstyles as per one's desires and also sell various hairproducts. We offer the best services. </P>
    </div>
</div>


</div>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<!-- end of first row -->


<div class="container_home">
<div class="row" style="padding-top:30px;margin-left:50px;">
<h2 style="text-align:center;FONT-FAMILY: -webkit-pictograph;">OUR SERVICES</h2>
    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/cornrows.jpg" class="img-circle">
    <p>Floral Half Cornrows @4,000KSH</p>
    <div>
    <a class="button" style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>

    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/GingerFeedInBraidsPonytail.jpg" class="img-circle" >
    <p>Ginger FeedIn Braids Ponytail @2,000KSH</p>
    <div>
    <a class="button" style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>

    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/dreadlocks.jpg" class="img-circle" >
    <p>Dreadlocks @2,000KSH</p>
    <div>
    <a class="button"  style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>
</div>
<div class="row" style="padding-top:30px;margin-left:50px;">
    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/CelticKnotCornrowsHeadband.jpg" class="img-circle" >
    <p>Celtic Knot Cornrows Headband @2,500KSH</p>
    <div>
    <a class="button"  style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>

    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/brazilian.jpg" class="img-circle" >
    <p>The wig brazilian human hair @3,000KSH</p>
    <div>
    <a class="button"  style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>

    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/dutchbraids.jpg" class="img-circle" >
    <p>Combined Cornrows Dutch Braids @1,500KSH</p>
    <div>
    <a class="button"  style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>
</div>

<div class="row" style="padding-top:30px;margin-left:50px;">
    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/fauxmohawk.jpg" class="img-circle" >
    <p>Faux-Mohawk @4,000KSH</p>
    <div>
    <a class="button"  style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>

    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/GoldenBlondeCornrowsBun.jpg" class="img-circle" >
    <p>Golden Blonde Cornrows Bun @1,800KSH</p>
    <div>
    <a class="button"  style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>

    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/mixed.jpg" class="img-circle" >
    <p>Mixed Cornrows Mohawk @2,000KSH</p>
    <div>
    <a class="button"  style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>
</div>
</div>
</div><br><br> 
