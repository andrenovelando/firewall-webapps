<?php
$handle = fopen("reportMap.csv","r");

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
$datamap = fopen("reportMapDB.csv","r");
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
  $ar=array("fill"=>'#F8E23B',"r"=>($marker_value[$i]/$bigmarker_value)*10);	
  $calonJson['name']=$daerah[$i];
  $calonJson['latLng']=[(float)$datalat[$i],(float)$datalong[$i]];
  $calonJson['style']=$ar;
  array_push($arrayCalon, $calonJson);

}
// Print it out as JSON
echo json_encode($arrayCalon);
?>