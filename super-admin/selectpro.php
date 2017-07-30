<?php
session_start();
if(!isset($_SESSION['uname']))
{
	header('location:login.php');
}
?><?php
 
 $output='';
 
 $connect=mysqli_connect("localhost","root","","sujok");
 
 
	 $procedure="SELECT * FROM product";
	
		
			 
			 $output.='

			<table id="datatable-buttons" class="table table-striped  table-colored table-info">
                                        <thead>
                                        <tr>
                                            <th>Product Id</th>
											
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Descpriction</th>
											<th>Product Image</th>
                                            <th>Remark</th>
											<th>Actions</th>
                                            
                                        </tr>
                                        </thead>
			 ';
			 
			$result=mysqli_query($connect,$procedure);
				 while($row=mysqli_fetch_array($result))
				 {
					 $output.='
						<tr>
						<td draggable="true" ondragstart="drag(event)" id='.$row[0].' ?>'.$row[0].'</td>
						<td draggable="true" ondragstart="drag(event)" id='. $row[1].'>'.$row[1].'</td>
						<td draggable="true" ondragstart="drag(event)" id='. $row[2].'>'.$row[2].'</td>
						<td draggable="true" ondragstart="drag(event)" id='. $row[3].'>'.$row[3].'</td>
						<td draggable="true" ondragstart="drag(event)" id='. $row[4].'><img src="upload/'. $row[4].'" width=100px/></td>
					    <td draggable="true" ondragstart="drag(event)" id='. $row[5].'>'.$row[5].'</td>
						   <td><a type="button" name="update" href="paplupro.php?updateid='.$row[0].'" class="update btn btn-success">update</a>
						<button type="button" name="delete" id="'.$row[0].'" class="delete btn btn-danger">delete</button></td>
						</tr>
	
				
					';
				 }
			
			 $output.='</table>
			 
			 
			 
			 
				
		';
			 echo $output;
		 
	 

 
 ?>

 	<script>

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

$("td").dblclick(function() {
			$(this).find("#datatable-colvid").html();   
 });
 
 

</script>
    <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "../plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();

        </script>