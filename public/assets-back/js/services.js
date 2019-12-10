$(document).ready(function(){
    hideComment();
    getUser();
});

$('#btnDisposisi').on('click', function() {
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
            // console.log(data['response']['error']);
            if(data['response']['error'] == false ){
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


function getUser(){
    var url = base_url + '/masterUserApi/';
    $.get(url, function (data){
      data = JSON.parse(data);
        console.log(data.data);
        $.each(data.data, function(index, row){
            if(row.user_status==1){
              status = 'Active';
            }else{
              status = 'Not Active';
            }

            $('#tblContainer').append('\
                                  <tr>\
                                    <td>'+ row.username +'</td>\
                                    <td>'+ row.user_full_name +'</td>\
                                    <td>'+ row.tm_ministry.ministry_name +'</td>\
                                    <td>'+ row.tm_ministry.city +'</td>\
                                    <td>'+ status +'</td>\
                                    <td>\
                                        <a class="tb-solial-btn social-derault-color tb-radious50">\
                                            <i class="lni lni-trash"></i>\
                                        </a>\
                                        <a class="tb-solial-btn social-derault-color tb-radious50">\
                                            <i class="lni lni-pencil"></i>\
                                        </a>\
                                    </td>\
                                  </tr>\
                              ')
        });  
    });
}


function handleFeed(div1,div2,id_feed){
      $.ajax({
        type: 'POST',
        url: '',
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

     $("#"+div1).slideUp(300);
     $("#"+div2).slideDown(300);
}


function spamFeed(id_feed){
      $.ajax({
        type: 'POST',
        url: '/spamFeed',
        data: {
                "_token" :  $('#token').val(),
                "id" :id_feed},
        success: function(data){
            console.log(data);
            return false;
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