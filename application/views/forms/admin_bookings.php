<html>
<head>
<title>bookings</title>
<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/img"); ?>" rel="stylesheet" type="text/css" />
<style>
input[type=number]{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=text]{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

</style>
</head>
<body>
<a href="#products_bought" style="font-size:20px;float:right;">Products Bought</a>
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
            <td><a class="btn btn-success" href="<?php echo base_url('accept/').$row->auto."/".$row->id ?>">Accept</a>
             <a class="btn btn-danger" href="<?php echo base_url('reject/').$row->auto ?>">Deny</a></td>   
            
            </tr>  
         <?php }  
         ?>   
    </tbody>
  </table>
</div>

<div class="container">
  <h2 style="text-align:center;">Hair Products Bought</h2>
  <br><br>
  <div class="container">
  
  <?php echo form_open('hairproducts'); ?>
      <!-- <label for="amount">Enter the amount:</label> -->
      <div class="form-group" id="products_bought">
          <input type="text" class="form-control" name="hairproduct" placeholder="Enter type of hairproduct bought" required><br>
          <input type="number" class="bt nbtn btn-default" name="amount" placeholder="Enter amount" required><br>
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
    </div>
  
</div>
</body>
</html>







