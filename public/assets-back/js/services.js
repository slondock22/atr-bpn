
$(document).ready(function(){
    hideComment();
    // getUser();
    // getRole();
    // getAduan();
    // getLevel();
    // getMinistry();
    // getMinistryOption();
     $('#ministryId').select2({
        width: '100%',
        dropdownParent: $("#modal-add-disposisi"),
     });

     
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
			$(".spanLoading").hide();
        },
        error: function (request, status, error) {
			setTimeout(function() { showFlashAlert('error', request.responseText); }, 100);
			$("#btnProcess").removeAttr('disabled','disabled');
			$(".spanLoading").hide();
        }
    }); 
});

function serviceSend(formId){
	$("#btnSendDisposisi").attr('disabled','disabled');
	$(".spanLoading").show();
    

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

			$("#btnSendDisposisi").removeAttr('disabled','disabled');
			$(".spanLoading").hide();
        },
        error: function (request, status, error) {
			setTimeout(function() { showFlashAlert('error', request.responseText); }, 100);
			$("#btnSendDisposisi").removeAttr('disabled','disabled');
			$(".spanLoading").hide();
        }
    });
}


function serviceFeeds(formId){
	$(".btnProcess").attr('disabled','disabled');
	$(".spanLoading").show();

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
			$(".spanLoading").hide();
        },
        error: function (request, status, error) {
			setTimeout(function() { showFlashAlert('error', request.responseText); }, 100);
			$("#btnProcess").removeAttr('disabled','disabled');
			$(".spanLoading").hide();
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


function spamFeed(id_feed){
      $.ajax({
        type: 'POST',
        url: base_url + '/spamFeed',
        data: {
                "_token" :  $('#token').val(),
                "id" :id_feed},
        success: function(data){
            console.log(data.error);
            if(data.error==false){
                $('#divFeeds'+id_feed).hide();
                 setTimeout(function() { showFlashAlert('success', 'Aduan ditandai sebagai spam'); }, 100);
            }else{
                setTimeout(function() { showFlashAlert('error', data.message); }, 100);
            }

            $("#btnProcess").removeAttr('disabled','disabled');
            $(".spanLoading").hide();
        },
        error: function (request, status, error) {
            setTimeout(function() { showFlashAlert('error', request.responseText); }, 100);
            $("#btnProcess").removeAttr('disabled','disabled');
            $(".spanLoading").hide();
        }
    });
}

function handleFeed(div1,div2,id_feed){

      $.ajax({
        type: 'POST',
        url: base_url + '/handleFeed',
        data: {
                "_token" :  $('#token').val(),
                "id" :id_feed
            },
        success: function(data){
            console.log(data.error);
            if(data.error==false){
                $("#"+div1).slideUp(300).hide();
                $("#"+div2).slideDown(300).show();
                 setTimeout(function() { showFlashAlert('success', 'Aduan telah diambil'); }, 100);
            }else{
                setTimeout(function() { showFlashAlert('error', data.message); }, 100);
            }
        },
        error: function (request, status, error) {
            setTimeout(function() { showFlashAlert('error', request.responseText); }, 100);
            $("#btnProcess").removeAttr('disabled','disabled');
            $(".spanLoading").hide();
        }
    });
}


 // function collapseBtn(div1,div2){
 //        $("#"+div1).slideUp(300);
 //        $("#"+div2).slideDown(300);
 //    }

 //    function modal_feeds(content='',user='',date='',post_url='', id_feeds =''){
 //        $('#id_feeds').val(id_feeds);
 //        $('#modal-balas-feed').modal('show');
 //        $('#contentTwitUser').html(content);
 //        $('#twitUser').html('@'+user);
 //        $('#headerUser').html('@'+user);
 //        $('#dateModal').html(date);
 //        $('#iframePostId').val(post_url);
 //        $("#imgUser").html('<img src="{{asset('assets-back/img/logo-mini-atr.jpg')}}" alt="">')
 //    }

 //    function modal_disposisi(id='',content='',user='',date=''){
 //        $('#modal-add-disposisi').modal('show');
 //        $('#ministryId').val('');
 //        $('#commentDisposisi').val('');
 //        $('#idFeeds').val(id);
 //        $('#contentTwitUserDisposisi').html(content);
 //        $('#twitUserDisposisi').html('@'+user);
 //        $('#headerUserDisposisi').html('@'+user);
 //        $('#dateModalDisposisi').html(date);
 //        $("#imgUserDisposisi").html('<img src="{{asset('assets-back/img/logo-mini-atr.jpg')}}" alt="">');

 //        //Form Disposisi untuk LoadData
 //        $("#frmdate").val(date);
 //        $("#frmid").val(id);
 //    }

 //    function setUser(){
 //      userDisposisi = $("#ministryId option:selected" ).text();
 //      $("#frmname").val(userDisposisi);  
 //    }

 //    function modal_hastag(id){
 //        $("#valHastag").val(id);
 //        $('#modal-po').modal('show');
 //    }

 //    function change_hastag(hastag){

 //        $('#modal-po').modal('hide');
 //        input = $("#valHastag").val();
 //        $('#' + input).html(hastag);
 //    }

 //    function confirm_delete(id,div){
 //        $("#frmIdDelete").val(id);
 //        $("#frmDivDelete").val(div);
 //        $("#modal-confirm-delete").modal('show');
 //    }

 //    function loadmore(rowid){
 //        comment = $("."+rowid).html();
 //        $("#divLoadMore").html(comment);
 //        $("#divLoadMore .rowDetail").show();
 //        $("#modal-loadmore").modal('show');
 //    }

 //    function iframePost(id_post_url,textarea) {
 //      var post_url = $(id_post_url).val();

 //      if($('#inputSendModalFeeds').val() == ''){
 //        alert('Balasan tidak boleh kosong');
 //        return false;
 //      }

 //      copyClipboard('divSendModalFeeds');
      
 //      $('#modal-balas-feed').modal('hide');
 //      $('#modal-iframepost').modal('show');
 //      // $("#txtPostUrl").val(post_url);
 //      $('#divSendModalFeeds').html('');

 //      $('#inputSendModalFeeds').val('');
 //      $('#postUrl').html('');

 //      var link = post_url;
 //      // alert(link);
 //      var iframe = document.createElement('iframe');
 //      iframe.frameBorder=0;
 //      iframe.width="820px";
 //      iframe.height="350px";
 //      iframe.id="iframePostReply";
 //      iframe.setAttribute("src", link);
 //      document.getElementById("postUrl").appendChild(iframe);

 //      post_feeds($('#id_feeds').val(), $('#inputSendModalFeeds').val());

      
 //    }

 //   function copyClipboard(element) {
 //      var elm = document.getElementById(element);

 //      if(document.body.createTextRange) {
 //        var range = document.body.createTextRange();
 //        range.moveToElementText(elm);
 //        range.select();
 //        document.execCommand("Copy");
 //        alert("Copied div content to clipboard");
 //      }
 //      else if(window.getSelection) {
 //        var selection = window.getSelection();
 //        var range = document.createRange();
 //        range.selectNodeContents(elm);
 //        selection.removeAllRanges();
 //        selection.addRange(range);
 //        document.execCommand("Copy");
 //        alert("Copied div content to clipboard");
 //      }
 //    }

 //    function send_to_div(id, hidden_div){
 //      var textarea = $('#' + id).val();
 //      $('#' + hidden_div).html(textarea);
 //    }

 //    function post_feeds(id, comment){
 //      var data = {"_token" :  $('#token').val(), "id": id, "comment": comment};
 //      // console.log(data); return false;
 //      $.ajax({
 //        url: '{{ url('postReply') }}',
 //        data: data,
 //        type: 'POST',
 //        success: function(res){
 //           console.log(res.error);
 //        }
 //      })
 //    }


 function getUser(id=''){
    if(id!=''){
        id = "/"+id;
    }
    var url = base_url + '/masterUserApi'+id;
    $.get(url, function (data){
      data = JSON.parse(data);
        console.log(data.data);
        if(id==''){

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
                                    <a onclick="delData('+row.id+')" class="tb-solial-btn social-derault-color tb-radious50">\
                                        <i class="lni lni-trash"></i>\
                                    </a>\
                                    <a onclick="edit('+row.id+')" class="tb-solial-btn social-derault-color tb-radious50">\
                                        <i class="lni lni-pencil"></i>\
                                    </a>\
                                </td>\
                            </tr>\
                        ')
                });
        }else{
            $("#id").val(data.data[0].id);
            $("#username").val(data.data[0].username);
            $("#fullname").val(data.data[0].user_full_name);
            $("#user_detail").val(data.data[0].user_detail);
            $("#ministry_id").val(data.data[0].tm_ministry.ministry_id);
        }
    });
}


 function getRole(id=''){
    if(id!=''){
        id = "/"+id;
    }
    var url = base_url + '/master/role'+id;
    $.get(url, function (data){
        data = JSON.parse(data);
        console.log(data.data);
        if(id==''){
            $.each(data.data, function(index, row){
                $('#tblContainerRole').append('\
                                    <tr>\
                                        <td>'+ row.id +'</td>\
                                        <td>'+ row.description +'</td>\
                                        <td>\
                                            <a onclick="delData('+row.id+')" class="tb-solial-btn social-derault-color tb-radious50">\
                                                <i class="lni lni-trash"></i>\
                                            </a>\
                                            <a onclick="edit('+row.id+')" class="tb-solial-btn social-derault-color tb-radious50">\
                                                <i class="lni lni-pencil"></i>\
                                            </a>\
                                        </td>\
                                    </tr>\
                                ')
            });
        }else{
            $("#id").val(data.data.id);
            $("#description").val(data.data.description);
        }
    });
}


