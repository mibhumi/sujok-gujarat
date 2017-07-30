 
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
			
			
	