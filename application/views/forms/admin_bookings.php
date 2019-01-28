<html>
<head>
<title>bookings</title>
<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/img"); ?>" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="container">
  <h2>Appointments Made</h2>
  <div class="rightfloat">
  <?php echo form_open('filter_by_date'); ?>
      <label for="date">Filter by Date:</label>
      <div class="form-group">
          <input type="date" class="bt nbtn btn-default" name="date" placeholder="Enter date" required>
          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-filter">Filter</button>
        </div>
    </form>
    </div>
  
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
     <th>Id</th>
    <th>Name</th> 
    <th>Email</th>
    <th>Phone Number</th>
    <th>Date</th>
    <th>Service</th>
    <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php  
         foreach ($bookings as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->id;?></td>  
            <td><?php echo $row->name;?></td>  
            <td><?php echo $row->email;?></td> 
            <td><?php echo $row->phone_number;?></td>
            <td><?php echo $row->date;?></td> 
            <td><?php echo $row->service;?></td> 
            <td><a class="btn btn-success" href="/">Accept</a> <a class="btn btn-danger" href="/">Deny</a></td>   
            </tr>  
         <?php }  
         ?>   
    </tbody>
  </table>
</div>
</body>
</html>







