<?php
include("connection.php");
$e=$_GET['e'];


if($e==1)
{
	$sql="select * from patient";
}
else{
	$sql="select * from patient where Centre_Code='".$e."'";
}
$res=mysqli_query($conn,$sql);?>


  <table id="datatable-responsive" class="table table-striped  table-colored table-info">
                                        <thead>
                                        
                                            
                                            <th >Patient Name</th>
											<th >Photo</th>
											<th >Registration date</th>
                                            <th >Contact</th>
										
											<th>view</th>
											
                                         </thead>
                                        <tbody>
										<?php
											while($row=mysqli_fetch_array($res))
											{
										?>
                                        <tr id="tr2">                                            
                                           
										   <td ><?php echo $row[2]; ?></td>
										   <td><img src='../therapist/img_pat/<?php echo $row[3]; ?>' height=100px width=100px></td>
										   <td><?php echo $row[4]; ?></td>
										   <td ><?php echo $row[8]; ?></td>
										  
										  <td width='10%'>  <button type="button" class="btnview  btn-success" id="<?php echo "$row[0]"; ?>" data-toggle="modal" data-target="#MyModal2"><i class="fa fa-eye"></i></button>  </td>
										   
	                                    </tr>
											<?php
											} ?>
						            </tbody>
                                    </table>
										

		
        <!-- init -->
        <script src="assets\pages\jquery.datatables.init.js"></script>

        <!-- App js -->
		


		
				
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
		<script>
		function showCentre(str)
		{
			
				
				$.ajax({
					url:"getrecord.php",
					method:"GET",
					data:{e:$('#sp').val()},
					success:function(data)
					{
						
						
						$('#re').html(data);
						
					}
				});
				
				
			/*}
			else
			{
				alert("please fill up the form");
			}*/
	
		}
	</script>
	<script>
		$(document).on('click','.btnview',function(){
			var cid=$(this).attr("id");
				$.ajax({
					url:"viewpatient.php",
					method:"POST",
					data:{id:cid},
					success:function(data)
					{
						$('#otpbody').html(data);
					},
					error:function(data)
					{
						alert("sorry");
					}
				});
			});
			
	</script>
