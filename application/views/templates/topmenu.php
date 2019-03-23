<style>
/* Style The Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
<div class="row">
<!-- placeholder for styling  -->
<div class= "col-md-2"></div>
<div class= "col-md-9">
<ul class="nav navbar-nav">
<li ><a class="button_well" href="<?php echo base_url();?>admin_bookings"><span class="glyphicon glyphicon-list-alt"><div>Booking</div> </a></li>
<li><a  class="button_well"href="<?php echo base_url();?>earnings"><span class="glyphicon glyphicon-stats"> <div>Earnings</div></a></li>
<!-- <li><a  class="button_well"href="<?php echo base_url();?>hairproducts_income"><span class="glyphicon glyphicon-stats"> <div>Products Income</div></a></li> -->
<li><a  class="button_well" href="<?php echo base_url();?>admin_stylists"><span class="glyphicon glyphicon-user"><div>Stylist</div></a></li>
<li><a  class="button_well" href="<?php echo base_url();?>admin_feedback"><span class="	glyphicon glyphicon-list"><div>Feedback</div></a></li>
</ul>
<br><br><br>
<div class="dropdown">
  <button class="dropbtn">Reports</button>
  <div class="dropdown-content">
    <a href="report">Stylists</a>
    <a href="report_bookings">Bookings</a>
    <a href="report_earnings">Earnings</a>
    <a href="reportearnings">Earnings per day</a>
    <a href="report_feedback">On Client's feedback</a>
  </div>
  
</div>
</div>
<!-- placeholder for styling  -->
<div  class= "col-md-1"> </div>
</div>