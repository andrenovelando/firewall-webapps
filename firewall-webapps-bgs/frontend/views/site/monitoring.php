<?php

/* @var $this yii\web\View */

$this->title = 'Monitoring';
?>
<script src="../../vendor/almasaeed2010/adminlte/plugins/chartjs/Chart.min.js"></script>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-6">
              <!-- interactive chart -->
              <div class="box box-primary">
                <div class="box-header with-border bg-black">
                  <i class=" fa fa-line-chart"></i>
                  <h3 class="box-title">Progress Chart</h3>
                  <div class="box-tools pull-right">
                    Real time
                  </div>
                </div>
                <div class="box-body">
                	<div class="box-body">
	                	<div class="box-body">
	                		<div class="box-body">
	                  			<canvas id="updating-chart" height="360%" width="520%"></canvas>
	                  		</div>
	                  	</div>
	                </div>
                </div><!-- /.box-body-->
              </div><!-- /.box -->
            </div><!-- /.col -->
			<div class="col-xs-6">
              <!-- interactive chart -->
              <div class="box box-primary">
                <div class="box-header with-border bg-black">
                  <i class="fa fa-refresh"></i>
                  <h3 class="box-title">Update Data</h3>
                </div>
                <div class="box-body">
                	<div class="row">
		                <div class="box-body">
		                
							<div class="col-xs-6" align="center">
								<div class="small-box" style="background: #7D9EC0">
									<div class="box-body">
										<h2>Crawling</h2>
										<h3 id="nilaiCrawling"></h3>
										<h4 class="glyphicon glyphicon-arrow-up" id="persCrawling"> 67 %</h4>
									</div>
								</div>
							</div>
							
								<div class="col-xs-6" align="center">
								<div class="small-box" style="background: #00FF7F">
									<div class="box-body">
										<h2>Cleaning</h2>
										<h3 id="nilaiCleaning"></h3>
										<h4 class="glyphicon glyphicon-arrow-up" id="persCleaning"> 43 %</h4>
									</div>
								</div>
							</div>
						
						</div>
						<div class="box-body">
							
								<div class="col-xs-6" align="center">
								<div class="small-box" style="background: #E3A869">
									<div class="box-body">
										<h2>Classification</h2>
										<h3 id="nilaiClassification"></h3>
										<h4 class="glyphicon glyphicon-arrow-right" id="persClassification"> 0 %</h4>
									</div>
								</div>
							</div>
							
								<div class="col-xs-6" align="center">
								<div class="small-box" style="background: #8470FF">
									<div class="box-body">
										<h2>Analysis</h2>
										<h3 id="nilaiAnalysis"></h3>
										<h4 class="glyphicon glyphicon-arrow-up" id="persAnalysis"> 1 %</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-xs-6">
              <!-- Bar chart -->
              <div class="box box-primary bg-black">
				<h3 class="progress-label">
				  Proses Crawling
				  <span id="presentaseCrawling"class="pull-right" value=""></span>
				</h3>
				<div class="box-body">
					<div class="progress">
					  <div id="procBarCrawling" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" >
						<span class="sr-only"></span>
					  </div>
					</div>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
			<div class="col-xs-6">
              <!-- Bar chart -->
              <div class="box box-primary bg-black">
				<h3 class="progress-label">
				  Proses Cleaning
				  <span id="presentaseCleaning"class="pull-right" value=""></span>
				</h3>
				<div class="box-body">
					<div class="progress">
					  <div id="procBarCleaning" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" >
						<span class="sr-only"></span>
					  </div>
					</div>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
		  
		  <div class="row">
            <div class="col-xs-6">
              <!-- Bar chart -->
              <div class="box box-primary bg-black">
				<h3 class="progress-label">
				  Proses Classification
				  <span id="presentaseClassification"class="pull-right" value=""></span>
				</h3>
				<div class="box-body">
					<div class="progress">
					  <div id="procBarClassification" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" >
						<span class="sr-only"></span>
					  </div>
					</div>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
			<div class="col-xs-6">
              <!-- Bar chart -->
              <div class="box box-primary bg-black">
				<h3 class="progress-label">
				  Proses Analysis
				  <span id="presentaseAnalysis"class="pull-right" value=""></span>
				</h3>
				<div class="box-body">
					<div class="progress">
					  <div id="procBarAnalysis" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" >
						<span class="sr-only"></span>
					  </div>
					</div>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
    
    <!-- Bootstrap 3.3.5 -->
    
