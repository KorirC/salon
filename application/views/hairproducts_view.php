<div>

<div class=' row title_row'>
<h1>This week's income from products sold</h1>
<?php 
$days=$thisearngs[0];
$earnings=$thisearngs[1];
$last_days=$lastearngs[0];
$last_week_earnings=$lastearngs[1];
$wk=$thisearngs[2];

 for($i=0;$i<sizeof($days);$i++){
  echo "<div class='col-md-1'><div>".date("D",strtotime($days[$i]))."</div>".$days[$i]."<div> <pre>  ".$earnings[$i]."</div></div>";

 }
?>
</div>
</div>

<!-- this week earn earning -->

<canvas id="thisWeekChart" width="400" height="200"></canvas>

<div class=' row title_row'>
<h1>Past Seven day earnings</h1>
<?php 
for($i=0;$i<sizeof($last_days);$i++){
    echo "<div class='col-md-1'><div>".date("D",strtotime($days[$i]))."</div>".$last_days[$i]."<div> <pre>  ".$last_week_earnings[$i]."</div></div>";
  
   }
?>
</div>

<canvas id="lastWeekChart" width="400" height="200"></canvas>
<script>
var ctx = document.getElementById("thisWeekChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Sunday","Monday", "Tuesday", "Wednesday", "Thurday", "Friday", "Saturday"],
        datasets: [{
            label: '# of earnings',
            data: [
                <?php echo $earnings[0]; ?>,
                <?php echo $earnings[1]; ?>,
                <?php echo $earnings[2]; ?>,
                <?php echo $earnings[3]; ?>,
                <?php echo $earnings[4]; ?>,
                <?php echo $earnings[5]; ?>,
                <?php echo $earnings[6]; ?>,
                    ],

            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

// last week
var ctx = document.getElementById("lastWeekChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Sunday","Monday", "Tuesday", "Wednesday", "Thurday", "Friday", "Saturday"],
        datasets: [{
            label: '# of earnings',
            data: [
                <?php echo $last_week_earnings[0]; ?>,
                <?php echo $last_week_earnings[1]; ?>,
                <?php echo $last_week_earnings[2]; ?>,
                <?php echo $last_week_earnings[3]; ?>,
                <?php echo $last_week_earnings[4]; ?>,
                <?php echo $last_week_earnings[5]; ?>,
                <?php echo $last_week_earnings[6]; ?>,
                    ],

            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>



