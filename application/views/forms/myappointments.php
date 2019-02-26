<div class="container">
<table class="table table-striped">
    <thead>
      <tr>
     <!-- <th>Id</th>
    <th>Name</th> 
    <th>Email</th>
    <th>Phone Number</th> -->
    <th>Date</th>
    <th>Service</th>
    <th>Status</th>
    
      </tr>
    </thead>
    <tbody>
    <?php  
         foreach ($appointments as $row)  
         {  
            ?><tr>  
           <!-- <td><?php echo $row->id;?></td>  
             <td><?php echo $row->name;?></td>  
             <td><?php echo $row->email;?></td> 
             <td><?php echo $row->phone_number;?></td> -->
            <td><?php echo $row->date;?></td> 
            <td><?php echo $row->service;?></td> 
            <td><?php echo $row->status;?></td> 
             
            <!-- <td><a class="btn btn-success" href="<?php echo base_url('accept/').$row->auto."/".$row->id ?>">Accept</a>
             <a class="btn btn-danger" href="<?php echo base_url('reject/').$row->auto ?>">Deny</a></td>    -->
            
            </tr>  
         <?php }  
         ?>   
    </tbody>
  </table>

  <a class="btn btn-success" href="<?php echo base_url('cancel') ?>">Cancel Appointment</a>
  </div>