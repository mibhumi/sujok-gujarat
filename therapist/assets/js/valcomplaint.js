 $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			  Complaint_Date: {
                validators: {
                        notEmpty: {
                        message: 'Please select Complaint Date'
						}
                }
              },
			  Centre_Id: {
                validators: {
                        stringLength: {
                        min: 1,
						max:6,
						},
                        notEmpty: {
                        message: 'Please select Centre name'
						}
                }
              },
			  Major_Complaint: {
                validators: {
                        stringLength: {
                        min: 2,
						},
                        notEmpty: {
                        message: 'Please enter Major_Complaint'
						}
                }
              }
            }
        })
		
        
});