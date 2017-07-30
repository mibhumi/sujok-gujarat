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
			
			
			
	
				$(document).on('click','.btnview',function(){
			var cid=$(this).attr("id");
				$.ajax({
					url:"viewcen.php",
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
						url:"updcenform.php",
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
						url:"deletecen.php",
						method:"POST",
						data:{id:cid},
						success:function(data)
						{
							//window.location.reload('centreedit.php');
							$('#p2').html(data);
						}
					});
				});
			});
			
			  $("#centre_code").blur(function(){
			var dip=$("#centre_code").val();
		
			$.ajax({url:"chkcen.php",
			method:"POST",
			data:{cenid:dip},
			success:function(data){
				
				$('#errr').html(data);
			}
		});
	});
	
	/*$(document).on('click','.btnyes',function(){
						var cid=$(this).attr("id");
				
								
							$.ajax({
						url:"deletecen.php",
						method:"POST",
						data:{id:cid},
						success:function(data)
						{
								$('#p2').html(data);
						}
					});
			
			});*/
			
				$(function(){
				var ele = $("[data-animation]");
				ele.addClass('animated');
				ele.on("show.bs.modal",function(){
				$(this).addClass($(this).data('animation'));
				});
			});