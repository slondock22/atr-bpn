@section('title','Master Aduan')
@extends('layouts-back.layout')
@section('content')
<div class="tb-content tb-style1">
  <div class="tb-padd-lr-30 tb-uikits-heading">
    <h2 class="tb-uikits-title">Master Aduan</h2>
    </ul>
  </div>
  <div class="tb-height-b30 tb-height-lg-b30"></div>
  <div class="container-fluid">
    <div class="row"> 
      <div class="col-lg-12">
        <div class="tb-card tb-style1">
          <div class="tb-card-heading">
            <div class="tb-card-heading-right">
              <form action="#" class="tb-search tb-style2">
                <input type="text" placeholder="Search..." class="tb-search-input">
                <button type="submit"><i class="material-icons-outlined">search</i></button>
              </form>
              <a class="tb-btn tb-style1 tb-small">View All</a>
              
            </div>
            <span style="float: right;">
                <a class="tb-btn tb-style1 tb-small" onclick="show_modal()">Add Item</a>
              </span>
          </div>

          <div class="tb-card-body">
            <div class="tb-table tb-style1 tb-type1 table-responsive">
              <table class="table" id="datatable">
                <thead>
                  <tr>
                    <th style="width: 10%">ID Aduan</th>
                    <th>Aduan</th>
                    <th style="width: 20%">Action</th>
                  </tr>
                </thead>
                <tbody id="tblContainerAduan">
                </tbody>
              </table>
            </div><!-- .tb-table -->
            <div class="tb-table-footer">
              <div class="tb-table-footer-left">
                <div class="tb-table-footer-left-text">This report was generated on 29 Des,2019 at 9:34:19 PM - <a href="#">Refresh Report</a></div>
              </div>
              <div class="tb-table-footer-right">
                <ul class="tb-mp0 tb-table-footer-list">
                  <li>
                    <span class="tb-efl-title">Show Rows:</span>
                    <div class="tb-custom-select-wrap tb-style1">
                      <select name="#" class="tb-custom-select">
                        <option value="classic-fit1">10</option>
                        <option value="classic-fit2">15</option>
                        <option value="classic-fit3">20</option>
                      </select>
                    </div>
                  </li>
                  <li><span class="tb-efl-title">Go to</span><input type="text" value="1"></li>
                  <li>1 - 10 of 10</li>
                  <li>
                    <div class="tb-navigation tb-style1">
                      <a href="#" class="tb-prev"><i class="material-icons-outlined">keyboard_arrow_left</i></a>
                      <a href="#" class="tb-next"><i class="material-icons-outlined">keyboard_arrow_right</i></a>
                    </div>
                  </li>
                </ul>
              </div>
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
          <i class="lni lni-twitter-original icon-tweet"></i> Konfirmasi Hapus Data Aduan
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
<div class="modal fade" id="modal_jenisaduan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-twitter">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">
          <i class="lni lni-twitter-original icon-tweet"></i> Master Jenis Aduan
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
              placeholder="Masukan Deskripsi Jenis Aduan" id="description" required>

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
    getAduan();
  });

    function show_modal(){
        $("#description").val('');
        $("#id").val('');
        $('#modal_jenisaduan').modal('show');
    }

    function edit(id=''){
        $('#modal_jenisaduan').modal('show');
        getAduan(id);
    }


    function sendData(formId){
      $("#formId #btnSend").attr('disabled','disabled');

      // var check = input_validator('frmMaster');     
      // alert(JSON.stringify(check));
      // return true;
    
      $.ajax({
        type: 'POST',
        url: $(formId).attr('action'),
        data: $(formId).serialize(),
        success: function(data){
                if(data['response']['error'] == false ){
                    $('.modal').modal('hide');
                    setTimeout(function() { 
                      showFlashAlert('success', data['response']['message']);
                      $("#tblContainerAduan").html('');
                      getAduan();
                    }, 100);
                    
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