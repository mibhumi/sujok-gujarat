<?php
session_start();
if(!isset($_SESSION['uname']))
{
	header('location:login.php');
}
?><!DOCTYPE html>
<html>
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

        <!-- App css -->
        <!--<link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">-->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
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
        <![endif]-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>


    <body class="fixed-left">
						<?php
							include("connection.php");
							$str="select * from centre";
							$res=mysqli_query($conn,$str);
						?>
						
					<div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <p class="text-muted font-13 m-b-30">                                       
                                    </p>
                                    <table id="datatable-buttons" class="table table-striped  table-colored table-info">
                                        <thead>
                                        <tr id="tr1">
                                            <th width="6%">Centre Id</th>
											<th width="6%">Centre Name</th>
                                            <th width="6%">Centre Address</th>
											<th width="6%">City</th>
											<th width="6%">State</th>
											<th width="6%">Pincode</th>
                                            <th width="6%">Contact</th>
											<th width="6%">Centre Code</th>
											<th width="6%">Remark</th>
											<th width="6%"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
										<?php
											while($row=mysqli_fetch_array($res))
											{
										?>
                                        <tr id="tr2">                                            
                                           <td width="6%" id="td1"><?php echo $row[0]; ?></td>
										   <td width="6%"><?php echo $row[1]; ?></td>
										   <td width="6%"><?php echo $row[2]; ?></td>
										   <td width="6%"><?php echo $row[3]; ?></td>
										   <td width="6%"><?php echo $row[4]; ?></td>
										   <td width="6%"><?php echo $row[5]; ?></td>
										   <td width="6%"><?php echo $row[6]; ?></td>
										   <td width="6%"><?php echo $row[7]; ?></td>
										   <td width="6%"><?php echo $row[8]; ?></td>
										   <td width="6%">
	                                            <button type="button" class="delbtn btn-danger" id="<?php echo "$row[0]"; ?>">delete</button>
	                                       </td>	
										</tr>
											<?php
											} ?>								
						            </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
						
						
			<!-- MODAL -->
            <!--<div id="MyModal2" class="modal" aria-labelledby="myModalLabel" data-animation="bounceIn"         <script src="assets\js\bootstrap.min.js"></script>
 <i class="fa fa-trash-o"></i>>
                <section class="panel panel-info panel-color">
                    <header class="panel-heading">
                        <h2 class="panel-title"> Confirmation </h2>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="modal-text">
                                <p> Are you Sure you want to Delete? </p>
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-md-12 text-right">
								
                                <button id="dialogyes" class="btnyes btn-primary waves-effect waves-light" data-toggle="modal" data-target="#MyModal">YES</button>
								
                                <button id="dialogno" class="btn btn-default waves-effect" data-dismiss="modal">NO</button>
                            </div>
                        </div>
                    </div>

                </section>
            </div>-->
            <!-- end Modal -->						
		</form>
        <!-- END wrapper -->

	
        <!-- jQuery  -->
		<script src="assets\js\jquery.min.js"></script>
        <!--<script src="assets\js\bootstrap.min.js"></script>-->
        <script src="assets\js\detect.js"></script>
        <script src="assets\js\fastclick.js"></script>
        <script src="assets\js\jquery.blockUI.js"></script>
        <script src="assets\js\waves.js"></script>
        <script src="assets\js\jquery.slimscroll.js"></script>
        <script src="assets\js\jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>
		
		
		<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap.js"></script>
		
        <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../plugins/datatables/buttons.bootstrap.min.js"></script>
        <!--<script src="../plugins/datatables/jszip.min.js"></script>-->
        <script src="../plugins/datatables/pdfmake.min.js"></script>
        <script src="../plugins/datatables/vfs_fonts.js"></script>
        <script src="../plugins/datatables/buttons.html5.min.js"></script>
        <script src="../plugins/datatables/buttons.print.min.js"></script>
        <script src="../plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="../plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="../plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="../plugins/datatables/dataTables.colVis.js"></script>
        <script src="../plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <!-- init -->
        <script src="assets\pages\jquery.datatables.init.js"></script>
		
		<!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>
		
	</body>	
</html>