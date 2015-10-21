 <?php
$link1=$_POST['link1'];
$handle = fopen($link1,"r");
$total_jumlah=0;
$jumlah=array();
$value=array();
$daerah=array();
if ($handle!=null){
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
echo $total_jumlah;
}
//search lat lang
// $datamap = fopen($link2,"r");
// $datalat=array();
// $datalong=array();
// while(! feof($datamap))
//   {
//     $data=fgetcsv($datamap);
//     for ($i=0; $i <count($daerah) ; $i++) { 
//       if ($data[0]==$daerah[$i]) {
//       array_push($datalat, $data[1]);
//       array_push($datalong,$data[2]);
//       }
//     }

//   }
// fclose($datamap);

// $calonJson=array();
// $arrayCalon=array();
// for ($i=0; $i < count($daerah); $i++) { 
//   $calonJson['name']=$daerah[$i];
//   $calonJson['latLng']=[(float)$datalat[$i],(float)$datalong[$i]];
//   array_push($arrayCalon, $calonJson);
// }


//echo json_encode($arrayCalon);
?>