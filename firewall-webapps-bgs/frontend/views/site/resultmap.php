<?php

/* @var $this yii\web\View */

$this->
 title = 'MAP ANALYSIS';
?>
<script src="/advanced/backend/web/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="/advanced/backend/web/plugins/chartjs/Chart.min.js"></script>
<script src="/advanced/backend/web/plugins/fastclick/fastclick.min.js"></script>
<script src="/advanced/backend/web/bootstrap/js/bootstrap.min.js"></script>
<script src="/advanced/backend/web/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/advanced/backend/web/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="/advanced/backend/web/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="/advanced/backend/web/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/advanced/backend/web/plugins/jvectormap/jquery-jvectormap-idn.js"></script>




<setion class="content">

<!-- section 1-->
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
<div id="map" style="width: 700px; height: 525px"></div>
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
</setion>

<script src="../../vendor/almasaeed2010/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script>
$(function(){
	//map1
  $('#map').vectorMap({
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
    markers: [
      {latLng: [3.7963426, 97.006836], name: 'Aceh'},
      {latLng: [3.595196, 98.672223], name: 'Medan'},
      {latLng: [-6.208763, 106.845599], name: 'Jakarta'},
      {latLng: [1.736837, 98.785112], name: 'Sibolga'},
      {latLng: [0.507068, 101.447779], name: 'Pekanbaru'},
      {latLng: [-7.005145, 110.438125], name: 'Semarang'},
      {latLng: [-6.884082, 107.541304], name: 'Cimahi'},
      {latLng: [0.120863, 117.480045], name: 'Bontang'},
      {latLng: [-0.900291, 119.877999], name: 'Palu'},
      {latLng: [-8.670458, 115.212629], name: 'Denpasar'},
    ]
  });

//table
$("#example1").DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": false,
          "autoWidth": false
        });

});


  </script>



<!-- konten row 1-->
