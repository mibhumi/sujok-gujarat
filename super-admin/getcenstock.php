.
<table id="datatable-responsive" class="table table-striped  table-colored table-info">
                                        <thead>
                                        <tr id="tr1">
                                            <th>Centre name</th>
											<th>Product Name</th>
                                            <th>Current Stock</th>
											<th> action</th>
											
                                        </tr>
                                        </thead>
                                        <tbody>
										<?php
										include("connection.php");
										$e=$_REQUEST['e'];

											$sql="select * from inventory where Centre_Id='".$e."' ";

										$res=mysqli_query($conn,$sql);
											while($row=mysqli_fetch_array($res))

												{?>
                                        <tr id="tr2">

											<?php  
											$str1="select * from centre where Centre_Id=$row[2]";
											$res1=mysqli_query($conn,$str1);
											
											 $row1=mysqli_fetch_array($res1);
											 ?>												
											     <td><?php echo $row1[1]; ?></td>																												
																					
                                          <?php  
											$str3="select Product_Name from product where Product_Id=$row[1]";
											$res3=mysqli_query($conn,$str3);
											
											 $row3=mysqli_fetch_array($res3);
											 ?>		
										   <td><?php echo $row3[0]; ?></td>
										   
										   <td><?php echo $row[3]; ?></td>
										 
										
										   <td> <a type="button" class=" btn btn-success" id="<?php echo "$row[0]"; ?>" href="updstock.php?id=<?php echo $row[0]; ?>"><i class="fa fa-pencil"></i></a>
											
											</td>
						</tr>
						
					
											<?php
											} ?>
						            </tbody>
                                    </table>
									<script src="js\stock.js"></script>
								
 