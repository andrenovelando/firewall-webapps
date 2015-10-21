<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DatawebForm */
?>
<?php
/* @var $this yii\web\View */
$this->
 title = 'WEBSITE REPORT'; ?>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/sigma.core.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/conrad.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/utils/sigma.utils.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/utils/sigma.polyfills.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/sigma.settings.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/classes/sigma.classes.dispatcher.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/classes/sigma.classes.configurable.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/classes/sigma.classes.graph.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/classes/sigma.classes.camera.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/classes/sigma.classes.quad.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/classes/sigma.classes.edgequad.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/captors/sigma.captors.mouse.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/captors/sigma.captors.touch.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/sigma.renderers.canvas.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/sigma.renderers.webgl.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/sigma.renderers.svg.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/sigma.renderers.def.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/webgl/sigma.webgl.nodes.def.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/webgl/sigma.webgl.nodes.fast.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/webgl/sigma.webgl.edges.def.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/webgl/sigma.webgl.edges.fast.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/webgl/sigma.webgl.edges.arrow.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/canvas/sigma.canvas.labels.def.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/canvas/sigma.canvas.hovers.def.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/canvas/sigma.canvas.nodes.def.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/canvas/sigma.canvas.edges.def.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/canvas/sigma.canvas.edges.curve.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/canvas/sigma.canvas.edges.arrow.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/canvas/sigma.canvas.edges.curvedArrow.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/canvas/sigma.canvas.edgehovers.def.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/canvas/sigma.canvas.edgehovers.curve.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/canvas/sigma.canvas.edgehovers.arrow.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/canvas/sigma.canvas.edgehovers.curvedArrow.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/canvas/sigma.canvas.extremities.def.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/svg/sigma.svg.utils.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/svg/sigma.svg.nodes.def.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/svg/sigma.svg.edges.def.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/svg/sigma.svg.edges.curve.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/svg/sigma.svg.labels.def.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/renderers/svg/sigma.svg.hovers.def.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/middlewares/sigma.middlewares.rescale.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/middlewares/sigma.middlewares.copy.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/misc/sigma.misc.bindEvents.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/misc/sigma.misc.bindDOMEvents.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/misc/sigma.misc.drawHovers.js"></script>
<!-- Bootstrap 3.3.5 -->
<!-- page script -->
<!-- /.info-box -->
<!-- /.info-box -->
<!-- /.col -->
<section class="content">
<div class="info-box bg-gray">
	<span class="info-box-icon bg-black"><i class="glyphicon glyphicon-globe"></i></span>
	<div class="info-box-content" style="text-align:center">
		<span class="info-box-text">
		<h1><?=$model->Nama?></h1>
		</span>
	</div>
	<!-- /.info-box-content -->
</div>
<div class="row">
	<div class="col-md-6">
		<div class="box box-default box-solid">
			<div class="box-header with-border bg-black" style="text-align:center">
				<h3 class="box-title">TAG CLOUD</h3>
				<!-- /.box-tools -->
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div id="telo" style="height: 400px; text-align:center; "></div>
			</div>
			<!-- /.box-body -->
		</div>
	</div>
	<!-- /.col (LEFT) -->
	<div class="col-md-6">
		<div class="box box-default box-solid ">
			<div class="box-header with-border bg-black" style="text-align:center">
				<h3 class="box-title">CLASSIFICATION</h3>
				<!-- /.box-tools -->
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div style="height: 400px">
					<div class="row">
						<div class="col-lg-4 col-xs-4">
							<!-- small box -->
							<div class="small-box bg-black">
								<div class="inner">
									<h3 id="jmlKlasifikasi" class="text-center"></h3>
									<p class="text-center">Jumlah Data</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-xs-4">
							<!-- small box -->
							<div class="small-box bg-gray">
								<div class="inner">
									<h3 id="terklasifikasi"class="text-center"></h3>
									<p class="text-center">Terklasifikasi</p>
								</div>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-4 col-xs-4">
							<!-- small box -->
							<div class="small-box bg-gray">
								<div class="inner">
									<h3 id="tidakTerklasifikasi" class="text-center">70</h3>
									<p class="text-center">Tidak Terklasifikasi</p>
								</div>
							</div>
						</div>
						<!-- ./col -->
						<!-- ./col -->
					</div>
					<div class="row">
						<div class="box-body">
							<div class="chart">
								<canvas id="barChartClass"></canvas>
							</div>
						</div>
						<!-- ./col -->
					</div>
				</div>
			</div>
			<!-- /.box-body -->
		</div>
	</div>
	<!-- /.col (RIGHT) -->
