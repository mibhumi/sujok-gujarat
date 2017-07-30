		$(document).ready(function() {
		$('#centre_form').bootstrapValidator({
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
                        message: 'Please enter the Centre Name'
                    }
                }
            },
             address: {
                validators: {
                     stringLength: {
                        min: 9,
                    },
                    notEmpty: {
                        message: 'Please enter Centre Address'
                    }
                }
            },
			 city: {
                validators: {
                     stringLength: {
                        min: 3,
                    },
                    notEmpty: {
                        message: 'Please enter the City'
                    }
                }
            },
			 state: {
                validators: {
                     stringLength: {
                        min: 3,
                    },
                    notEmpty: {
                        message: 'Please enter the State'
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
                        message: 'Please enter the Pincode'
                    }
                }
            },
            contact_no: {
                validators: {
                  stringLength: {
                        min: 12, 
                        max: 12,
                    notEmpty: {
                        message: 'Please enter your Contact No.'
                     }
                }
            },
                },
				centre_code: {
                validators: {
                     stringLength: {
                        min: 3,
                    },
                    notEmpty: {
                        message: 'Please enter the Centre Code'
                    }
                }
            },
			remark: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                }
            }
            }
        })
});