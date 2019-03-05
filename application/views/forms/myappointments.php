<div class="container">
<table class="table table-striped">
    <thead>
      <tr>
    <th>Date</th>
    <th>Service</th>
    <th>Status</th>
    <th>Action</th>
    
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
            <!-- <td><a class="btn btn-danger" href="<?=base_url('cancel/').$row->auto?>">Cancel Appointment</a> </td> -->
            <td><a class="btn btn-danger" href="<?php echo base_url('cancel/').$row->auto ?>">Cancel Appointment</a></td> 
            </tr>  
         <?php }  
         ?>   
    </tbody>
  </table>
    <!-- <a class="btn btn-success" href="<?php echo base_url('cancel/') ?>">Cancel Appointment</a> -->
  </div>