</div>
<!-- /.row -->
<!-- /.content -->
<div class="box box-default box-solid">
	<div class="box-header with-border bg-black" style="text-align:center">
		<h3 class="box-title">SENTIMENT ANALYSIS</h3>
		<!-- /.box-tools -->
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<div class="row">
			<!-- /.col -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-6 col-xs-6">
				<div class="info-box bg-black">
					<span class="info-box-icon"><i class="fa fa-cloud"></i></span>
					<div class="info-box-content">
						<div row>
							<div class="col-lg-4 col-xs-6">
								<h4>Data Count:</h4>
							</div>
							<div class="col-lg-3 col-xs-6">
								<h2 id="jmlDataSentiment" class="text-center"></h2>
							</div>
						</div>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<div class="col-lg-2 col-xs-2">
				<!-- small box -->
				<div class="small-box bg-blue">
					<div class="inner">
						<h3 id="jmlSentimentPositif" class="text-center"></h3>
						<p class="text-center">POSITIF</p>
					</div>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-2 col-xs-2">
				<!-- small box -->
				<div class="small-box bg-maroon">
					<div class="inner">
						<h3 id="jmlSentimentNegatif" class="text-center"></h3>
						<p class="text-center">NEGATIF</p>
					</div>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-2 col-xs-2">
				<!-- small box -->
				<div class="small-box bg-gray">
					<div class="inner">
						<h3 id="jmlSentimentNetral"class="text-center"></h3>
						<p class="text-center">NETRAL</p>
					</div>
				</div>
			</div>
			<!-- ./col -->
		</div>
		<div class="row">
			<div class="box-body">
				<div class="chart">
					<canvas id="barChart" style="height:300px"></canvas>
				</div>
			</div>
		</div>
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->
<div class="box box-default box-solid">
	<div class="box-header with-border bg-black" style="text-align:center">
		<h3 class="box-title">NETWORK ANALYSIS</h3>
		<!-- /.box-tools -->
	</div>
	<!-- /.box-header -->
	<div class="box-body" style="height: 400px;">
		<div class="col-md-8">
			<div id="container">
				<style>
    #graph-container {
      left: 0;
      right: 0;
      position: absolute;
    }
				</style>
				<div id="graph-container" style="height: 350px;"></div>
			</div>
		</div>
		<div class="col-md-4">
			<!-- USERS LIST -->
			
								<div >
					<p class="text-center">
						<strong>Top User Active</strong>
					</p>
					<div class="progress-group">
                        <span class="progress-text">USER 1</span>
                        <span class="progress-number"><b>160</b>/200</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">USER 2</span>
                        <span class="progress-number"><b>310</b>/400</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">USER 3</span>
                        <span class="progress-number"><b>480</b>/800</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">USER 4</span>
                        <span class="progress-number"><b>250</b>/500</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                       <div class="progress-group">
                        <span class="progress-text">USER 5</span>
                        <span class="progress-number"><b>160</b>/200</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                        </div>
						</div><!-- /.progress-group -->
						<div class="progress-group">
                        <span class="progress-text">USER 6</span>
                        <span class="progress-number"><b>160</b>/200</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                        </div>
						</div><!-- /.progress-group -->
						<div class="progress-group">
                        <span class="progress-text">USER 7</span>
                        <span class="progress-number"><b>160</b>/200</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                        </div>
						</div><!-- /.progress-group -->
					<!-- /.div col -->
				</div>
				<!-- /.box-body -->
		
			<!--/.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->
