<?php
//pie + var
$handle = fopen("./data result/sentiment/jumlah data.csv","r");
$total="";
$positif="";
$negatif="";
$netral="";
while(! feof($handle))
  {
      $data=fgetcsv($handle);
      $total=$data[0];
      $positif=(int)$data[1];
      $negatif=(int)$data[2];
      $netral=(int)$data[3];
  }
fclose($handle);

//bar chart
$barC = fopen("./data result/sentiment/bar chart.csv","r");
$konten_bar=array();
$positif_bar=array();
$negatif_bar=array();
$netral_bar=array();
while(! feof($barC))
  {
      $data=fgetcsv($barC);
      array_push($konten_bar, $data[0]);
      array_push($positif_bar, (int)$data[1]);
      array_push($negatif_bar, (int)$data[2]);
      array_push($netral_bar, (int)$data[3]);
  }
fclose($barC);

// tabel
$tabel = fopen("./data result/sentiment/tabel.csv","r");
$komentar=array();
$sentiment=array();
$url=array();
while(! feof($tabel))
  {
    $data=fgetcsv($tabel);
    array_push($komentar, $data[0]);
    array_push($sentiment, $data[1]);
    array_push($url, $data[2]);
  }
fclose($tabel);



$this->title = 'SENTIMENT ANALYSIS';
?>

<script src="../../vendor/almasaeed2010/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/chartjs/Chart.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/fastclick/fastclick.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/lugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>




<section class="content">
<div class="row">

<div class="col-lg-6 col-xs-6">
 <div class="box box-default">
                <div class="box-header with-border bg-black  ">
                  <h3 class="box-title">Sentiment Pie Chart</h3>
                  <div class="box-tools pull-right">
                  
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                      <div class="chart-responsive">
                        <canvas id="pieChart" height="150"></canvas>
                      </div><!-- ./chart-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer no-padding bg-black">
                
                </div><!-- /.footer -->
              </div><!-- /.box -->
</div>

<div class="col-lg-6 col-xs-6" >
  <div class="info-box bg-black" >
                <span class="info-box-icon"><i class="fa fa-cloud"></i></span>
                <div class="info-box-content">
                <div row>  
                <div class="col-lg-4 col-xs-6" >
                  <h4> Data Count: </h4>
                  </div>
                  <div class="col-lg-3 col-xs-6" >
                <?php echo '<h2 class="text-center">'.$total.'</h2>';?>
                </div>
                  </div>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
</div>
<div class="col-lg-2 col-xs-2" >
              <!-- small box -->
              
              <div class="small-box bg-olive">
                <div class="inner">
                <?php echo '<h3 class="text-center">'.$positif.'</h3>';?>
                <p class="text-center">Positif</p>                
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
               
              </div>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <div class="small-box bg-maroon">
                <div class="inner">
                  <?php echo '<h3 class="text-center">'.$negatif.'</h3>';?>
                <p class="text-center">Negatif</p> 
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
            
              </div>
            </div><!-- ./col -->

            <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <div class="small-box bg-gray">
                <div class="inner">
                  <?php echo '<h3 class="text-center">'.$netral.'</h3>';?>
                <p class="text-center">Netral</p> 
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
            
              </div>
            </div><!-- ./col -->
          


</div>



<!-- konten chart-->
 <div class="box">
                <div class="box-header with-border bg-black">
                  <h3 class="box-title">Sentiment Bar Chart</h3>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="barChart" style="height:230px"></canvas>
          
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->


<!-- tabel-->
<div class="box">
                <div class="box-header with-border bg-black">
                  <h3 class="box-title">Sentiment Table</h3>
                <div align="center">

</div>




                </div>

                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Komentar</th>
                        <th>Sentiment</th>
                        <th>URL</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
for ($i=0; $i <count($komentar) ; $i++) { 
  # code...

                   echo   '<tr>';
                   echo     '<td>'.$komentar[$i].'</td>';
                   echo     '<td>'.$sentiment[$i].'</td>';
                   echo     '<td>'.$url[$i].'</td>';
                   echo   '</tr>';

  }
                    ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->


</section>

 <script>
  $(function () {
//tabel
 $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });


      var positif = "<?php echo $positif; ?>";
      var negatif = "<?php echo $negatif; ?>";
      var netral  = "<?php echo $netral; ?>";
      var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: positif,
            color: "#3D9970",
            highlight: "#3D9970",
            label: "Positif"
          },
          {
            value: negatif,
            color: "#CF0053",
            highlight: "#CF0053",
            label: "Negatif"
          },
          {
            value: netral,
            color: "#AAAAAA",
            highlight: "#AAAAAA",
            label: "Netral"
          }
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);

