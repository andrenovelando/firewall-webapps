$(function(){
  //map1

  $('#map1').vectorMap({
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
   
    // [
    //   {latLng: [a[i].FIELD2, a[i].FIELD3], name: a[i].FIELD1},
    // ]
  });

});

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
   
    // [
    //   {latLng: [a[i].FIELD2, a[i].FIELD3], name: a[i].FIELD1},
    // ]
  });

});