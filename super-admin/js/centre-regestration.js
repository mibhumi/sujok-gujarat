
    $('#packageform').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            centre_name: {
                validators: {
                        stringLength: {
                        min: 2,
						},
                        notEmpty: {
                        message: 'Please enter centre Name'
						}
                }
              },
			    address: {
                validators: {
                        stringLength: {
                        min: 2,
						},
                        notEmpty: {
                        message: 'Please enter address'
						}
                }
              },
			    state: {
                validators: {
                        
                        notEmpty: {
                        message: 'Please select state'
						}
                }
              },
			  city: {
                validators: {
                        
                        notEmpty: {
                        message: 'Please select city'
						}
                }
              },
			  
			pincode: {
                validators: {
                        stringLength: {
                        min: 6,
						max: 6,
						},
                        notEmpty: {
                        message: 'Please enter Description'
						}
                }
              },
			  contact_no: {
                validators: {
                        stringLength: {
                        min: 7,
						max: 10,
						},
                        notEmpty: {
                        message: 'Please enter Description'
						}
                }
              },
			  code: {
                validators: {
                        stringLength: {
                        min: 2,
						},
                        notEmpty: {
                        message: 'Please enter '
						}
                }
              }
            }
        })
		
        

$("#code").blur(function (){
						var cenid = $("#code").val();
					 $.ajax({
									url:"chkcen.php",
					method:"POST",
					data:{cenid:cenid},
					success:function(data)
			        {
					$("#err1").html(data);
					},
					 });
					});
