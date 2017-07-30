 <html>
<body>
<center>
 <table border=5>
 <?php 
	$con=mysqli_connect("localhost","root","","sujok");
	 
	$str="select * from product";
	$result=mysqli_query($con,$str);
	
	while($row=mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td><img src='upload/$row[4]' height=50 width=50></td>";
		echo "</tr>";
	}
?>
</table>
</center>
</body>
</html>