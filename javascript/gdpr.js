(function($){
	"use strict";
	$(document).ready(function(){
		$("#iq-gdpr .iq-gdpr__dismiss a").click(function(e){
			e.preventDefault();
			$("#iq-gdpr").slideUp(100);
			$.ajax($(this).attr('href'),{
				success: function(response){
					if (!response.success) {
						window.location = $(this).attr('href');
					}
				},
				error: function(){
					window.location = $(this).attr('href');
				},
			});
		});
	});
}(jQuery));