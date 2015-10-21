function callMe() {  
		var result = false;  
		$.ajax({
			url: "isiFlot.php",
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
	var jumlahData=0;
	var valCrawling = new Array();
	var valCleaning = new Array();
	var valClassification = new Array();
	var valAnalysis = new Array();
	var valLabel= new Array();
	
	var jumlahTask=100000;
	
	for(i=0;i<a.length;i++)
	{
		valCrawling.push(parseInt(a[i].Crawling));
		valCleaning.push(parseInt(a[i].Cleaning));
		valClassification.push(parseInt(a[i].Classification));
		valAnalysis.push(parseInt(a[i].Analysis));
		valLabel.push(parseInt(i+1));
	}
	
	  var valueCrawling=0;
	  var valueCleaning=0;
	  var valueClassification=0;
	  var valueAnalysis=0;
	  
	  document.getElementById("nilaiCrawling").innerHTML = valueCrawling;	  
	  document.getElementById("nilaiCleaning").innerHTML = valueCleaning;	  
	  document.getElementById("nilaiClassification").innerHTML = valueClassification;	  
	  document.getElementById("nilaiAnalysis").innerHTML = valueAnalysis;	  
	  
	  var canvas = document.getElementById('updating-chart'),  	  
		ctx = canvas.getContext('2d'),
		startingData = {
		  labels: [-9,-8,-7,-6,-5,-4,-3,-2,-1,0],
		  datasets: [
			  {
				  label: "Crawling",
				  fillColor: "rgba(51,255,255, 0)",
				  strokeColor: "rgb(125,158,192)",
				  pointColor: "rgb(125,158,192)",
				  pointStrokeColor: "rgb(51,153,255)",
				  data: [0,0,0,0,0,0,0,0,0,0]
			  },
			  {
				  label: "Cleaning",
				  fillColor: "rgba(51,255,204, 0)",
				  strokeColor: "rgb(0,255,127)",
				  pointColor: "rgb(0,255,127)",
				  pointStrokeColor: "rgb(51,153,204)",
				  data: [0,0,0,0,0,0,0,0,0,0]
			  },
			  {
				  label: "Classification",
				  fillColor: "rgba(51,102,255, 0)",
				  strokeColor: "rgb(227,168,105)",
				  pointColor: "rgb(227,168,105)",
				  pointStrokeColor: "rgb(51,0,255)",
				  data: [0,0,0,0,0,0,0,0,0,0]
			  },
			  {
				  label: "Analysis",
				  fillColor: "rgba(51,102,204, 0)",
				  strokeColor: "rgb(132,112,255)",
				  pointColor: "rgb(132,112,255)",
				  pointStrokeColor: "rgb(51,0,204)",
				  data: [0,0,0,0,0,0,0,0,0,0]
			  }
		  ]
		},
		latestLabel = 0
		;
		


		// Reduce the animation steps for demo clarity.
		var myLiveChart = new Chart(ctx).Line(startingData, {
			animationSteps: 15,    
			multiTooltipTemplate: "<%=datasetLabel%> - <%= value %>"});

		var interfal=setInterval(function(){
			  // Add two random numbers for each dataset
			  document.getElementById("procBarCrawling").style.width = Math.round(valueCrawling/jumlahTask*100)+"%" ;
			  document.getElementById("presentaseCrawling").innerHTML = Math.round(valueCrawling/jumlahTask*100)+" %" ;
			  document.getElementById("procBarCleaning").style.width = Math.round(valueCleaning/jumlahTask*100)+"%" ;
			  document.getElementById("presentaseCleaning").innerHTML = Math.round(valueCleaning/jumlahTask*100)+" %" ;
			  document.getElementById("procBarClassification").style.width = Math.round(valueClassification/jumlahTask*100)+"%" ;
			  document.getElementById("presentaseClassification").innerHTML = Math.round(valueClassification/jumlahTask*100)+" %" ;
			  document.getElementById("procBarAnalysis").style.width = Math.round(valueAnalysis/jumlahTask*100)+"%" ;
			  document.getElementById("presentaseAnalysis").innerHTML = Math.round(valueAnalysis/jumlahTask*100)+" %" ;
			  
			  a=JSON.parse(callMe());
			  
			  if(parseInt(a.length)>jumlahData)
			  {
				  for(ii=jumlahData;ii<a.length;ii++)
				  {
					valueCrawling=parseInt(a[ii].Crawling)+valueCrawling;
					valueCleaning=parseInt(a[ii].Cleaning)+valueCleaning;
					valueClassification=parseInt(a[ii].Classification)+valueClassification;
					valueAnalysis=parseInt(a[ii].Analysis)+valueAnalysis;
					//presentase progress total entry data yang masuk per total task 
					document.getElementById("nilaiCrawling").innerHTML = valueCrawling;	  
					document.getElementById("nilaiCleaning").innerHTML = valueCleaning;	  
					document.getElementById("nilaiClassification").innerHTML = valueClassification;	  
					document.getElementById("nilaiAnalysis").innerHTML = valueAnalysis;
					//update data tiap pertambahan data per banyaknya task (dataEntry/totalTask)
					document.getElementById("persCrawling").innerHTML =" "+ parseInt(a[ii].Crawling)/jumlahTask*100+" %";	  
					document.getElementById("persCleaning").innerHTML =" "+ parseInt(a[ii].Cleaning)/jumlahTask*100+" %";	  
					document.getElementById("persClassification").innerHTML = " "+ parseInt(a[ii].Classification)/jumlahTask*100+" %";
					document.getElementById("persAnalysis").innerHTML =" "+parseInt(a[ii].Analysis)/jumlahTask*100+" %";
					// update status panah 
					if (parseInt(a[ii].Crawling)/jumlahTask>0)
					{
						document.getElementById("persCrawling").className = "glyphicon glyphicon-arrow-up";
					}
					if (parseInt(a[ii].Cleaning)/jumlahTask>0)
					{
						document.getElementById("persCleaning").className = "glyphicon glyphicon-arrow-up";
					}
					if (parseInt(a[ii].Classification)/jumlahTask>0)
					{
						document.getElementById("persClassification").className = "glyphicon glyphicon-arrow-up";
					}
					if (parseInt(a[ii].Analysis)/jumlahTask>0)
					{
						document.getElementById("persAnalysis").className = "glyphicon glyphicon-arrow-up";
					}
					// jika sama dengan nol maka akan diberi arrow kanan
					if (parseInt(a[ii].Crawling)/jumlahTask==0)
					{
						document.getElementById("persCrawling").className = "glyphicon glyphicon-arrow-right";
					}
					if (parseInt(a[ii].Cleaning)/jumlahTask==0)
					{
						document.getElementById("persCleaning").className = "glyphicon glyphicon-arrow-right";
					}

					if (parseInt(a[ii].Classification)/jumlahTask==0)
					{
						document.getElementById("persClassification").className = "glyphicon glyphicon-arrow-right";
					}
					if (parseInt(a[ii].Analysis)/jumlahTask==0)
					{
						document.getElementById("persAnalysis").className = "glyphicon glyphicon-arrow-right";
					}
					// input data baru di dalam chart
					myLiveChart.addData([
						valueCrawling,
						valueCleaning,
						valueClassification,
						valueAnalysis
						], 
						++latestLabel);
					myLiveChart.removeData();
				  }
				  jumlahData=a.length;
				  
			  }
			  // Remove the first point so we dont just add values forever
			  
			}, 1000);