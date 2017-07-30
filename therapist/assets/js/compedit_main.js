$(document).ready(function () {
				/*$('.btn').popover({
					title:fetchData,
					html:true,
					placement:'left'
				});
				
				function fetchData(){
					var fetch_data='';
					var element=$(this);
					var ids=element.attr("id");
					$.ajax({
						url:"viewval.php",
						method:"POST",
						async:false,
						data:{id:ids},
						success:function(data){
							fetch_data=data;
						}
					});
					return fetch_data;
				}*/
				
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
			
					/*$('table tbody tr').click(function(){
					var r=$(this).text();
					$('#res').html(r);
					$('#MyModal').modal("toggle");
				});*/				
			//TableManageButtons.init();
			
			
			
						
			
			
			$(document).on('click','.upd',function(){
				var cid=$(this).attr("id");
					//$('#MyModal3').modal("toggle");
					$.ajax({
						url:"upd_compForm.php",
						method:"POST",
						data:{id:cid},
						success:function(data)
						{
							$('#reha').html(data);
						}
					});
			});
			
			/*$(document).on('click','.btnyes',function(){
				var pid=$(this).attr("id");
				
					$.ajax({
						url:"del_patComp.php",
						method:"POST",
						data:{id:pid},
						success:function(data)
						{
							$('#delres').html(data);
						}
					});
			});*/

			
			
			$(document).on('click','.views',function(){
			var fid=$(this).attr("id");
			
				$.ajax({
					url:"viewcomp.php",
					method:"POST",
					data:{id:fid},
					success:function(data)
					{
						$('#resk').html(data);
					},
					error:function(data)
					{
						alert("sorry");
					}
				});
			});
			
			$(document).on('click','.btndel',function(){
						var paid=$(this).attr("id");
							$(document).on('click','.btnyes',function(){
								$('#MyModal5').modal("hide");
							$.ajax({
								url:"comp_del.php",
								method:"POST",
								data:{id:paid},
								success:function(data)
								{
									$('#delres').html(data);
								}
							});
						});
			});
				
			
					
				$(function(){
				var ele = $("[data-animation]");
				ele.addClass('animated');
				ele.on("show.bs.modal",function(){
				$(this).addClass($(this).data('animation'));
				});
			});