<div class="container">
<a href="<?php echo base_url();?>inwait" class="btn btn-default" >Waiting</a>
<h2 style="text-align:center; font-family: -webkit-pictograph;">Previously Offered Services</h2>
<table class="table table-striped">
    <thead>
      <tr>
    <th>Date</th>
    <th>Service</th>
    <th>Status</th>
    <th>Amount</th>
    <th>Served By</th>
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
            <td><?php echo $row->amount;?></td> 
            <td><?php echo $row->stylist;?></td> 
            
            <td><a class="btn btn-danger" href="<?php echo base_url('cancel/').$row->auto ?>">Cancel Appointment</a></td> 
            </tr>  
         <?php }  
         ?>   
    </tbody>
  </table>
  </div>