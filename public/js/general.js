var General = function()
{
	
	var ajaxRequest = function(options)
	{
		/* Sets of predefined config for ajax request */
		var predefined = {
				dataType   : "json",
				method     : "POST",
				beforeSend : Metronic.blockUI({boxed:true}),
				error      : function(jqXHR, textStatus, errorThrown){
					toastr['error'](textStatus, 'Error!');
				},
				complete   : function(jqXHR, status){
					Metronic.unblockUI();
				}
		}
		/* Merge the two configs */
	   var final_option = $.extend(predefined, options);

	   return $.ajax(final_option);
	};

	return {
		ajax  : function(options){
			return ajaxRequest(options);
		}
	}

}();