<div class="box box-default box-solid">
	<div class="box-header with-border bg-black" style="text-align:center">
		<h3 class="box-title">MAP ANALYSIS</h3>
		<!-- /.box-tools -->
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<!-- /.box-header -->
		<div class="box-body no-padding">
			<div class="row">
				<div class="col-lg-8 col-xs-4">
					<div id="newmap" style="padding-top:50px; width: 700px; height: 500px"></div>
				</div>
				<div class="col-lg-4 col-xs-4">
					<p class="text-center">
						<strong>Top 10 Cities</strong>
					</p>
					<div class="progress-group">
						<span id="topKota0" class="progress-text"></span>
						<span id="jmlAkses0" class="progress-number"></span>
						<div class="progress sm">
							<div id="cssKota0" class="progress-bar progress-bar-yellow"></div>
						</div>
					</div>
					<!-- /.progress-group -->
					<div class="progress-group">
						<span id="topKota1" class="progress-text"></span>
						<span id="jmlAkses1" class="progress-number"></span>
						<div class="progress sm">
							<div id="cssKota1" class="progress-bar progress-bar-yellow"></div>
						</div>
					</div>
					<!-- /.progress-group -->
					<div class="progress-group">
						<span id="topKota2" class="progress-text"></span>
						<span id="jmlAkses2" class="progress-number"></span>
						<div class="progress sm">
							<div id="cssKota2" class="progress-bar progress-bar-yellow"></div>
						</div>
					</div>
					<!-- /.progress-group -->
					<div class="progress-group">
						<span id="topKota3" class="progress-text"></span>
						<span id="jmlAkses3" class="progress-number"></span>
						<div class="progress sm">
							<div id="cssKota3" class="progress-bar progress-bar-yellow"></div>
						</div>
					</div>
					<!-- /.progress-group -->
					<div class="progress-group">
						<span id="topKota4" class="progress-text"></span>
						<span id="jmlAkses4" class="progress-number"></span>
						<div class="progress sm">
							<div id="cssKota4" class="progress-bar progress-bar-yellow"></div>
						</div>
					</div>
					<!-- /.progress-group -->
					<div class="progress-group">
						<span id="topKota5" class="progress-text"></span>
						<span id="jmlAkses5" class="progress-number"></span>
						<div class="progress sm">
							<div id="cssKota5" class="progress-bar progress-bar-yellow"></div>
						</div>
					</div>
					<!-- /.progress-group -->
					<div class="progress-group">
						<span id="topKota6" class="progress-text"></span>
						<span id="jmlAkses6" class="progress-number"></span>
						<div class="progress sm">
							<div id="cssKota6" class="progress-bar progress-bar-yellow"></div>
						</div>
					</div>
					<!-- /.progress-group -->
					<div class="progress-group">
						<span id="topKota7" class="progress-text"></span>
						<span id="jmlAkses7" class="progress-number"></span>
						<div class="progress sm">
							<div id="cssKota7" class="progress-bar progress-bar-yellow"></div>
						</div>
					</div>
					<!-- /.progress-group -->
					<div class="progress-group">
						<span id="topKota8" class="progress-text"></span>
						<span id="jmlAkses8" class="progress-number"></span>
						<div class="progress sm">
							<div id="cssKota8" class="progress-bar progress-bar-yellow"></div>
						</div>
					</div>
					<!-- /.progress-group -->
					<div class="progress-group">
						<span id="topKota9" class="progress-text"></span>
						<span id="jmlAkses9" class="progress-number"></span>
						<div class="progress sm">
							<div id="cssKota9" class="progress-bar progress-bar-yellow"></div>
						</div>
					</div>
					<!-- /.div col -->
				</div>
				<!-- /.div row -->
				<!-- /.div col -->
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.box-body -->
		<!-- /.box -->
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->
</section>
<script src="../../vendor/almasaeed2010/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/chartjs/Chart.min.js"></script>
<script>
sigma.utils.pkg('sigma.canvas.nodes');
sigma.canvas.nodes.image = (function() {
  var _cache = {},
      _loading = {},
      _callbacks = {};
  // Return the renderer itself:
  var renderer = function(node, context, settings) {
    var args = arguments,
        prefix = settings('prefix') || '',
        size = node[prefix + 'size'],
        color = node.color || settings('defaultNodeColor'),
        url = node.url;
    if (_cache[url]) {
      context.save();
      // Draw the clipping disc:
      context.beginPath();
      context.arc(
        node[prefix + 'x'],
        node[prefix + 'y'],
        node[prefix + 'size'],
        0,
        Math.PI * 2,
        true
      );
      context.closePath();
      context.clip();
      // Draw the image
      context.drawImage(
        _cache[url],
        node[prefix + 'x'] - size,
        node[prefix + 'y'] - size,
        2 * size,
        2 * size
      );
      // Quit the "clipping mode":
      context.restore();
      // Draw the border:
      context.beginPath();
      context.arc(
        node[prefix + 'x'],
        node[prefix + 'y'],
        node[prefix + 'size'],
        0,
        Math.PI * 2,
        true
      );
      context.lineWidth = size / 5;
      context.strokeStyle = node.color || settings('defaultNodeColor');
      context.stroke();
    } else {
      sigma.canvas.nodes.image.cache(url);
      sigma.canvas.nodes.def.apply(
        sigma.canvas.nodes,
        args
      );
    }
  };
  // Let's add a public method to cache images, to make it possible to
  // preload images before the initial rendering:
  renderer.cache = function(url, callback) {
    if (callback)
      _callbacks[url] = callback;
    if (_loading[url])
      return;
    var img = new Image();
    img.onload = function() {
      _loading[url] = false;
      _cache[url] = img;
      if (_callbacks[url]) {
        _callbacks[url].call(this, img);
        delete _callbacks[url];
      }
    };
    _loading[url] = true;
    img.src = url;
  };
  return renderer;
})();
// Now that's the renderer has been implemented, let's generate a graph
// to render:
var i,
    s,
    img,
    N = 10,
    E = 10,
    g = {
      nodes: [],
      edges: []
    },
    urls = [
      'img/img1.png',
      'img/img2.png',
      'img/img3.png',
      'img/img4.png'
    ],
    loaded = 0,
    colors = [
      '#617db4',
      '#668f3c',
      '#c6583e',
      '#b956af'
    ];
