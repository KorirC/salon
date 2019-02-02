<html>
<head>
<title>Wahu Salon</title>
<script src="<?php echo base_url("assets/css/Chart.min.js"); ?>"></script>
<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/css/home.css"); ?>" rel="stylesheet" type="text/css" />
<!--<link href="<?php echo base_url("assets/css/footer.css"); ?>" rel="stylesheet" type="text/css" />-->
<link href="<?php echo base_url("assets/img"); ?>" rel="stylesheet" type="text/css" />

<!--<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">-->
</head>
<body>
<nav class="navbar navbar-inverse">
<div class="container">
<div class="navbar-header">
<a class="navbar-brand" href="<?php echo base_url();?>">Wahu Salon</a>
</div>
<div id="navbar">
<ul class="nav navbar-nav header_nav">
<li><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home"></span>Home</a></li>
<li><a href="<?php echo base_url();?>forms/services">Services</a></li>
<li><a href="<?php echo base_url();?>contact_us">Contact Us</a></li>
<li><a href="<?php echo base_url();?>gallery">Gallery</a></li>
</ul>
<?php 
if(empty($this->session->userdata("userid"))){
echo '
<ul class="nav navbar-nav navbar-right">
  <li><a href="'.base_url().'forms">Sign Up</a></li>
  <li><a href="'.base_url().'login"><span class="glyphicon glyphicon-log-in ">log In</a></li>
 
  </ul>

';
}else{
  echo '
  <ul class="nav navbar-nav navbar-right">
    
    <li><a href="'.base_url().'/logout">logout</a></li>
    </ul>
  
  '; 
}
?>

  
</div>
</div>
</nav>
<div class="container">