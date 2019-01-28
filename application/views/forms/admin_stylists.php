<html>
<head>
<title>Stylists</title>
<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/img"); ?>" rel="stylesheet" type="text/css" />
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
            </tr>  
         <?php }  
         ?>   
    </tbody>
  </table>
</div>
</body>
</html>







