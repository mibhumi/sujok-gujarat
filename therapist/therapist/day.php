<?php
	include("connection.php");
	$d=date('d');
	$m=date('m');
	date('Y-m-d', strtotime(date('Y-m')." -1 month"));
	$y=date('Y');
	$counter=" ";
	for($i=1;$i<=$d;$i++)
	{
		$str=mysqli_query($conn,"select * from treatment where Treatment_Date='$y-$m-$i' ");
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
	min-width: 100%;
	max-width: 100%;
	margin: 0 auto;
}
</style>
</head>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container"></div>
<button id="plain">Plain</button>
<button id="inverted">Inverted</button>
<button id="polar">Polar</button>

<script>
var chart = Highcharts.chart('container', {

    title: {
        text: 'Monthly Records'
    },
	
    xAxis: {
        categories: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],
    },

    series: [{
        type: 'column',
        colorByPoint: true,
        data: [<?php for($i=1;$i<=$d;$i++)
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
</html>