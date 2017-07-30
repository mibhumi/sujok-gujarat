 <?php
session_start();
include('connection.php');
if(!isset($_SESSION['uname']))
{
	header('location:login.php');
}
?><?php
 
 $output='';
 
 
 
 if(isset($_POST["action"]))
 {
	 $procedure="SELECT * FROM package";
	
		 if(mysqli_query($conn,$procedure))
		 {
			 $query="CALL selectuser()";
			 $result=mysqli_query($conn,$query);
			 $output.='

			<table id="datatable-responsive" class="table table-striped  table-colored table-info draggable">
                                        <thead>
                                        <tr>
                                           
											
                                            <th>Package Name</th>
                                            <th>Price</th>
                                            <th>Descpriction</th>
                                            <th>Seating</th>
											
											<th></th>
                                        </tr>
                                        </thead>
			 ';
			 
			 if(mysqli_num_rows($result) > 0)
			 {
				 while($row=mysqli_fetch_array($result))
				 {
					
					 $output.='
						<tr>
						
						';
						
						
						
					 $output.='	<td draggable="true" ondragstart="drag(event)" id='.$row[1].'>'.$row[1].'</td>
						
						
						<td draggable="true" ondragstart="drag(event)" id='.$row[3].'>'.$row[3].'</td>
						<td draggable="true" ondragstart="drag(event)" id='.$row[2].'>'.$row[2].'</td>
						<td draggable="true" ondragstart="drag(event)" id='.$row[4].'>'.$row[4].'</td>
						
					
						
						<td> <button type="button" class="btnview btn-success" id='.$row[0].' data-toggle="modal" data-target="#MyModal2"><i class="fa fa-eye"></i></button> 
										    <button type="button" class="btnupd  btn-info" id='.$row[0].' data-toggle="modal" data-target="#MyModal3"><i class="fa fa-pencil"></i></button>
											 <button type="button" class="btndel btn-danger" id='.$row[0].' data-toggle="modal" data-target="#MyModal"><i class="fa fa-trash"></i></button></td> </tr>
						
			

	 <script src="DRAGGABLE.js"></script>
				
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
			 $output.='</table>
			 	 
			
			 
			 
				
		';
			 echo $output;
		 }
	 
 }
 
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
		

		