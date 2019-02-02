<html>
<head>
<title>Form</title>
<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="row">
<div class="col-md-1">
<div>Monday</div>
 <pre>  6</div>
<div class="col-md-1">7</div>
<div class="col-md-1">67</div>
<div class="col-md-1">94</div>
<div class="col-md-1">30</div>
</div>
<div class="formcard " style="padding-top:10px; background-color:white; font-size:large;">
<?php echo validation_errors(); ?>

<?php echo form_open('makebook'); ?>
<?php 
if(isset($message)){
  echo $message;
}

?>


<!-- remove below -->
<label for="date">Show bookings:</label>
      <div class="form-group">
          <input type="date" class="bt nbtn btn-default" name="date" placeholder="Enter date" required>
          <a href="<?php echo base_url();?>display_count" class="btn btn-default">Display</a>
        </div>
    </form>
    </div>
    <table class="table table-striped">
    <thead>
      <tr>
     
    <th>Count</th>
   
   
      </tr>
    </thead>
    <tbody>
    <?php  
    $date=date('d');
    $query=$this->db->get_where('booking_table',array('date'===$date));
         foreach ($query as $row)  
         {  
            ?><tr> 
           <td><?php echo ($query->num_rows());?></td>  
            </tr>  
         <?php }  
         ?>   
    </tbody>
  </table>



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

</body>
</html>