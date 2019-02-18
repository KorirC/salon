
<?php echo form_open('updatestylist'); ?>
 <?php
  foreach($data as $row)
  {
  ?>
  <div class="container">
	<form method="post">
  <div class="">
		<table class="">
  <tr>
    <td><label>Name:</label></td>
    <td><input type="text" name="name" value="<?php echo $row->name; ?>"/></td>
  </tr>
  <tr>
 <td><label>Gender:</label></td>
    <td><input type="radio" name="gender" value="<?php echo $row->gender; ?>"/>Male<input type="radio" name="gender" value="<?php echo $row->gender; ?>"/>Female</td>
  </tr>
  <tr>
  <td><label>Email:</label></td>
    <td><input type="email" name="email" value="<?php echo $row->email; ?>"/></td>
  </tr>
  <tr>
  <td><label for="phoneno">Phone number:</label></td>
    <td><input type="text" name="phoneno" value="<?php echo $row->phone_number; ?>"/></td>
  </tr>
  <tr>
    <td><label>Hairstyle:</label></td>
    <td><input type="text" name="hairstyle" value="<?php echo $row->hairstyle; ?>"/></td>
  </tr>
  <tr>
    <td colspan="2" style="align:center;">
    <button type="submit" class="btn btn-default">update stylist</button></td>
  </tr>
</table>
</div>
</form>
</div>
	<?php } ?>
