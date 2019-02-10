<?php echo form_open('feedback'); ?>
<?php 
if(isset($message)){
  echo $message;
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Get In Touch</h3>
            <p>We would love to hear from you about our services and how we can best improve them to suit your needs. Kindly give us  a feed back </p>
        </div>
        <div class="col-md-6">
        <textarea name="message" cols="50" rows="7">

        </textarea> <br>
        <div>
        <button type="submit" class="btn btn-default">Submit</button>
        </div>
        </div>
    </div>
   
</div>