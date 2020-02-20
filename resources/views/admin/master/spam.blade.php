@section('title','Folder Spam')
@extends('layouts-back.layout')
@section('content')
<div class="tb-content tb-style1">
  <div class="tb-padd-lr-30 tb-uikits-heading">
    <h2 class="tb-uikits-title">Spam</h2>
    </ul>
  </div>
  <div class="tb-height-b30 tb-height-lg-b30"></div>
  <div class="container-fluid">
    <div class="row"> 
      <div class="col-lg-12">
        <div class="tb-card tb-style1">
          <div class="tb-card-heading">
          </div>

          <div class="tb-card-body">
             <table class="display" id="datatable" width="100%">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th width="300">Ministry Name</th>
                    <th width="200">City</th>
                    <th width="200">Address</th>
                    <th width="200">Phone</th>
                    <th width="100">Aksi</th>
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


@endsection
<script src="{{asset('/assets-back')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script>

  $(document).ready(function(){
    getDataSpam();
  });

    function getDataSpam(){
          var table = $('#datatable').DataTable({
                 dom: "rtiplf",
                 language: {
                    searchPlaceholder: "Search..."
                },
                 processing: true,
                 serverSide: true,
                 destroy:true,
                 ajax: 'master/ministry',
                 columns: [
                      { data: 'id', name: 'id' },
                      { data: 'name', name: 'name' },
                      { data: 'city', name: 'city' },
                      { data: 'address', name: 'address' },
                      { data: 'phone_1', name: 'phone_1' },
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

</script>