@section('title','Master User')
@extends('layouts-back.layout')
@section('content')
<div class="tb-content tb-style1">
  <div class="tb-padd-lr-30 tb-uikits-heading">
    <h2 class="tb-uikits-title">Master User</h2>
    </ul>
  </div>
  <div class="tb-height-b30 tb-height-lg-b30"></div>
  <div class="container-fluid">
    <div class="row"> 
      <div class="col-lg-12">
        <div class="tb-card tb-style1">
          <div class="tb-card-heading">
            <span style="float: right;">
                <a class="tb-btn tb-style1 tb-small" onclick="show_modal()">Add User</a>
              </span>
          </div>

          <div class="tb-card-body">
              <table class="table" id="datatable">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>User Fullname</th>
                    <th>Ministry</th>
                    <th>City</th>
                    <th>Status</th>
                    <th style="width: 15%">Action</th>
                  </tr>
                </thead>
                <tbody id="tblContainer">
                </tbody>
              </table>
          </div>
        </div>
      </div><!-- .col -->
    </div>
  </div>
  <div class="tb-height-b60 tb-height-lg-b60"></div>
</div>


<!--- Dialog -->
<div class="modal fade" id="modal-confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-twitter">
    <div class="modal-content" style="box-shadow: grey 0px 0px 550px 0px">
      <div class="modal-header modal-header-sos">
        <h5 class="modal-title" id="myLargeModalLabel">
          <i class="lni lni-twitter-original icon-tweet"></i> Konfirmasi Hapus Data User
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body" style="font-size: 16px;min-height: 50px !important">
          Apakah anda yakin akan menghapus Data ini ?
      </div>
      <input type="hidden" id="frmIdDelete">
      <input type="hidden" id="frmDivDelete">
      <div class="modal-footer">
        <button type="button" class="btn btn-modal-twitter-danger" data-dismiss="modal">
          Batal
        </button>
        <button type="button" class="btn btn-modal-twitter" onclick="deleteMaster()">
          Hapus
        </button>
      </div>
      </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="modal_user" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-twitter">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">
          <i class="lni lni-twitter-original icon-tweet"></i> Master User
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body modalBodyPadding">
        
        <form id="frmMaster" name="frmMaster" action="{{route('add_master_user')}}" method="POST">
          @csrf
           <div class="tb-height-lg-b20"></div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Username *</label>
              <input type="text" class="form-control" name="val[username]" 
              placeholder="Masukan Username" id="username">

              <label for="exampleFormControlSelect1" style="margin-top:15px">Fullname *</label>
              <input type="text" class="form-control" name="val[fullname]" 
              placeholder="Masukan Fullname" id="fullname">

              <label for="exampleFormControlSelect1" style="margin-top:15px">Ministry *</label>
              <select class="form-control" name="val[ministry_id]" id="ministry_id">
                  
              </select>

              <label for="exampleFormControlSelect1" style="margin-top:15px">User Detail *</label>
              <input type="text" class="form-control" name="val[user_detail]" 
              placeholder="Masukan User Detail" id="user_detail">

              <label for="exampleFormControlSelect1" style="margin-top:15px">Password *</label>
              <input type="password" class="form-control" name="val[password]" 
              placeholder="Masukan Password" id="password">

              <label for="exampleFormControlSelect1" style="margin-top:15px">Re Password *</label>
              <input type="password" class="form-control" 
              placeholder="Masukan Re Password" id="re_password">

              <input type="hidden" class="form-control" name="api" value="aduan">
              <input type="hidden" class="form-control" name="id">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-modal-twitter-danger" data-dismiss="modal">Batal</button>
        <button type="button" id="btnSend" class="btn btn-modal-twitter" onclick="sendData('#frmMaster')">Proses</button>
        <div>
      </div>
    </div>
  </div>
</div>
<!-- End Large Mosal -->

@endsection
<script src="{{asset('/assets-back')}}/js/vendor/jquery-1.12.4.min.js"></script>

<script>

  $(document).ready(function(){
    getUser();
    getMinistryOption();
    // var table = $('#datatable').DataTable({
    //              dom: "rtiplf",
    //              language: {
    //                 searchPlaceholder: "Search..."
    //             },
    //              processing: true,
    //              serverSide: true,
    //              ajax: 'masterUserApi',
    //              columns: [
    //                   { data: 'id', name: 'id' },
    //                   { data: 'username', name: 'username' },
    //                   { data: 'user_full_name', name: 'user_full_name' },
    //                   { data: 'address', name: 'address' },
    //                   { data: 'phone_1', name: 'phone_1' },
    //                   {
    //                     data: 'id',
    //                     render: function(data){
                          
    //                       return '<a onclick="delData('+data+')" class="tb-solial-btn social-derault-color tb-radious50">\
    //                                             <i class="lni lni-trash"></i>\
    //                                         </a>\
    //                                         <a onclick="edit('+data+')" class="tb-solial-btn social-derault-color tb-radious50">\
    //                                             <i class="lni lni-pencil"></i>\
    //                                         </a>';
    //                     }
    //                   }
    //               ],
    //  });

  });

    function show_modal(){
        $(".form-control").val('');
        $('#modal_user').modal('show');
    }

    function edit(id=''){
        $('#modal_user').modal('show');
        getUser(id);      
        selectMinistry(id);
    }


    function sendData(formId){
      $("#formId #btnSend").attr('disabled','disabled');

      var username = $("#username").val();
      var fullname = $("#fullname").val();
      var ministry_id = $("#ministry_id").val();
      var password = $("#password").val();
      var re_password = $("#re_password").val();

      if(!username){
          alert("Username harus diisi..");
          return false;
      }

      if(!fullname){
          alert("Fullname harus diisi..");
          return false;
      }

      if(!ministry_id){
          alert("Ministry harus diisi..");
          return false;
      }

      if(!password){
          alert("Password harus diisi..");
          return false;
      }

      if(!re_password){
          alert("Re Password harus diisi..");
          return false;
      }

      if(password != re_password){
          alert("Password tidak sama..");
          return false;
      }

    
      $.ajax({
        type: 'POST',
        url: $(formId).attr('action'),
        data: $(formId).serialize(),
        success: function(data){
                if(data['response']['error'] == false ){
                    $('.modal').modal('hide');
                    setTimeout(function() { showFlashAlert('success', data['response']['message']); }, 100);
                    $("#tblContainer").html();
                    getUser();
                }else{
                    setTimeout(function() { showFlashAlert('error', data['response']['message']); }, 100);
                }

                $("#formId #btnSendDisposisi").removeAttr('disabled','disabled');
                //$("#divLoading").hide();
              },
              error: function (request, status, error) {
                setTimeout(function() { showFlashAlert('error', request.responseText); }, 100);
                $("#formId #btnSendDisposisi").removeAttr('disabled','disabled');
                //$("#divLoading").hide();
              }
          });
    }

    function delData(id=''){
        $("#modal-confirm-delete").modal('show');
    }
</script>