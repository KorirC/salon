<html>
<head>
<title>bookings</title>
<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/img"); ?>" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="container">
  <h2>Enter the Ammount Paid</h2>
  <div class="">
  
  <?php echo form_open('income'."/".$auto_id."/".$user_id); ?>
      <label for="amount">Enter the amount:</label>
      <div class="form-group">
          <input type="number" class="bt nbtn btn-default" name="amount" placeholder="Enter amount" required>
          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-filter">Submit</button>
        </div>
    </form>
    </div>
  
  <p></p>            
  
  
</div>
</body>
</html>







