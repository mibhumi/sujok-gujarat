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
			
			
			
				$(document).on('click','.btnview',function(){
			var cid=$(this).attr("id");
				$.ajax({
					url:"viewtreat_details.php",
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
						url:"upd_treatment.php",
						method:"POST",
						data:{id:cid},
						success:function(data)
						{
							$('#otpt1').html(data);
						}
					});
			});
			
				$(function(){
				var ele = $("[data-animation]");
				ele.addClass('animated');
				ele.on("show.bs.modal",function(){
				$(this).addClass($(this).data('animation'));
				});
			});
	