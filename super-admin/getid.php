<?php
include("connection.php");
$e=$_REQUEST['e'];
	$sql="select * from patient where Patient_Id='".$e."'";

$res=mysqli_query($conn,$sql);?>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\su-logo.png">
        <!-- App title -->
        <title>Sujok Admin Dashboard</title>

        <!-- DataTables -->
        <link href="../plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css">
		
		<link href="../plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
		<link href="../plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
		<link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
		
		
		

        <!-- App css -->
		
		<link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\core.css" rel="stylesheet" type="text/css">
        <link href="assets\css\components.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
        <link href="assets\css\pages.css" rel="stylesheet" type="text/css">
        <link href="assets\css\menu.css" rel="stylesheet" type="text/css">
        <link href="assets\css\responsive.css" rel="stylesheet" type="text/css">
		
		<link rel="stylesheet" href="http://www.webserveglobal.com/catalog/view/theme/wsg/css/animate.css">
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
		
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif] -->
		<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->
    </head>
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
