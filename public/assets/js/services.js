function serviceSend(formId){
	$(".btnProcess").attr('disabled','disabled');
	$("#divLoading").show();

    $.ajax({
        type: 'POST',
        url: $(formId).attr('action'),
        data: $(formId).serialize(),
        success: function(data){
            if(data['status']=='success'){
				 $('html').html(data['result']);
				 window.location.reload();
				 setTimeout(function() { showFlashAlert('success', data['message']); }, 100);
            }else{
                setTimeout(function() { showFlashAlert('error', data['message']); }, 100);
			}

			$("#btnProcess").removeAttr('disabled','disabled');
			$("#divLoading").hide();
        },
        error: function (request, status, error) {
			setTimeout(function() { showFlashAlert('error', request.responseText); }, 100);
			$("#btnProcess").removeAttr('disabled','disabled');
			$("#divLoading").hide();
        }
    });
}