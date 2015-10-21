<?php

/* @var $this yii\web\View */

$this->title = 'Terorisme';
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


 
<section class="content">
<!-- section 1-->
<div class="box">
                <div class="box-header with-border bg-black">
                 <h3 class="box-title">Terorisme</h3>
</div>



<?php
$handle = fopen("./data result/map/terorisme.csv","r");

$vt=array();
$dt=array();
while(! feof($handle))
  {
    $data=fgetcsv($handle);
    array_push($vt, $data[1]);
    array_push($dt, $data[0]);
  }

$value=array();
$daerah=array();
$total_jumlah=0;
$jumlah=array();
for ($i=1; $i < count($dt) ; $i++) { 
  array_push($value, $vt[$i]);
  array_push($daerah, $dt[$i]);
  $total_jumlah=$total_jumlah+$vt[$i];
    $dummy=(int)$vt[$i];
    $jumlah[$dt[$i]]=$dummy;
}

$marker_value=$value;
rsort($value);
$bigmarker_value=$value[0];
asort($jumlah);
$tenHighest = array_slice($jumlah, -10, null, true);
$tenHighestKeys = array_keys($tenHighest);
fclose($handle);

//search lat lang
$datamap = fopen("./data result/map/latlangdb.csv","r");
$datalat=array();
$datalong=array();
while(! feof($datamap))
  {
    $data=fgetcsv($datamap);
    for ($i=0; $i <count($daerah) ; $i++) { 
      if ($data[0]==$daerah[$i]) {
      array_push($datalat, $data[1]);
      array_push($datalong,$data[2]);
      }
    }

  }
fclose($datamap);

$calonJson=array();
$arrayCalon=array();
$ar=array("fill"=>'#F8E23B',"r"=>10);
for ($i=0; $i < count($daerah); $i++) { 
  if ($marker_value[$i]==$bigmarker_value){
  $calonJson['name']=$daerah[$i];
  $calonJson['latLng']=[(float)$datalat[$i],(float)$datalong[$i]];
  $calonJson['style']=$ar;
  array_push($arrayCalon, $calonJson);
}else{
  $calonJson['name']=$daerah[$i];
  $calonJson['latLng']=[(float)$datalat[$i],(float)$datalong[$i]];
  array_push($arrayCalon, $calonJson);

}
}

//{latLng: [3.595196, 98.672223], name: 'Medan', style: {fill: '#F8E23B', r:20}},
// echo '<br> astaga<br>';
// $string = file_get_contents("./data result/map/latlong.json");
// echo $string;
?> 
                      
<div class="box-body">
<div row>

<div class="col-lg-8 col-xs-4">
<div id="map" style="width: 650px; height: 525px"></div>
</div>

<div class="col-lg-4 col-xs-4">
    <p class="text-center">
                        <strong>Top 10 Cities</strong>
                      </p>
                      <?php
                      for ($i=0; $i < 10 ; $i++) { 
                        echo '<div class="progress-group">';
                        echo '<span class="progress-text">'.$tenHighestKeys[9-$i].'</span>';
                        echo '<span class="progress-number"><b>'.$value[$i].'</b>/'.$total_jumlah.'</span>';
                        echo '<div class="progress sm">';
                        $persentase=($value[$i]/$total_jumlah)*100;
                        echo '<div class="progress-bar progress-bar-yellow" style="width: '.$persentase.'%"></div>';
                        echo '</div> </div>';
                      }
                      ?>
</div> <!-- /.div col -->
</div> <!-- /.div row -->


</div>
</div>

</section>

<script>

$(function(){
  //map1
var myvar = <?php echo json_encode($arrayCalon); ?>;
 
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
    markers: myvar,
    // [
    //   {latLng: [a[i].FIELD2, a[i].FIELD3], name: a[i].FIELD1},
    // ]
  });

});



  </script>



<!-- konten row 1-->