// Generate a random graph, with ~30% nodes having the type "image":
for (i = 0; i < N; i++) {
  img = Math.random() >= 0.7;
  g.nodes.push({
    id: 'n' + i,
    label: 'Node ' + i,
    //type: img ? 'image' : 'def',
    //url: img ? urls[Math.floor(Math.random() * urls.length)] : null,
    x: Math.random(),
    y: Math.random(),
    size: Math.random(),
    color: colors[Math.floor(Math.random() * colors.length)]
  });
}
for (i = 0; i < E; i++)
  g.edges.push({
    id: 'e' + i,
    source: 'n' + (Math.random() * N | 0),
    target: 'n' + (Math.random() * N | 0),
    size: Math.random()
  });
// Then, wait for all images to be loaded before instanciating sigma:
urls.forEach(function(url) {
  sigma.canvas.nodes.image.cache(
    url,
    function() {
      if (++loaded === urls.length)
        // Instantiate sigma:
        s = new sigma({
          graph: g,
          renderer: {
            // IMPORTANT:
            // This works only with the canvas renderer, so the
            // renderer type set as "canvas" is necessary here.
            container: document.getElementById('graph-container'),
            type: 'canvas'
          },
          settings: {
            minNodeSize: 8,
            maxNodeSize: 16,
          }
        });
    }
  );
});
</script>

<script>
function dataMap() {  
    var result = false;  
    $.ajax({
        url: "./log/reportMap.php",
        type: "GET",
        async: false,
        dataType: 'json',              
        success: function(response){
            result = response;
            return response;
		} 
	});
	return result;
	}
function dataTopCities() {  
    var result = false;  
    $.ajax({
        url: "./log/reportTopCities.php",
        type: "GET",
        async: false,
        dataType: 'text',              
        success: function(response){
            result = response;
            return response;
		} 
	});
	return result;
	}
	var myvar=dataMap();
	var topCities=JSON.parse(dataTopCities());
	var totalAkses=0;
	var tempCities = new Array();
	for (i = 0; i < topCities.length; i++) {
				totalAkses=totalAkses+parseInt(topCities[i].jumlah_akses);
				tempCities[i] = new Array(2);
				tempCities[i][0]=topCities[i].lokasi;
				tempCities[i][1]=parseInt(topCities[i].jumlah_akses);	
			}
	//{latLng: [3.595196, 98.672223], name: 'Medan', style: {fill: '#F8E23B', r:20}},
	

	//{"name":"kabupaten kepulauan mentawai","latLng":[-1.1120569,101.615776]}
	console.log(myvar);
	$(function(){
	//map1
  $('#newmap').vectorMap({
    scaleColors: ['#C8EEFF', '#0071A4'],
    normalizeFunction: 'polynomial',
    hoverOpacity: 0.7,
    hoverColor: false,
    markerStyle: {
      initial: {
        fill: '#F8E23B',
        stroke: '#383f47'
      }
    },
    backgroundColor: '#5858FA',
    markers: myvar,
  });
  $("#example1").DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": false,
          "autoWidth": false
        });
  });
  
			
	topCities=tempCities.sort(function(a,b) {
	return a[1] < b[1];
	});
	for(i=0;i<10;i++)
	{
		document.getElementById("topKota"+i).innerHTML =topCities[i][0];
		document.getElementById("jmlAkses"+i).innerHTML =topCities[i][1];
		document.getElementById("cssKota"+i).style.width =(topCities[i][1]/totalAkses)*100+'%';
	}
  </script>