//bar chart
  

        var konten_bar1= "<?php echo $konten_bar[0]; ?>";
        var konten_bar2= "<?php echo $konten_bar[1]; ?>";
        var konten_bar3= "<?php echo $konten_bar[2]; ?>";
        var konten_bar4= "<?php echo $konten_bar[3]; ?>";
        var konten_bar5= "<?php echo $konten_bar[4]; ?>";
        var konten_bar6= "<?php echo $konten_bar[5]; ?>";
        var konten_bar7= "<?php echo $konten_bar[6]; ?>";


        var positif_bar1= "<?php echo $positif_bar[0]; ?>";
        var positif_bar2= "<?php echo $positif_bar[1]; ?>";
        var positif_bar3= "<?php echo $positif_bar[2]; ?>";
        var positif_bar4= "<?php echo $positif_bar[3]; ?>";
        var positif_bar5= "<?php echo $positif_bar[4]; ?>";
        var positif_bar6= "<?php echo $positif_bar[5]; ?>";
        var positif_bar7= "<?php echo $positif_bar[6]; ?>";

        var negatif_bar1= "<?php echo $negatif_bar[0]; ?>";
        var negatif_bar2= "<?php echo $negatif_bar[1]; ?>";
        var negatif_bar3= "<?php echo $negatif_bar[2]; ?>";
        var negatif_bar4= "<?php echo $negatif_bar[3]; ?>";
        var negatif_bar5= "<?php echo $negatif_bar[4]; ?>";
        var negatif_bar6= "<?php echo $negatif_bar[5]; ?>";
        var negatif_bar7= "<?php echo $negatif_bar[6]; ?>";

        var netral_bar1= "<?php echo $netral_bar[0]; ?>";
        var netral_bar2= "<?php echo $netral_bar[1]; ?>";
        var netral_bar3= "<?php echo $netral_bar[2]; ?>";
        var netral_bar4= "<?php echo $netral_bar[3]; ?>";
        var netral_bar5= "<?php echo $netral_bar[4]; ?>";
        var netral_bar6= "<?php echo $netral_bar[5]; ?>";
        var netral_bar7= "<?php echo $netral_bar[6]; ?>";



 var areaChartData = {
          labels: [konten_bar1,konten_bar2, konten_bar3, konten_bar4, konten_bar5, konten_bar6, konten_bar7],
          datasets: [
            {
              data: [positif_bar1, positif_bar2, positif_bar3, positif_bar4, positif_bar5, positif_bar6,positif_bar7]
            },
            {
              data: [negatif_bar1, negatif_bar2, negatif_bar3, negatif_bar4, negatif_bar5, negatif_bar6,negatif_bar7]
            },
            { 
              data: [netral_bar1, netral_bar2, netral_bar3, netral_bar4, netral_bar5, netral_bar6,netral_bar7]
            }
          ]
        };

var barChartCanvas = $("#barChart").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
        var barChartData = areaChartData;
        barChartData.datasets[0].fillColor = "#3D9970";
        barChartData.datasets[0].strokeColor = "#3D9970";
        barChartData.datasets[0].pointColor = "#3D9970";
        barChartData.datasets[1].fillColor = "#CF0053";
        barChartData.datasets[1].strokeColor = "#CF0053";
        barChartData.datasets[1].pointColor = "#CF0053";
         barChartData.datasets[2].fillColor = "#AAAAAA";
        barChartData.datasets[2].strokeColor = "#AAAAAA";
        barChartData.datasets[2].pointColor = "#AAAAAA";
        var barChartOptions = {
          //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
          scaleBeginAtZero: true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines: true,
          //String - Colour of the grid lines
          scaleGridLineColor: "rgba(0,0,0,.05)",
          //Number - Width of the grid lines
          scaleGridLineWidth: 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines: true,
          //Boolean - If there is a stroke on each bar
          barShowStroke: true,
          //Number - Pixel width of the bar stroke
          barStrokeWidth: 2,
          //Number - Spacing between each of the X value sets
          barValueSpacing: 5,
          //Number - Spacing between data sets within X values
          barDatasetSpacing: 1,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
          //Boolean - whether to make the chart responsive
          responsive: true,
          maintainAspectRatio: true
        };

        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);


      });
    </script>