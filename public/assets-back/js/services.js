$(document).ready(function(){
    hideComment();
});

$('#btnDisposisi').on('click', function() {
    alert('tes')
    $.ajax({
        type: 'POST',
        url: $("#frmDisposisi").attr('action'),
        data: $("#frmDisposisi").serialize(),
        success: function(data){
            $('#cus').append(data);
            $('.modal').modal('hide');
			$("#btnProcess").removeAttr('disabled','disabled');
			$("#divLoading").hide();
        },
        error: function (request, status, error) {
			setTimeout(function() { showFlashAlert('error', request.responseText); }, 100);
			$("#btnProcess").removeAttr('disabled','disabled');
			$("#divLoading").hide();
        }
    }); 
});

function serviceSend(formId){
	$("#formId #btnSendDisposisi").attr('disabled','disabled');
	$("#divLoading").show();
    
    $.ajax({
        type: 'POST',
        url: $(formId).attr('action'),
        data: $(formId).serialize(),
        success: function(data){
            if(data['response']['error']=='true'){
                 $('#divCommentCon'+data['form']['id']).append('<div class="tb-padd-lr-30">\
                                                                    <div class="tb-height-b20 tb-height-lg-b20"></div>\
                                                                    <span class="spanAction">\
                                                                        <div class="tb-toggle-body tb-drop-style1 tb-right-dropdown">\
                                                                            <span class="tb-toggle-btn tb-style1 tb-large-size">\
                                                                                <i class="material-icons-outlined iconAction" onclick="confirm_delete("'+ data['response']['id'] +'")">more_horiz</i>\
                                                                            </span>\
                                                                        </div>\
                                                                    </span>\
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
                setTimeout(function() { showFlashAlert('error', data['response']['message']); }, 100);
			}

			$("#formId #btnSendDisposisi").removeAttr('disabled','disabled');
			$("#divLoading").hide();
        },
        error: function (request, status, error) {
			setTimeout(function() { showFlashAlert('error', request.responseText); }, 100);
			$("#formId #btnSendDisposisi").removeAttr('disabled','disabled');
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
    $(".divDisposisi"+id).hide();
    $("#modal-confirm-delete").modal('hide');
     // $.get(url,function(data){
    //     if(data['status']=='success'){
    //         $("#"+div).hide();
    //     }
    // });
}


function hideComment(){
    number = $(".conComment .rowcomment").length;
    for(a=1;a<=number;a++){
        numberRowComment = $(".row"+a+" .rowDetail").length;
        if(numberRowComment > 3){
            numberRowComment = numberRowComment - 3; 
            for(c=1;c<=numberRowComment;c++){
                $(".rowDetail" + a + c).hide();
            }   
            $("#spanloadmore" + a).show();
        }       
    };
}

function showComment(){
    number = $(".conComment .rowcomment").length;
    for(a=1;a<=number;a++){
        numberRowComment = $(".row"+a+" .rowDetail").length;
        if(numberRowComment > 3){
            numberRowComment = numberRowComment - 3; 
            for(c=1;c<=numberRowComment;c++){
                $(".rowDetail" + a + c).hide();
            }   
        }       
    };
}


