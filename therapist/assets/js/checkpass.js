$("#pass").blur(function (){
						var pass = $("#pass").val();
						var uname = $("#uname").val();
					 $.ajax({
									url:"checkpass.php",
					method:"POST",
					data:{pass:pass,uname:uname},
					success:function(data)
			        {
					$("#errr1").html(data);
					},
					 });
					});