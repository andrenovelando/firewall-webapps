<?php

$handle = fopen("./data result/tag cloud/tagcloud.csv","r");
$total_jumlah=0;
$temp1=array();
$temp2=array();
while(! feof($handle))
  {
    $data=fgetcsv($handle);
    array_push($temp1,$data[0]);
    array_push($temp2,$data[1]);
  }
$kata=array();
$nilai=array();
$tuple=array();
for ($i=1; $i < count($temp1) ; $i++) { 
  array_push($kata, $temp1[$i]);
  array_push($nilai, $temp2[$i]);
  $total_jumlah=$total_jumlah+$temp2[$i];
  $dummy=(int)$temp2[$i];
  $tuple[$temp1[$i]]=$dummy;
}

rsort($nilai);
asort($tuple);
$tenHighest = array_slice($tuple, -10, null, true);
$tenHighestKeys = array_keys($tenHighest);
fclose($handle);

$this->title = 'TAG CLOUD';
?>


<setion class="content">

<!-- section 1-->
<div class="box">
                <div class="box-header with-border bg-black">
                
      
                </div>
                <div class="box-body">


<div row>

<div class="col-lg-8 col-xs-4">
<div id="result-tag">  </div>
</div>

<div class="col-lg-4 col-xs-4">
    <p class="text-center">
                        <strong>Top 10 Words</strong>
                      </p>
                    <?php
                      for ($i=0; $i < 10 ; $i++) { 
                        echo '<div class="progress-group">';
                        echo '<span class="progress-text">'.$tenHighestKeys[9-$i].'</span>';
                        echo '<span class="progress-number"><b>'.$nilai[$i].'</b>/'.$total_jumlah.'</span>';
                        echo '<div class="progress sm">';
                        $persentase=($nilai[$i]/$total_jumlah)*100;
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
