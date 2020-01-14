@section('title','Master Role')
@extends('layouts-back.layout')
@section('content')
<div class="tb-content tb-style1">
  <div class="tb-padd-lr-30 tb-uikits-heading">
    <h2 class="tb-uikits-title">Master Role</h2>
    </ul>
  </div>
  <div class="tb-height-b30 tb-height-lg-b30"></div>
  <div class="container-fluid">
    <div class="row"> 
      <div class="col-lg-12">
        <div class="tb-card tb-style1">
         	<div class="tb-card-heading">
              <span>
                <a class="tb-btn tb-style1 tb-small" onclick="show_modal()">Add Role</a>
              </span>
          </div> 

         <div class="tb-card-body">
             <table class="display" id="datatable" width="100%">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Role</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
              </table>
          </div>
            
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
          <img src="{{asset('/')}}assets/img/logobpn.ico" style="width:30px !important" /> Konfirmasi Hapus Data Role
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
<div class="modal fade" id="modal_role" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-twitter">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">
          <img src="{{asset('/')}}assets/img/logobpn.ico" style="width:30px !important" /> Master Role
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body modalBodyPadding">
        
        <form id="frmMaster" name="frmMaster" action="{{route('add_master')}}" method="POST">
          @csrf
           <div class="tb-height-lg-b20"></div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Description *</label>
              <input type="text" class="form-control" name="val[description]" 
              placeholder="Masukan Deskripsi Role" id="description">

              <input type="hidden" class="form-control" name="api" value="role">
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
    getDataRole();
  });


  	function getDataRole(){
          var table = $('#datatable').DataTable({
                 dom: "rtiplf",
                 language: {
                    searchPlaceholder: "Search..."
                },
                 processing: true,
                 serverSide: true,
                 destroy:true,
                 ajax: 'master/role',
                 columns: [
                      { data: 'id', name: 'id' },
                      { data: 'description', name: 'description' },
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
        $("#description").val('');
        $("#id").val('');
        $('#modal_role').modal('show');
    }

    function edit(id=''){
        $('#modal_role').modal('show');
        getRole(id);
    }


    function sendData(formId){
      $("#formId #btnSend").attr('disabled','disabled');

      var desc = $("#description").val();
      if(!desc){
          alert("Deskripsi harus diisi..");
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
                    $("#tblContainerRole").html('');
                    getDataRole();
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

    function deleteData(){
        id = $("#id").val();
        url = base_url + "/delete_master/role/"+id;
        $.get(url,function(res){
            res = JSON.parse(res);
            if(res['error']==false){
              getDataRole();
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
