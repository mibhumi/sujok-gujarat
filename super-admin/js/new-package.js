  $(document).click(function() {
    $('#packageform').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            Package_Name: {
                validators: {
                        stringLength: {
                        min: 2,
						},
                        notEmpty: {
                        message: 'Please enter Package Name'
						}
                }
              },
			  Description: {
                validators: {
                        stringLength: {
                        min: 2,
						},
                        notEmpty: {
                        message: 'Please enter Description'
						}
                }
              },
			  Package_Charge: {
                validators: {
                        stringLength: {
                        min: 2,
						},
                        notEmpty: {
                        message: 'Please enter Package Charge'
						}
                }
              },
			  Seating: {
                validators: {
                        stringLength: {
                        min:1,
						},
                        notEmpty: {
                        message: 'Please enter Seating'
						}
                }
              }
            }
        })
        
});
//# sourceURL=pen.js
