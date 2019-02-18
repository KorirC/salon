<html>
<head>
<title>Stylists</title>
<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/img"); ?>" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Stylists</h2>

  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>

    <th>Name</th>   
    <th>Id</th>
    <th>Gender</th> 
    <th>Email</th>
    <th>Phone Number</th>
    <th>Hairstyle/s</th>
    <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php  
 
         foreach ($stylists as $row)  
         {  
            ?><tr>
           
            <td><?php echo $row->name;?></td>
            <td><?php echo $row->id;?></td>  
            <td><?php echo $row->gender;?></td>  
            <td><?php echo $row->email;?></td> 
            <td><?php echo $row->phone_number;?></td>
            <td><?php echo $row->hairstyle;?></td> 
            <td><a class="btn btn-default" href="<?=base_url('delete_stylist/'). $row->auto."/".$row->id ;?>">Delete</a> </td> 
            <td><a href="<?=base_url('updatestylist/'). $row->auto;?>">Update</a></td>
            
      
            </tr>  
     
         <?php }  
         ?>   
    </tbody>
  </table>
  <a class="btn btn-default" href="<?=base_url('addstylist');?>">Add Stylist</a>
  <!-- <a class="btn btn-default" href="<?=base_url('addstylist');?>">Update Stylist</a> -->
</div>

</body>
</html>







