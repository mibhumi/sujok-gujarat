
		$('#dipid').blur(function (){
				
						var cenid = $('#dipid').val();
				//	alert(cenid);
					 $.ajax({
				   url:"getid.php",
					method:"POST",
					data:{e:cenid},
					success:function(data)
			        {
					$("#re").html(data);
					},
					 });
					});
		
		