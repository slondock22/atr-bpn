function serviceSend(formId){
	$(".btnProcess").attr('disabled','disabled');
	$("#divLoading").show();
    
    $.ajax({
        type: 'POST',
        url: $(formId).attr('action'),
        data: $(formId).serialize(),
        success: function(data){
            if(data['status']=='success'){
                 $('.divCommentCon'+data['form']['id']).append('<div class="tb-padd-lr-30">\
                                                                    <div class="tb-height-b20 tb-height-lg-b20"></div>\
                                                                    <div class="tb-user tb-style3 contentDisposisi">\
                                                                    <div class="tb-user-img">\
                                                                        <img src="'+base_url+'/assets-back/img/logo-mini-atr.jpg"/>\
                                                                    </div>\
                                                                    <div class="tb-user-info">\
                                                                        <h3 class="tb-user-name">\
                                                                            '+data['form']['name']+'\
                                                                            <ul class="tb-post-label tb-style1 tb-mp0">\
                                                                                <li><a href="#">'+data['form']['date']+'</a></li>\
                                                                            </ul>\
                                                                        </h3>\
                                                                        <div class="divComment">'+ data['result'] +'</div>\
                                                                    </div>\
                                                                    </div>\
                                                                </div>');
                                
                 //window.location.reload();
                 $('.modal').modal('hide');
				 //showFlashAlert('success', data['message']);
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


function serviceFeeds(formId){
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


function deleteDisposisi(){
    id  = $("#frmIdDelete").val();
    div = $("#frmDivDelete").val();
    $("#"+div).hide();
    $(".modal").modal('hide');
    // $.get(url,function(data){
    //     if(data['status']=='success'){
    //         $("#"+div).hide();
    //     }
    // });
}