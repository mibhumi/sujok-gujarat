$("#uname").blur(function (){
						var uname = $("#uname").val();
					 $.ajax({
									url:"checkun.php",
					method:"POST",
					data:{uname:uname},
					success:function(data)
			        {
					$("#errr").html(data);
					},
					 });
					});