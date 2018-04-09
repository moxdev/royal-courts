// JavaScript Document

var validator = new FormValidator('form-quick-contact', [{
	name: 'contact-names',
	display: 'Name',    
	rules: 'required'
	},  {
	name: 'contact-email',
	display: 'Email',    
	rules: 'required|valid_email'
	}], function(errors, evt) {
		if (errors.length > 0) {
			var SELECTOR_ERRORS = jQuery('#form-quick-contact .error-box');
			//console.log( jQuery('label').each().attr('for') );
			
			if (errors.length > 0) {
				SELECTOR_ERRORS.empty();
				jQuery('label').css('color','inherit');
				
				for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
					SELECTOR_ERRORS.append(errors[i].message + '<br />');
					//console.log(errors[i].name);
					jQuery('label[for="' + errors[i].name + '"]').css('color','#F00');
			}
			SELECTOR_ERRORS.addClass('has-errors');
		} 
	}
});