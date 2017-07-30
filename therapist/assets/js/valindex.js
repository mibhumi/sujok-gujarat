 $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			  uname: {
                validators: {
                        notEmpty: {
                        message: 'Please enter username'
						}
                }
              },
			  pass: {
                validators: {
                        stringLength: {
                        min: 4,
						max:6,
						},
                        notEmpty: {
                        message: 'Please enter password'
						}
                }
              }
            }
        })
		
        
});