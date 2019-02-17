
<?php echo form_open('updatestylist'); ?>
 <?php
  foreach($data as $row)
  {
  ?>
	<form method="post">
		<table width="600" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Enter Your Name </td>
    <td width="329"><input type="text" name="name" value="<?php echo $row->name; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your Gender</td>
    <td><input type="radio" name="gender" value="<?php echo $row->gender; ?>"/><input type="radio" name="gender" value="<?php echo $row->gender; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your Email</td>
    <td><input type="email" name="email" value="<?php echo $row->email; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your Phone Number</td>
    <td><input type="text" name="phoneno" value="<?php echo $row->phone_number; ?>"/></td>
  </tr>
  <tr>
    <td>Which Hairstyle Are you Good in ? </td>
    <td><input type="text" name="hairstyle" value="<?php echo $row->hairstyle; ?>"/></td>
  </tr>
  <tr>
    <td colspan="2" style="align:center;">
	<input type="submit" name="update" value="Update_Records"/>Submit</td>
  </tr>
</table>
	</form>
	<?php } ?>
