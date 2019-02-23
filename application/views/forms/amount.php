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
</style>

</head>
<body>

<div class="container">
  <h2 style="text-align:center;">Enter the Amount Paid</h2>
  <br><br>
  <div class="container">
  
  <?php echo form_open('income'."/".$auto_id."/".$user_id); ?>
      <!-- <label for="amount">Enter the amount:</label> -->
      <div class="form-group">
          <input type="number" class="bt nbtn btn-default" name="amount" placeholder="Enter amount" required>
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </form>
    </div>
  
</div>
</body>
</html>







