<?php

/* @var $this yii\web\View */

$this->
 title = 'CLASSIFICATION RESULT';
?>

<script src="/advanced/backend/web/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="/advanced/backend/web/plugins/chartjs/Chart.min.js"></script>
<script src="/advanced/backend/web/plugins/fastclick/fastclick.min.js"></script>

<script src="/advanced/backend/web/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/advanced/backend/web/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="/advanced/backend/web/plugins/slimScroll/jquery.slimscroll.min.js"></script>




<div class="row">

<div class="col-lg-6 col-xs-6">
 <div class="box box-default">
                <div class="box-header bg-black  ">
                  <h3 class="box-title">Chart Data</h3>
                  <div class="box-tools pull-right">
                 
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body ">
                 
                      <div class="chart-responsive">
                        <canvas id="pieChart" height="150"></canvas>
                      </div><!-- ./chart-responsive -->
                    
                </div><!-- /.box-body -->
                <div class="box-footer no-padding">
                
                </div><!-- /.footer -->
              </div><!-- /.box -->
</div>

<div class="col-lg-6 col-xs-6" >
  <div class="info-box bg-black" >
                <span class="info-box-icon"><i class="fa fa-cloud"></i></span>
                <div class="info-box-content">
                <div row>  
                <div class="col-lg-6 col-xs-6" >
                  <h4> Jumlah Data: </h4>
                  </div>
                  <div class="col-lg-3 col-xs-6" >
                <h2 class="text-center">41,410</h2>
                </div>
                  </div>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
</div>

<div class="col-lg-2 col-xs-2" >
              <!-- small box -->
              <div class="small-box bg-gray">
                <div class="inner">
                <h3 class="text-center">70</h3>
                <p class="text-center">Terklasifikasi</p>                  
                </div>     
              </div>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-2">
              <!-- small box -->
              <div class="small-box bg-gray">
                <div class="inner">
                 <h3 class="text-center">70</h3>
                <p class="text-center">Tidak Terklasifikasi</p>     
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
                <h3 class="text-center">70 </h3>
                <p class="text-center">Ratio</p>     
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>

              </div>
            </div><!-- ./col -->



</div>
<!--bar chart-->

<div class="box">
                <div class="box-header with-border bg-black">
                
               
          <div class="btn-group">
                          <button type="button" class="btn bg-black btn-flat">Konten 1</button>
                          <button type="button" class="btn bg-black btn-flat">Konten 2</button>
                          <button type="button" class="btn bg-black btn-flat">Konten 3</button>
                          <button type="button" class="btn bg-black btn-flat">Konten 4</button>
                          <button type="button" class="btn bg-black btn-flat">Konten 5</button>
                          <button type="button" class="btn bg-black btn-flat">Konten 6</button>
                          <button type="button" class="btn bg-black btn-flat">Konten 7</button>
                        </div>


                </div>
                <div class="box-body">


<div row>

<div class="col-lg-8 col-xs-4">
  <div class="chart">
                    <canvas id="barChart" style="width: 700px; height: 525px"></canvas>
          
                  </div>
</div>

<div class="col-lg-4 col-xs-4">
    <p class="text-center">
                        <strong>Top 10 Cities</strong>
                      </p>
                      <div class="progress-group">
                        <span class="progress-text">Add Products to Cart</span>
                        <span class="progress-number"><b>160</b>/200</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Complete Purchase</span>
                        <span class="progress-number"><b>310</b>/400</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Visit Premium Page</span>
                        <span class="progress-number"><b>480</b>/800</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Send Inquiries</span>
                        <span class="progress-number"><b>250</b>/500</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                       <div class="progress-group">
                        <span class="progress-text">Add Products to Cart</span>
                        <span class="progress-number"><b>160</b>/200</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Complete Purchase</span>
                        <span class="progress-number"><b>310</b>/400</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Visit Premium Page</span>
                        <span class="progress-number"><b>480</b>/800</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Send Inquiries</span>
                        <span class="progress-number"><b>250</b>/500</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                       <div class="progress-group">
                        <span class="progress-text">Add Products to Cart</span>
                        <span class="progress-number"><b>160</b>/200</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Complete Purchase</span>
                        <span class="progress-number"><b>310</b>/400</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                        </div>


               
</div> <!-- /.div col -->
</div> <!-- /.div row -->


</div>
</div>

</div>


<!-- tabel-->
<div class="box">
                <div class="box-header with-border bg-black"><h3 class="box-title">Classification Table</h3>
                	<div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    
                  </div>
                  </div>

                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama Website</th>
                        <th>url</th>
                        <th>konten 2</th>
                        <th>konten 3</th>
                        <th>konten 4</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>juara</td>
                        <td>http://www.juara.net/read/sepakbola/spanyol/127523-ronaldo.terlibat.cinta.lokasi</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>megapolitan.kompas</td>
                        <td>http://megapolitan.kompas.com/read/2015/10/12/12421211/Korban.Kebakaran.Pasar.Lontar.Tanah.Abang.Menanti.Arahan.Pemerintah?utm_source=WP&utm_medium=box&utm_campaign=Kknwp</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
</section>

<script src="../../vendor/almasaeed2010/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });

        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: 70,
            color: "#f56954",
            highlight: "#f56954",
            label: "Judi"
          },
          {
            value: 15,
            color: "#00a65a",
            highlight: "#00a65a",
            label: "Konten 2"
          },
          {
            value: 5,
            color: "#f39c12",
            highlight: "#f39c12",
            label: "Konten 3"
          },
          {
            value: 10,
            color: "#00c0ef",
            highlight: "#00c0ef",
            label: "Konten 4"
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
          labels: ["Konten 1", "Konten 2", "Konten 3", "Konten 4", "Konten 5", "Konten 6"],
          datasets: [
            {
              data: [65, 59, 80, 81, 56, 55]
            },
            {
              data: [12, 23, 34, 66, 56, 12]
            },
            { 
              data: [28, 48, 40, 19, 86, 27]
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


