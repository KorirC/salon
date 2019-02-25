
<!-- <script type="text/javascript">
            $(document).ready(function() {

                $("view_data").click(function() {
                    var title = "RP";
                    var type = "AM";
                    var date_cal = $(this).attr("id");

                    $.ajax({
                        type: 'POST',
                        url: '<?php echo site_url(); ?>/my_calendar/get_reservations_records',
                        data: "type=" + type + "&title=" + title + "&date_cal=" + date_cal,
                        success: function(msg) {
                            //alert(msg);
                            $('#reservation_detail_model_body').html(msg);
                            $('#reservation_detail_model').modal('show');

                        },
                        error: function(msg) {
                            alert("Error Occured!");
                        }
                    });
                });

            });

        </script> -->
        <!-- <div id="container">

            <div id="body">
                <?php echo $home; ?>
                
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="reservation_detail_model" class="modal fade" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                            <h4 class="modal-title">My Details</h4>
                        </div>
                        <div class="modal-body" id="reservation_detail_model_body">
                            <!--reservation_list_view goes here-->
<!-- 

                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-info" type="button">Close</button>
                        </div>
                    </div>
         </div>    -->






<div class="container">
  <div class="jumbotron" >
    <h1 style="text-align: center; font-family: auto;
    font-variant-caps: small-caps;">Wahu Salon</h1>
    <a href="<?php echo base_url();?>booking" class="btn btn-default" style="float:right;">Make An Appointment</a>
  </div>
<!-- beginning of first row -->
<div class="row">
    
   
    <!--column with image-->
    <div class="col-md-6 col-lg-6 col-sm-12">
    <img src="assets/img/GoldenBlondeCornrowsBun.jpg" style="width:500px;height:400px; padding-left:0px;">
    </div>
    <!--column with the paragraph -->
    <div class="col-md-6 col-lg-6 col-sm-12">
    <h1 style="margin-top:100px; color:#333; text-align:center;FONT-FAMILY: -webkit-pictograph;">Welcome To Wahu Salon</h1>
    <p style="display:block; margin-block-start:1em; margin-block-end:1em; margin-inline-start:0px; margin-inline-end: 0px; font-size:150%;margin-top:50px;FONT-FAMILY: -webkit-pictograph">At Wahu Salon we provide services with a range of starting & maintaining locks, styling,various hairstyles as per one's desires and also sell various hairproducts. We offer the best services. </P>
    </div>
</div><br><br>
<!-- end of first row -->
<div class="container_home">
<div class="row" style="padding-top:30px;margin-left:50px;">
<h2 style="text-align:center;FONT-FAMILY: -webkit-pictograph;">OUR SERVICES</h2>
    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/cornrows.jpg" class="img-circle">
    <p>Floral Half Cornrows @4,000KSH</p>
    <div>
    <a class="button" style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>

    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/GingerFeedInBraidsPonytail.jpg" class="img-circle" >
    <p>Ginger FeedIn Braids Ponytail @2,000KSH</p>
    <div>
    <a class="button" style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>

    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/dreadlocks.jpg" class="img-circle" >
    <p>Dreadlocks @2,000KSH</p>
    <div>
    <a class="button"  style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>
</div>
<div class="row" style="padding-top:30px;margin-left:50px;">
    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/CelticKnotCornrowsHeadband.jpg" class="img-circle" >
    <p>Celtic Knot Cornrows Headband @2,500KSH</p>
    <div>
    <a class="button"  style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>

    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/brazilian.jpg" class="img-circle" >
    <p>The wig brazilian human hair @3,000KSH</p>
    <div>
    <a class="button"  style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>

    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/dutchbraids.jpg" class="img-circle" >
    <p>Combined Cornrows Dutch Braids @1,500KSH</p>
    <div>
    <a class="button"  style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>
</div>

<div class="row" style="padding-top:30px;margin-left:50px;">
    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/fauxmohawk.jpg" class="img-circle" >
    <p>Faux-Mohawk @4,000KSH</p>
    <div>
    <a class="button"  style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>

    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/GoldenBlondeCornrowsBun.jpg" class="img-circle" >
    <p>Golden Blonde Cornrows Bun @1,800KSH</p>
    <div>
    <a class="button"  style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>

    <div class="col-md-4 col-lg-4 col-sm-12">
    <img src="assets/img/mixed.jpg" class="img-circle" >
    <p>Mixed Cornrows Mohawk @2,000KSH</p>
    <div>
    <a class="button"  style="margin-left:30px;" href="<?php echo base_url();?>booking">Book Now</a>
    </div>
    </div>
</div>
</div>
</div><br><br>