// function getLevel(id=''){
//     if(id){
//         id = "/"+id;
//     }
//     var url = base_url + '/master/level'+id;
//     $.get(url, function (data){
//       data = JSON.parse(data);
//         console.log(data.data);
//         $.each(data.data, function(index, row){
            
//             $('#tblContainerLevel').append('\
//                                   <tr>\
//                                     <td>'+ row.id +'</td>\
//                                     <td>'+ row.description +'</td>\
//                                     <td>\
//                                         <a onclick="delData('+row.id+')" class="tb-solial-btn social-derault-color tb-radious50">\
//                                             <i class="lni lni-trash"></i>\
//                                         </a>\
//                                         <a class="tb-solial-btn social-derault-color tb-radious50">\
//                                             <i class="lni lni-pencil"></i>\
//                                         </a>\
//                                     </td>\
//                                   </tr>\
//                               ')
//         });  
//     });
// }


function getAduan(id=''){
    if(id !=''){
        id = "/"+id;
    }
    var url = base_url + '/master/aduan'+id;
    $.get(url, function (data){
      data = JSON.parse(data);
        console.log(data.data);
        if(id==''){
            $.each(data.data, function(index, row){       
                $('#tblContainerAduan').append('\
                                  <tr>\
                                    <td>'+ row.id +'</td>\
                                    <td>'+ row.description +'</td>\
                                    <td>\
                                        <a onclick="delData('+row.id+')" class="tb-solial-btn social-derault-color tb-radious50">\
                                            <i class="lni lni-trash"></i>\
                                        </a>\
                                        <a onclick="edit('+row.id+')" class="tb-solial-btn social-derault-color tb-radious50">\
                                            <i class="lni lni-pencil"></i>\
                                        </a>\
                                    </td>\
                                  </tr>\
                              ')
             });
        }else{
            $("#id").val(data.data.id);
            $("#description").val(data.data.description);
        }  
    });
}



