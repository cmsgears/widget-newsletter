NewsletterController	= function() {

};

NewsletterController.inherits( cmt.api.controllers.BaseController );

NewsletterController.prototype.registerActionPost = function( success, parentElement, message, response ) {

	if( success ) {

		console.log( "Registered successfully for newsletter." );
	}
};