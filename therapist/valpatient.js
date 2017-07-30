 $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			Centre_Code: {
                validators: {
                        stringLength: {
                        min: 1,
						},
                        notEmpty: {
                        message: 'Please enter Centre code'
						}
                }
              },
            Patient_Name: {
                validators: {
                        stringLength: {
                        min: 2,
						},
                        notEmpty: {
                        message: 'Please enter Patient Name'
						}
                }
              },
			  Patient_Photo: {
                validators: {
						file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/JPEG,image/png,image/JPG,image/jpg',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
						},
                        notEmpty: {
                        message: 'Please select image'
						}
                }
              },
			  Address: {
                validators: {
                        stringLength: {
                        min: 2,
						},
                        notEmpty: {
                        message: 'Please enter Address'
						}
                }
              },
			  Mobile: {
                validators: {
                        stringLength: {
                        min: 10,
						max:10,
						},
                        notEmpty: {
                        message: 'Please enter contact'
						}
                }
              },
			  Phone: {
                validators: {
                        stringLength: {
                        min: 6,
						max:10,
						},
                        notEmpty: {
                        message: 'Please enter phone number'
						}
                }
              },
			  Email: {
                validators: {
                        notEmpty: {
                        message: 'Please enter contact'
						}
                }
              },
			  Gender: {
                validators: {
                        notEmpty: {
                        message: 'Please select gender'
						}
                }
              },
			  Occupation: {
                validators: {
                        stringLength: {
                        min: 2,
						max:10,
						},
                        notEmpty: {
                        message: 'Please enter Occupation'
						}
                }
              },
			  Pincode: {
                validators: {
                        stringLength: {
                        min: 6,
						max:6,
						},
                        notEmpty: {
                        message: 'Please enter pincode'
						}
                }
              },
			  State: {
                validators: {
                        stringLength: {
                        min: 3,
						max:15,
						},
                        notEmpty: {
                        message: 'Please enter state'
						}
                }
              },
			  City: {
                validators: {
                        stringLength: {
                        min: 2,
						max:15,
						},
                        notEmpty: {
                        message: 'Please select city'
						}
                }
              }
            }
        })
		
        
});