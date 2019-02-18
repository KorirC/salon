<br> <br>
<hr>
<style>
input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=gender]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.btn-default {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.table{
  border-radius: 5px;
  background-color: rgb(233, 227, 227);
  padding: 20px; 
  width:74%;
  margin: auto;
  
}
</style>
<?php echo form_open('updatestylist/'.$data[0]->id); 
 
  foreach($data as $row)
  {
  ?>
  <div class="container">
	<form method="post">
  <div class="table">
		<table class="">
  <tr>
    <label>Name:</label>
    <input class="w3-input w3-border w3-round" type="text" name="name" value="<?php echo $row->name; ?>"/>
  </tr>
  <tr>
 <label>Gender:</label> <br>
<input type="radio" name="gender" value="<?php echo $row->gender; ?>"/>Male <input type="radio" name="gender" value="<?php echo $row->gender; ?>"/>Female
  </tr> <br>
  <tr>
 <label>Email:</label>
  <input type="email" name="email" value="<?php echo $row->email; ?>"/>
  </tr>
  <tr>
  <label for="phoneno">Phone number:</label>
  <input type="text" name="phoneno" value="<?php echo $row->phone_number; ?>"/>
  </tr>
  <tr>
    <label>Hairstyle:</label>
    <input type="text" name="hairstyle" value="<?php echo $row->hairstyle; ?>"/>
  </tr>
  <tr>
   
    <button type="submit" class="btn btn-default">Update</button>
  </tr>
</table>
</div>
</form>
</div>
	<?php } ?>
