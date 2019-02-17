<div class="container">
  <h2>Feedback</h2>

  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>

      
    <th>Id</th>
    <th>Name</th> 
    <th>Phone Number</th>
    <th>Message</th>
    <th>Posted On</th>
    <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php  
 
         foreach ($feedback as $row)  
         {  
            ?><tr>
           <td><?php echo $row->id;?></td> 
            <td><?php echo $row->name;?></td>
            <td><?php echo $row->phone_number;?></td>
            <td><?php echo $row->message;?></td>
            <td><?php echo $row->posted_on;?></td>
            <td> <a class="btn btn-danger" href="<?php echo base_url('read/').$row->auto; ?>">Read</a></td> 

      
            </tr>  
     
         <?php }  
         ?>   
    </tbody>
  </table>
</div>
