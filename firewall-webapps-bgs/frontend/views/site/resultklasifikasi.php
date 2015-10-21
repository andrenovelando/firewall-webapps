<?php
//label
$handle = fopen("./data result/classification/jumlah data.csv","r");
$total="";
$terklasifikasi="";
$tidak_terklasifikasi="";
while(! feof($handle))
  {
    $data=fgetcsv($handle);
    $total=$data[0];
    $terklasifikasi=$data[1];
    $tidak_terklasifikasi=$data[2];
  }
fclose($handle);

//rank
$rank = fopen("./data result/classification/rank.csv","r");
$total_jumlah=0;
$jumlah=array();
$value=array();
while(! feof($rank))
  {
    $data=fgetcsv($rank);
    $total_jumlah=$total_jumlah+$data[1];
    $dummy=(int)$data[1];
    $jumlah[$data[0]]=$dummy;
    array_push($value, $dummy);

  }
rsort($value);
asort($jumlah);
$tenHighest = array_slice($jumlah, -7, null, true);
$tenHighestKeys = array_keys($tenHighest);
fclose($rank);


//tabel
$tabel = fopen("./data result/classification/tabel.csv","r");
$url=array();
$jumlah_x=array();
while(! feof($tabel))
  {
    $data=fgetcsv($tabel);
    array_push($url, $data[0]);
    array_push($jumlah_x, $data[1]);
  }
fclose($tabel);

//pie chart
$pieC = fopen("./data result/classification/pie chart.csv","r");
$konten_pie=array();
$jumlah_pie=array();
while(! feof($pieC))
  {
    $data=fgetcsv($pieC);
    array_push($konten_pie, $data[0]);
    array_push($jumlah_pie, (int)$data[1]);
  }
fclose($pieC);



$this->
 title = 'CLASSIFICATION RESULT';
?>

<script src="../../vendor/almasaeed2010/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/chartjs/Chart.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/fastclick/fastclick.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/bootstrap/js/bootstrap.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-idn.js"></script>


 






 <div class="box box-default">
                <div class="box-header bg-black  ">
                  <h3 class="box-title">Chart Data</h3>
                  <div class="box-tools pull-right">
                 
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body ">
                <div class="row">
                 <div class="col-lg-6 col-xs-6" >
                      <div class="chart-responsive">
                        <canvas id="pieChart" height="150"></canvas>
                      </div><!-- ./chart-responsive -->
                 </div>   



                 <div class="col-lg-6 col-xs-6" >
                <div class="info-box bg-#3399FF" >
                <span class="info-box-icon"><i class="fa fa-cloud"></i></span>
                <div class="info-box-content">
                <div row>  
                <div class="col-lg-6 col-xs-6" >
                  <h4> Jumlah Data: </h4>
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
              <div class="small-box" style="background: #3399FF">
                <div class="inner">
                <?php echo '<h3 class="text-center">'.$terklasifikasi.'</h3>';?>
                
                <p class="text-center">Terklasifikasi</p>  

                </div>     
              </div>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <div class="small-box" style="background: #FF66FF">
                <div class="inner">
                 <?php echo '<h3 class="text-center">'.$tidak_terklasifikasi.'</h3>';?>
                <p class="text-center">Tidak Terklasifikasi</p>     
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                
              </div>
            </div><!-- ./col -->

            <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <div class="small-box bg-black">
                <div class="inner">
                <?php
                $ratio1=($terklasifikasi/$total)*100;
                $ratio2=($tidak_terklasifikasi/$total)*100;
                echo '<h3 class="text-center">'.(int)$ratio1.':'.(int)$ratio2.'</h3>';?>
                <p class="text-center">Ratio</p>     
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>

              </div>
            </div><!-- ./col -->

                </div><!-- /.row -->
                <div class="box-header with-border bg-white">
                
<div class="box-header with-border bg-white">
                <h3 class="box-title">Bar Chart</h3>
                </div>
               <div row>

<div class="col-lg-8 col-xs-4">
  <div class="chart">
                    <canvas id="barChart" style="width: 700px; height: 400px"></canvas>
          
                  </div>
</div>

<div class="col-lg-4 col-xs-4">
    <p class="text-center">
                        <strong>Classification Rank</strong>
                      </p>
                       <?php
                      for ($i=0; $i < 7 ; $i++) { 
                        echo '<div class="progress-group">';
                        echo '<span class="progress-text">'.$tenHighestKeys[6-$i].'</span>';
                        echo '<span class="progress-number"><b>'.$value[$i].'</b>/'.$total_jumlah.'</span>';
                        echo '<div class="progress sm">';
                        $persentase=($value[$i]/$total_jumlah)*100;
                        echo '<div class="progress-bar progress-bar-red" style="width: '.$persentase.'%"></div>';
                        echo '</div> </div>';
                      }
                      ?>

               
</div> <!-- /.div col -->
</div> <!-- /.div row -->


</div> 

<div class="box-header with-border bg-white">
                
                </div>
<div class="box-header with-border bg-black">
                <h3 class="box-title">Classification Table</h3>
                </div>
<br>
 <table id="example1" class="table table-bordered table-striped">

                <thead>
                      <tr>
                        <th>url</th>
                        <th>Jumlah terklasifikasi</th>
                      </tr>
                    </thead>
                    <tbody>
              <?php
for ($i=0; $i <count($url) ; $i++) { 
  # code...

                   echo   '<tr>';
                   echo     '<td>'.$url[$i].'</td>';
                   echo     '<td>'.$jumlah_x[$i].'</td>';
                   echo   '</tr>';

  }
                    ?>
                    </tbody>
                  </table>



                <div class="box-footer no-padding">
                
                </div><!-- /.footer -->
              </div><!-- /.box -->
</div>



         




<!--bar chart-->

<!-- tabel-->


<script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });

        //pie
    
        var jumlahpie1= "<?php echo $jumlah_pie[0]; ?>";
        var jumlahpie2= "<?php echo $jumlah_pie[1]; ?>";
        var jumlahpie3= "<?php echo $jumlah_pie[2]; ?>";
        var jumlahpie4= "<?php echo $jumlah_pie[3]; ?>";
        var jumlahpie5= "<?php echo $jumlah_pie[4]; ?>";
        var jumlahpie6= "<?php echo $jumlah_pie[5]; ?>";
        var jumlahpie7= "<?php echo $jumlah_pie[6]; ?>";
  
    
        var terklasifikasi= "<?php echo $terklasifikasi; ?>";
        var tidak_terklasifikasi= "<?php echo $tidak_terklasifikasi; ?>";

        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: terklasifikasi,
            color: "#3399FF",
            highlight: "#3399FF",
            label: "Terklasifikasi"
          },
          {
            value: tidak_terklasifikasi,
            color: "#FF66FF",
            highlight: "#FF66FF",
            label: "Tidak terklasifikasi"
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


//barchart

//bar chart
 var areaChartData = {
          labels: ["Perjudian", "Prostitusi", "Radikalisme", "Separatisme", "Perjudian", "Narkoba", "Terorisme"],
          datasets: [
            {
              data: [jumlahpie1, jumlahpie2, jumlahpie3, jumlahpie4, jumlahpie5, jumlahpie6, jumlahpie7]
            }
          ]
        };

var barChartCanvas = $("#barChart").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
        var barChartData = areaChartData;
        barChartData.datasets[0].fillColor = "#3D9970";
        barChartData.datasets[0].strokeColor = "#3D9970";
        barChartData.datasets[0].pointColor = "#3D9970";
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