<script>
	function callMe() {  
    var result = false;  
    $.ajax({
        url: "./log/reportSentiment.php",
        type: "GET",
        async: false,
        dataType: 'text',              
        success: function(response){
            result = response;
            return response;
		} 
	});
	return result;
	}
	var dataSentiment=JSON.parse(callMe());
	//console.log(dataSentiment);
   var jmlPositif=0;
   var jmlNegatif=0;
   var jmlNetral=0;
   for(i=0;i<dataSentiment.length;i++)
   {
	   jmlPositif=parseInt(dataSentiment[i].positif)+jmlPositif;
	   jmlNegatif=parseInt(dataSentiment[i].negatif)+jmlNegatif;
	   jmlNetral=parseInt(dataSentiment[i].netral)+jmlNetral;
   }
   document.getElementById("jmlSentimentPositif").innerHTML =jmlPositif;
   document.getElementById("jmlSentimentNegatif").innerHTML =jmlNegatif;
   document.getElementById("jmlSentimentNetral").innerHTML =jmlNetral;
   document.getElementById("jmlDataSentiment").innerHTML =jmlPositif+jmlNegatif+jmlNetral;
   var areaChartData = {
          labels: ["Pornografi", "Prostitusi", "Radikalisme", "Separatisme", "Perjudian", "Narkoba","Terorisme"],
          datasets: [
            {
              data: [dataSentiment[0].positif, dataSentiment[1].positif, dataSentiment[2].positif, dataSentiment[3].positif, dataSentiment[4].positif, dataSentiment[5].positif,dataSentiment[6].positif]
            },
            {
              data: [dataSentiment[0].negatif, dataSentiment[1].negatif, dataSentiment[2].negatif, dataSentiment[3].negatif, dataSentiment[4].negatif, dataSentiment[5].negatif,dataSentiment[6].negatif]
            },
            { 
              data: [dataSentiment[0].netral, dataSentiment[1].netral, dataSentiment[2].netral, dataSentiment[3].netral, dataSentiment[4].netral, dataSentiment[5].netral,dataSentiment[6].netral]
            }
          ]
        };
var barChartCanvas = $("#barChart").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
        var barChartData = areaChartData;
        barChartData.datasets[0].fillColor = "#0e77cb";
        barChartData.datasets[0].strokeColor = "#0e77cb";
        barChartData.datasets[0].pointColor = "#0e77cb";
        barChartData.datasets[1].fillColor = "#CF0053";
        barChartData.datasets[1].strokeColor = "#CF0053";
        barChartData.datasets[1].pointColor = "#CF0053";
         barChartData.datasets[2].fillColor = "#AAAAAA";
        barChartData.datasets[2].strokeColor = "#AAAAAA";
        barChartData.datasets[2].pointColor = "#AAAAAA";
        var barChartOptions = {
          scaleBeginAtZero: true,
          scaleShowGridLines: true,
          scaleGridLineColor: "rgba(0,0,0,.05)",
          scaleGridLineWidth: 1,
          scaleShowHorizontalLines: true,
          scaleShowVerticalLines: true,
          barShowStroke: true,
          barStrokeWidth: 2,
          barValueSpacing: 5,
          barDatasetSpacing: 1,
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
          responsive: true,
          maintainAspectRatio: true
        };
        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);
    </script>
<script>
	function callMe() {  
    var result = false;  
    $.ajax({
        url: "./log/reportKlasifikasi.php",
        type: "GET",
        async: false,
        dataType: 'text',              
        success: function(response){
            result = response;
            return response;
		} 
	});
	return result;
	}
	var a=JSON.parse(callMe());
	var jumData=0;
	for (i=0;i<a.length;i++)
	{
		jumData=jumData+parseInt(a[i].value);
	}
	
	document.getElementById("jmlKlasifikasi").innerHTML =jumData;
	document.getElementById("terklasifikasi").innerHTML =jumData-a[a.length-1].value;
	document.getElementById("tidakTerklasifikasi").innerHTML =a[a.length-1].value;
   var areaChartData = {
          labels: ["Pornografi", "Prostitusi", "Radikalisme", "Separatisme", "Perjudian", "Narkoba","Terorisme"],
          datasets: [
            {
              data: [parseInt(a[0].value),parseInt(a[1].value),parseInt(a[2].value),parseInt(a[3].value),parseInt(a[4].value),parseInt(a[5].value),parseInt(a[6].value)]
            }
          ]
        };
var barChartCanvas = $("#barChartClass").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
        var barChartData = areaChartData;
        barChartData.datasets[0].fillColor = "#0e77cb";
        barChartData.datasets[0].strokeColor = "#0e77cb";
        barChartData.datasets[0].pointColor = "#0e77cb";
        var barChartOptions = {
          scaleBeginAtZero: true,
          scaleShowGridLines: true,
          scaleGridLineColor: "rgba(0,0,0,.05)",
          scaleGridLineWidth: 1,
          scaleShowHorizontalLines: true,
          scaleShowVerticalLines: true,
          barShowStroke: true,
          barStrokeWidth: 2,
          barValueSpacing: 5,
          barDatasetSpacing: 1,
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
          responsive: true,
          maintainAspectRatio: true
        };
        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);
    </script>