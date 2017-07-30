<?php
	include("connection.php"); 	
	$counter=" ";
	$d=date('Y-m-d');
	$year=date("Y",strtotime($d));
	$year1=date('Y-m-d', strtotime(date('Y-m')." -1 year"));
	$m=date("m",strtotime($d));
	for($i=1;$i<=$m;$i++)
	{
		$str=mysqli_query($conn,"select * from treatment where Treatment_Date between '$year1-$i-01' and '$year-$i-31' ");
		$row=mysqli_num_rows($str);
		$counter.=$row." ";
	}
	$co=explode(" ",$counter);
?>


<html>
<body>
<head>
<style>
	#container {
	min-width: 320px;
	max-width: 600px;
	margin: 0 auto;
}
</style>
</head>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container"></div>
<!--<div id="res"></div>-->
<button id="plain">Plain</button>
<button id="inverted">Inverted</button>
<button id="polar">Polar</button>

<script>
var chart = Highcharts.chart('container', {

    title: {
        text: 'Yearly Records'
    },
	
    xAxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    },

    series: [{
        type: 'column',
        colorByPoint: true,
        data: [<?php for($i=1;$i<=$m;$i++)
		{
			echo $co[$i] . ",";
		}?>],
        showInLegend: false,
    }]

});


$('#plain').click(function () {
    chart.update({
        chart: {
            inverted: false,
            polar: false
        },
        subtitle: {
            text: 'Plain'
        }
    });
});

$('#inverted').click(function () {
    chart.update({
        chart: {
            inverted: true,
            polar: false
        },
        subtitle: {
            text: 'Inverted'
        }
    });
});

$('#polar').click(function () {
    chart.update({
        chart: {
            inverted: false,
            polar: true
        },
        subtitle: {
            text: 'Polar'
        }
    });
});
</script>
</body>
<form name="frm" method="post">
<select name="choose" class="ch1" id="chose"> 
	<option> 2000 </option>
	<option> 2001 </option>
	<option> 2002 </option>
	<option> 2003 </option>
	<option> 2004 </option>
	
</select>
</form>
<script>
	/*$("#chose").change(function() {
		var a=$('option:selected', this).text();
		$.ajax({
			url:"hello1.php",
			data:{opt_text:a},
			method:"POST",
			success:function(data)
			{
				$('#res').text(data);
				//alert(data);
			}
		});
	});*/
</script>
</html>



