
	
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
					$.ajax({
						url:"deletecen.php",
						method:"POST",
						data:{id:cid},
						success:function(data)
						{
							window.location.reload('centreedit.php');
						},	
						error:function(data)
						{
							$('#er').html(data);
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