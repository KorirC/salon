<html>
<head>
<title>Wahu Salon</title>
<script src="<?php echo base_url("assets/css/Chart.min.js"); ?>"></script>
<!-- <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script> -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
<link href="<?php echo base_url("assets/js/bootstrap.min.js"); ?>" rel="stylesheet" type="text/css" />
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
<!--ACCESS MENUS FOR client-->
<?php if($this->session->userdata('level')==='2'):?>
<li><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home"></span>Home</a></li>
<li><a href="<?php echo base_url();?>products">Hair Products</a></li>
<li><a href="<?php echo base_url();?>contactus">Contact Us</a></li>
<li><a href="<?php echo base_url();?>gallery">Gallery</a></li>
<!--ACCESS MENUS FOR Admin-->
<?php elseif($this->session->userdata('level')==='1'):?>
<li><a href="<?php echo base_url();?>admin_bookings"><span class="glyphicon glyphicon-home"></span>Home</a></li>
<li><a href="<?php echo base_url();?>admin_bookings"></a></li>
<?php endif;?>
</ul>

<?php 
if(empty($this->session->userdata("userid"))){
echo '
<ul class="nav navbar-nav navbar-right">
  <li><a href="'.base_url().'forms">Sign Up</a></li>
  <li><a href="'.base_url().'login"><span class="glyphicon glyphicon-log-in "> log In</a></li>
 
  </ul>

';
}else{
  echo '
  
  <ul class="nav navbar-nav navbar-right">
    <li>
    
    ';echo'
    <li><a href="'.base_url().'/logout">Welcome  '.$this->session->userdata("name").'  <span class="glyphicon glyphicon-log-out ">logout</a></li>
    </ul>'

  ; 
}
?>  
</div>
</div>
</nav>
<div class="container">