function getMinistry(id=''){
    if(id !=''){
        id = "/"+id;
    }
    var url = base_url + '/master/ministry'+id;
    $.get(url, function (data){
      data = JSON.parse(data);
        console.log(data.data);
        if(id==''){
            $.each(data.data, function(index, row){          
                $('#tblContainerMinistry').append('\
                                    <tr>\
                                        <td>'+ row.id +'</td>\
                                        <td>'+ row.name +'</td>\
                                        <td>'+ row.city +'</td>\
                                        <td>'+ row.address +'</td>\
                                        <td>'+ row.phone_1 +'</td>\
                                        <td>'+ row.level +'</td>\
                                        <td>\
                                            <a onclick="delData('+row.id+')" class="tb-solial-btn social-derault-color tb-radious50">\
                                                <i class="lni lni-trash"></i>\
                                            </a>\
                                            <a onclick="edit('+row.id+')" class="tb-solial-btn social-derault-color tb-radious50">\
                                                <i class="lni lni-pencil"></i>\
                                            </a>\
                                        </td>\
                                    </tr>\
                                ')
            });
        }else{
            $("#id").val(data.data.id);
            $("#level").val(data.data.level);
            $("#ministry_name").val(data.data.name);
            $("#city").val(data.data.city);
            $("#ministry_address").val(data.data.address);
            $("#ministry_phone_1").val(data.data.phone_1);
            $("#ministry_phone_2").val(data.data.phone_2);
            $("#ministry_email").val(data.data.email);
        }
    });
}

function selectMinistry(id=''){
    if(id !=''){
        id = "/"+id;
    }
    var url = base_url + '/master/ministry';
    $.get(url, function (data){
      // data = JSON.parse(data);
      //   console.log(data.data);
            $.each(data.data, function(index, row){          
                $('#ministry_id').append('\
                                    <option value="'+row.id+'">\
                                        '+ row.name +'\
                                    </option>\
                                ')
            });
    });
}


// function getMinistryOption(id=''){
//     if(id !=''){
//         id = "/"+id;
//     }
//     var url = base_url + '/master/ministry'+id;
//     $.get(url, function (data){
//       data = JSON.parse(data);
//         console.log(data.data);
//             $('#ministry_id').append('<option value="">Pilih Ministry</option>\
//             ');
//             $.each(data.data, function(index, row){          
//                 $('#ministry_id').append('\
//                    <option value="'+row.id+'">\
//                         '+ row.name +'\
//                     </option>\
//                 ')
//             });
//     });
// }