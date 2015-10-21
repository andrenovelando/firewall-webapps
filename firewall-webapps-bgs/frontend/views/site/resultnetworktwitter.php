<?php

//rank
$rank = fopen("./data result/social network/twitter/rank.csv","r");
$jumlah=array();
$value=array();
while(! feof($rank))
  {
    $data=fgetcsv($rank);
    $dummy=(int)$data[1];
    $jumlah[$data[0]]=$dummy;
    array_push($value, $dummy);

  }
rsort($value);
asort($jumlah);
$tenHighest = array_slice($jumlah, -10, null, true);
$tenHighestKeys = array_keys($tenHighest);
fclose($rank);

$this->title = 'TWITTER NETWORK ANALYSIS';
?>

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
<!-- <script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/misc/sigma.misc.animation.js"></script> -->
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/misc/sigma.misc.bindEvents.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/misc/sigma.misc.bindDOMEvents.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/src/misc/sigma.misc.drawHovers.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/plugins/sigma.parsers.json/sigma.parsers.json.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/plugins/sigma.layout.forceAtlas2/supervisor.js"></script>
<script src="../../vendor/almasaeed2010/adminlte/plugins/sigma.js/plugins/sigma.layout.forceAtlas2/worker.js"></script>
<!-- END SIGMA IMPORTS -->






<section class="content">
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
 <div id="container">
  <style>
    #graph-container {
    
    
      left: 0;
      right: 0;
      height: 500px;

    }
  </style>
  <div id="graph-container"></div>
</div>
</div>

<div class="col-lg-4 col-xs-4">
    <p class="text-center">
                        <strong>Top 10 Player</strong>
                      </p>
                      <?php
                      for ($i=0; $i < 10 ; $i++) { 
                        echo '<div class="progress-group">';
                        echo '<span class="progress-text">'.$tenHighestKeys[9-$i].'</span>';
                        echo '<span class="progress-number"><b>'.$value[$i].'</b></span>';
                        echo '<div class="progress sm">';
                        $persentase=($value[$i]/$value[0])* 100;
                        echo '<div class="progress-bar progress-bar-red" style="width: '.$persentase.'%"></div>';
                        echo '</div> </div>';
                      }
                      ?>

               
</div> <!-- /.div col -->
</div> <!-- /.div row -->


</div>
</div>

</div>

</section>
<script>
/**
 * This is a basic example on how to instantiate sigma. A random graph is
 * generated and stored in the "graph" variable, and then sigma is instantiated
 * directly with the graph.
 *
 * The simple instance of sigma is enough to make it render the graph on the on
 * the screen, since the graph is given directly to the constructor.
 */
 // these are just some preliminary settings 
    var g = {
        nodes: [],
        edges: []
    };

   // Create new Sigma instance in graph-container div (use your div name here) 
   s = new sigma({
   graph: g,
   container: 'graph-container',
   renderer: {
    container: document.getElementById('graph-container'),
    type: 'canvas'
   },
   settings: {
    minNodeSize: 8,
    maxNodeSize: 16
   }
   });

   // first you load a json with (important!) s parameter to refer to the sigma instance   

   sigma.parsers.json(
  './data result/social network/twitter/data.json',
        s,
        function() {
            // this below adds x, y attributes as well as size = degree of the node 

            var i,
                    nodes = s.graph.nodes(),
                    len = nodes.length;

            for (i = 0; i < len; i++) {
                nodes[i].x = Math.random();
                nodes[i].y = Math.random();
                nodes[i].size = s.graph.degree(nodes[i].id);
                nodes[i].color = 'rgb('+Math.round(Math.random()*256)+','+
                      Math.round(Math.random()*256)+','+
                      Math.round(Math.random()*256)+')'

            }

            // Refresh the display:
            s.refresh();

            // ForceAtlas Layout
           // s.startForceAtlas2();
        }
   ); 
</script>
