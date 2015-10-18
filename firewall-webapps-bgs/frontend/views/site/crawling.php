<?php

/* @var $this yii\web\View */

$this->title = 'Crawling';
?>
<script src="//www.chartjs.org/assets/Chart.min.js"></script>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-6">
              <!-- interactive chart -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class=" fa fa-line-chart"></i>
                  <h3 class="box-title"></h3>
                  <div class="box-tools pull-right">
                    Real time
                    <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                      <button type="button" class="btn btn-default btn-xs active" data-toggle="on">On</button>
                      <button type="button" class="btn btn-default btn-xs" data-toggle="off">Off</button>
                    </div>
                  </div>
                </div>
                <div class="box-body">
                  <canvas id="updating-chart" height="250%" width="500%"></canvas>
                </div><!-- /.box-body-->
              </div><!-- /.box -->
            </div><!-- /.col -->
			<div class="col-xs-6">
              <!-- interactive chart -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="fa fa-refresh"></i>
                  <h3 class="box-title">Update Data</h3>
                </div>
                <div class="row">
					<div class="col-xs-5" align="center">
						<h1 id="nilaiKategoriSatu">1 %</h1><br>
						<h5 id="namaKategoriSatu" >Perampokan</h5>
					</div>
					<div class="col-xs-5" align="center">
						<h1 id="nilaiKategoriDua">2 %</h1><br>
						<h5 id="namaKategoriDua" >Peradilan</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-5" align="center">
						<h1 id="nilaiKategoriTiga">3 %</h1><br>
						<h5 id="namaKategoriTiga" >Penampakan</h5>
					</div>
					<div class="col-xs-5" align="center">
						<h1 id="nilaiKategoriEmpat">4 %</h1><br>
						<h5 id="namaKategoriEmpat" >Peraduan</h5>
					</div>
				</div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-xs-12">
              <!-- Bar chart -->
              <div class="box box-primary">
				<h3 class="progress-label">
				  Proses Crawling
				  <span id="nilaiPresentase"class="pull-right" value=""></span>
				</h3>
				<div class="progress">
				  <div id="procBar" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" >
					<span class="sr-only"></span>
				  </div>
				</div>
                
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
    
    <!-- Bootstrap 3.3.5 -->
    <script src="../../vendor/almasaeed2010/adminlte/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../vendor/almasaeed2010/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
	
<script>
	  var a=0,b=0,c=0,d=0;
	  var canvas = document.getElementById('updating-chart'),
		ctx = canvas.getContext('2d'),
		startingData = {
		  labels: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25],
		  datasets: [
			  {
				  label: "satu",
				  fillColor: "rgba(51,255,255, 0.3)",
				  strokeColor: "rgb(51,204,255)",
				  pointColor: "rgb(51,153,255)",
				  pointStrokeColor: "rgb(51,153,255)",
				  data: [65, 59, 80, 81, 56, 55, 40, 59, 80, 81, 56, 55, 40, 59, 80, 81, 56, 55, 40, 59, 80, 81, 56, 55, 40]
			  },
			  {
				  label: "dua",
				  fillColor: "rgba(51,255,204, 0.2)",
				  strokeColor: "rgb(51,204,204)",
				  pointColor: "rgb(51,153,204)",
				  pointStrokeColor: "rgb(51,153,204)",
				  data: [28, 48, 40, 19, 86, 27, 90, 48, 40, 19, 86, 27, 90, 48, 40, 19, 86, 27, 90, 48, 40, 19, 86, 27, 90]
			  },
			  {
				  label: "tiga",
				  fillColor: "rgba(51,102,255, 0.2)",
				  strokeColor: "rgb(51,51,255)",
				  pointColor: "rgb(51,0,255)",
				  pointStrokeColor: "rgb(51,0,255)",
				  data: [87, 89, 92, 67, 34, 11, 0, 89, 92, 67, 34, 11, 0, 89, 92, 67, 34, 11, 0, 89, 92, 67, 34, 11, 0]
			  },
			  {
				  label: "empat",
				  fillColor: "rgba(51,102,204, 0.2)",
				  strokeColor: "rgb(51,51,204)",
				  pointColor: "rgb(51,0,204)",
				  pointStrokeColor: "rgb(51,0,204)",
				  data: [67, 21, 12, 83, 53, 56, 78, 21, 12, 83, 53, 56, 78, 21, 12, 83, 53, 56, 78, 21, 12, 83, 53, 56, 78]
			  }
		  ]
		},
		latestLabel = startingData.labels[24]
		;
		


		// Reduce the animation steps for demo clarity.
		var myLiveChart = new Chart(ctx).Line(startingData, {animationSteps: 15,    
			multiTooltipTemplate: "<%=datasetLabel%> - <%= value %>"});

		var interfal=setInterval(function(){
			  // Add two random numbers for each dataset
			  if(latestLabel>99)
				{
					clearInterval(interfal);
				}
			  persen=latestLabel/100*100;
			  var persentase=persen+"%";
			  document.getElementById("procBar").style.width = persentase;
			  document.getElementById("nilaiPresentase").innerHTML = persentase;
			  a=a+Math.random() * 100;
			  b=b+Math.random() * 100;
			  c=c+Math.random() * 100;
			  d=d+Math.random() * 100;
			  
			  myLiveChart.addData([a, b, c, d], ++latestLabel);
			  // Remove the first point so we dont just add values forever
			  myLiveChart.removeData();
			}, 800);  
		
		$("#realtime .btn").click(function () {
          if ($(this).data("toggle") === "on") {
			interfal=setInterval(function(){
				if(latestLabel>99)
				{
					clearInterval(interfal);
				}
			  // Add two random numbers for each dataset
			  persen=latestLabel/100*100;
			  var persentase=persen+"%";
			  document.getElementById("procBar").style.width = persentase;
			  document.getElementById("nilaiPresentase").innerHTML = persentase;
			  a=a+Math.random() * 100;
			  b=b+Math.random() * 100;
			  c=c+Math.random() * 100;
			  d=d+Math.random() * 100;
			  
			  myLiveChart.addData([a, b, c, d], ++latestLabel);
			  // Remove the first point so we dont just add values forever
			  myLiveChart.removeData();
			}, 800);  
          }
          else {
            clearInterval(interfal);
          }
          
        });
		
	</script>

        

