


<script src="../../vendor/almasaeed2010/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/chartjs/Chart.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/fastclick/fastclick.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/bootstrap/js/bootstrap.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-idn.js"></script>



<setion class="content">
LEL
<!-- section 1-->
<div class="box">
                <div class="box-header with-border bg-black">
                
               
          <div class="btn-group">
                          <button type="button" class="btn bg-black btn-flat" id="all">ALL</button>
                          <button type="button" class="btn bg-black btn-flat" id="konten1">Konten 1</button>
                          <button type="button" class="btn bg-black btn-flat" id="konten2">Konten 2</button>
                          <button type="button" class="btn bg-black btn-flat" id="konten3">Konten 3</button>
                          <button type="button" class="btn bg-black btn-flat" id="konten4">Konten 4</button>
                          <button type="button" class="btn bg-black btn-flat" id="konten5">Konten 5</button>
                          <button type="button" class="btn bg-black btn-flat" id="konten6">Konten 6</button>
                          <button type="button" class="btn bg-black btn-flat" id="konten7">Konten 7</button>

  </div>
</div>
<script type="text/javascript">
 var link=null;
    $(document).ready(function(){
        $("#all").click(function(){
         
            $.ajax({
                type: 'POST',
                url: './data result/map/script.php',
                success: function(data) {
                   link=data;
                }
            });
            return   link;
   });
var a=link;
$("p").text(a);
 $("#konten1").click(function(){

            $.ajax({
                type: 'POST',
                url: './data result/map/scriptt.php',
                success: function(data) {
                    $("p").text(data);
                }
            });
   });

});
</script>


<?php
$handle = fopen("./data result/map/all.csv","r");
$total_jumlah=0;
$jumlah=array();
$value=array();
$daerah=array();
while(! feof($handle))
  {
    $data=fgetcsv($handle);
    $total_jumlah=$total_jumlah+$data[2];
    $dummy=(int)$data[2];
    $jumlah[$data[0]]=$dummy;
    array_push($value, $dummy);
    array_push($daerah, $data[0]);

  }
rsort($value);
asort($jumlah);
$tenHighest = array_slice($jumlah, -10, null, true);
$tenHighestKeys = array_keys($tenHighest);
fclose($handle);

//search lat lang
$datamap = fopen("./data result/map/akhir.csv","r");
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
for ($i=0; $i < count($daerah); $i++) { 
  $calonJson['name']=$daerah[$i];
  $calonJson['latLng']=[(float)$datalat[$i],(float)$datalong[$i]];
  array_push($arrayCalon, $calonJson);
}

// echo json_encode($arrayCalon);

// echo '<br> astaga<br>';
// $string = file_get_contents("./data result/map/latlong.json");
// echo $string;
?> 
                      
<div class="box-body">
<div row>

<div class="col-lg-8 col-xs-4">
<div id="map" style="width: 700px; height: 525px"></div>
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
                        echo '<div class="progress-bar progress-bar-red" style="width: '.$persentase.'%"></div>';
                        echo '</div> </div>';
                      }
                      ?>
</div> <!-- /.div col -->
</div> <!-- /.div row -->


</div>
</div>

</div>
</setion>

<script>

var interval=setInterval(function(){
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
}, 800); 


  </script>



<!-- konten row 1-->
