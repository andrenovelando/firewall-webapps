<?php

/* @var $this yii\web\View */

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

</section>
<script src="../../vendor/almasaeed2010/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script>
/**
 * This is a basic example on how to instantiate sigma. A random graph is
 * generated and stored in the "graph" variable, and then sigma is instantiated
 * directly with the graph.
 *
 * The simple instance of sigma is enough to make it render the graph on the on
 * the screen, since the graph is given directly to the constructor.
 */
var i,
    s,
    N = 50,
    E = 200,
    g = {
      nodes: [],
      edges: []
    };

// Generate a random graph:
for (i = 0; i < N; i++)
  g.nodes.push({
    id: 'n' + i,
    label: 'Node ' + i,
    x: Math.random(),
    y: Math.random(),
    size: Math.random(),
    color: '#666'
  });

for (i = 0; i < E; i++)
  g.edges.push({
    id: 'e' + i,
    source: 'n' + (Math.random() * N | 0),
    target: 'n' + (Math.random() * N | 0),
    size: Math.random(),
    color: '#ccc'
  });

// Instantiate sigma:
s = new sigma({
  graph: g,
  container: 'graph-container'
});
</script>
