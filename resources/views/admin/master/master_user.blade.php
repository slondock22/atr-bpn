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
                    <th width="150">Username</th>
                    <th width="200">User Fullname</th>
                    <th width="250">Ministry</th>
                    <th width="200">City</th>
                    <th style="width: 15%">Action</th>
                  </tr>
                </thead>
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
        <button type="button" class="btn btn-modal-twitter" onclick="deleteData()">
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
			  
			  <label for="exampleFormControlSelect1" style="margin-top:15px">Role *</label>
			   <select class="form-control" name="val[role]" id="role">
				<option value="">Pilih Role</option>
				@if(request()->session()->get('USER_ROLE')  == '1' || request()->session()->get('USER_ROLE')  == '2')
				   <option value="2">Admin Kantor Wilayah</option>
			   @endif
			   @if(request()->session()->get('USER_ROLE')  == '1' || request()->session()->get('USER_ROLE')  == '2' || request()->session()->get('USER_ROLE')  == '3')
				    <option value="3">Admin Kantor Pertanahan</option>
				@endif
				@if(request()->session()->get('USER_ROLE')  == '1')
					 <option value="6">User Kantor Pusat</option>
				@endif
				@if(request()->session()->get('USER_ROLE')  == '1' || request()->session()->get('USER_ROLE')  == '2')
					  <option value="4">User Kantor Wilayah</option>
				@endif
				@if(request()->session()->get('USER_ROLE')  == '1' || request()->session()->get('USER_ROLE')  == '2' || request()->session()->get('USER_ROLE')  == '3')
					   <option value="5">User Kantor Pertanahan</option>
				@endif
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
              <input type="hidden" class="form-control" name="id" id="id">
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
    getDataUser();
  });


  function getDataUser(){
      var table = $('#datatable').DataTable({
                 dom: "rtiplf",
                 language: {
                    searchPlaceholder: "Search..."
                },
                 processing: true,
                 serverSide: true,
                 destroy: true,
                 ajax: 'masterUserApi',
                 columns: [
                      { data: 'username', name: 'username' },
                      { data: 'user_full_name', name: 'user_full_name' },
                      { data: 'tm_ministry.ministry_name', name: 'ministry_name' },
                      { data: 'tm_ministry.city', name: 'city' },
                      {
                        data: 'id',
                        render: function(data){
                          
                          return '<a onclick="delData('+data+')" class="tb-solial-btn social-derault-color tb-radious50">\
                                <i class="lni lni-trash"></i>\
                            </a>\
                            <a onclick="edit('+data+')" class="tb-solial-btn social-derault-color tb-radious50">\
                                <i class="lni lni-pencil"></i>\
                            </a>';
                        }
                      }
                  ],
        });
    }


    function show_modal(){
        $(".form-control").val('');
        $('#modal_user').modal('show');
        getMinistryOption();
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
	  var role = $("#role").val();
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
	  
	  if(!role){
          alert("Role harus diisi..");
          return false;
      }

      if($("#id").val()==''){
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
                    getDataUser();
                }else{
                    setTimeout(function() { showFlashAlert('error', 'Error Service'); }, 100);
                }

                $("#formId #btnSendDisposisi").removeAttr('disabled','disabled');
                //$("#divLoading").hide();
              },
              error: function (request, status, error) {
                alert("Error Service")
                $("#formId #btnSendDisposisi").removeAttr('disabled','disabled');
                //$("#divLoading").hide();
              }
          });
    }

    function delData(id=''){
        $("#modal-confirm-delete").modal('show');
    }


    function getMinistryOption(id=''){
      if(id !=''){
          id = "/"+id;
      }
      var url = base_url + '/master/ministry'+id;
      $.get(url, function (data){
        
              $('#ministry_id').append('<option value="">Pilih Ministry</option>\
              ');
              $.each(data.data, function(index, row){          
                  $('#ministry_id').append('\
                     <option value="'+row.id+'">\
                          '+ row.name +'\
                      </option>\
                  ')
              });
      });
  }


  function deleteData(){
        id = $("#id").val();
        url = base_url + "/delete_user/"+id;
        $.get(url,function(res){
            res = JSON.parse(res);
            if(res['error']==false){
              getDataUser();
              $("#modal-confirm-delete").modal('hide');
            }else{
              alert("Error service")
            }
        })
    }


    function delData(id=''){
        $("#id").val(id);
        $("#modal-confirm-delete").modal('show');
    }
</script>