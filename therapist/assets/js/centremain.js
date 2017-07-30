		$('#add').click(function() 
					{
						$.ajax({
						url:"insert.php",
						method:"POST",
						data:$('#centre_form').serialize(),
						success:function(data)
						{
							$('#centre_form')[0].reset();
							$('#res').html(data);
							
						}          
							});
					});

					function okclick()
					{
						if(document.getElementById("res").innerHTML=="Could not insert")
						{
							window.location="add_centre.php";
						}
						else if(document.getElementById("res").innerHTML=="Successfully Inserted")
						{
							self.location="centredisp.php";
						}
					}

					
			$(function(){
				var ele = $("[data-animation]");
				ele.addClass('animated');
				ele.on("show.bs.modal",function(){
				$(this).addClass($(this).data('animation'));
				});
			});
