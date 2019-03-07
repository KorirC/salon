<div class="container">
<table class="table table-striped">
    <thead>
      <tr>
    <th>Date</th>
    <th>Service</th>
    <th>Status</th>
    <th>Action</th>
    <th>Payments</th>
    
      </tr>
    </thead>
    <tbody>
    <?php  
         foreach ($appointments as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->date;?></td> 
            <td><?php echo $row->service;?></td> 
            <td><?php echo $row->status;?></td> 
            <td><?php echo $row->amount;?></td>
            
            <td><a class="btn btn-danger" href="<?php echo base_url('cancel/').$row->auto ?>">Cancel Appointment</a></td> 
            </tr>  
         <?php }  
         ?>   
    </tbody>
  </table>
  </div>