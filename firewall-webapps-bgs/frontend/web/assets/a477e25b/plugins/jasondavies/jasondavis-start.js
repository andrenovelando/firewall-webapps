var fill = d3.scale.category20();
  var dataTagCloud = new Array();
  
  function callMe() {  
    var result = false;  
    $.ajax({
        url: "./log/tagcloud.php",
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
  
  for (i = 0; i < a.length; i++) {
        dataTagCloud[i] = new Array(2);
        dataTagCloud[i][0]=a[i].word;
        dataTagCloud[i][1]=a[i].size; 
      }
  d3.layout.cloud().size([500, 400])
      .words(
    dataTagCloud.map(function(d) {
        return {text: d[0], size: d[1]*2};
    
      }))
      .rotate(function() { return ~~(0) * 90; })
      .font("Impact")
      .fontSize(function(d) { return d.size; })
      .on("end", gambar)
      .start();

  function gambar(words) {
    d3.select("#telo").append("svg")
        .attr("width", 500)
        .attr("height", 400)
      .append("g")
        .attr("transform", "translate(250,200)")
      .selectAll("text")
        .data(words)
      .enter().append("text")
        .style("font-size", function(d) { return d.size + "px"; })
        .style("font-family", "Impact")
        .style("fill", function(d, i) { return fill(i); })
        .attr("text-anchor", "middle")
        .attr("transform", function(d) {
          return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
        })
        .text(function(d) { return d.text; });
  }