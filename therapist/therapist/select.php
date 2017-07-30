 <?php
 
 $output='';
 
 $connect=mysqli_connect("localhost","root","","sujok");
 
 if(isset($_POST["action"]))
 {
	 $procedure="
		CREATE PROCEDURE selectuser()
		BEGIN
		SELECT * FROM package;
		END;
	 ";
	 if(mysqli_query($connect,"DROP PROCEDURE IF EXISTS selectuser"))
	 {
		 if(mysqli_query($connect,$procedure))
		 {
			 $query="CALL selectuser()";
			 $result=mysqli_query($connect,$query);
			 $output.='
			 <table class="table table-bordered">
				<tr>
					<th>id</th>
					<th>name</th>
					<th>description</th>
					<th>charge</th>
					<th>seating</th>
					<th>remark</th>
					<th>delete</th>
					<th>update</th>
				</tr>
			 ';
			 
			 if(mysqli_num_rows($result) > 0)
			 {
				 while($row=mysqli_fetch_array($result))
				 {
					 $output.='
						<tr>
						<td>'.$row[0].'</td>
						<td>'.$row[1].'</td>
						<td>'.$row[2].'</td>
						<td>'.$row[3].'</td>
						<td>'.$row[4].'</td>
						<td>'.$row[5].'</td>
						<td><button type="button" name="update" id="'.$row[0].'" class="update">update</button></td>
						<td><button type="button" name="delete" id="'.$row[0].'" class="delete">delete</button></td>
						</tr>
					 ';
				 }
			 }
			 else
			 {
				 $output.='
					<tr>
						<td colspan=4>data not found</td>
					</tr>
				 ';
			 }
			 $output.='</table>';
			 echo $output;
		 }
	 }
 }
 
 ?>