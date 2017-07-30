 
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

      
$(document).ready(function(){
	fetchuser();
	function fetchuser(){
		var action = "select";
		$.ajax({
			url:"selectpac.php",
			method:"POST",
			data:{action:action},
			success:function(data){
				
				$('#result').html(data);
			}
		});
	}
	$('#action').click(function(){
				debugger;
				$.ajax({
					url:"action.php",
					method:"GET",
					data:{Package_Name:$('#pname').val(),Description:$('#pdescription').val(),Charge:$('#pcharge').val(),Seating:$('#pseating').val(),Remark:$('#premark').val()},
					success:function(data)
					{
						alert(data);
						fetchuser();
					}
				});
			/*}
			else
			{
				alert("please fill up the form");
			}*/
	});
	
});

		
				$(document).on('click','.btnview',function(){
			var cid=$(this).attr("id");
				$.ajax({
					url:"viewpac.php",
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
			
			
			$(document).on('click','.btnupd',function(){
				var cid=$(this).attr("id");
					$.ajax({
						url:"updatepac.php",
						method:"POST",
						data:{id:cid},
						success:function(data)
						{
							$('#otpt1').html(data);
						}
					});
			});
			
						$(document).on('click','.btndel',function(){
							var cid=$(this).attr("id");
								
							$(document).on('click','.btnyes',function(){
									$('#MyModal').modal('hide');
					$.ajax({
						url:"delpac.php",
						method:"POST",
						data:{id:cid},
						success:function(data)
						{
							//window.location.reload('packageedit.php');
							$('#pres2').html(data);
						}
					});
				});
			});
		
		
    
		