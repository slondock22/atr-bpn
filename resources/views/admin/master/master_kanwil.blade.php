@section('title','Master Kantor Wilayah')
@extends('layouts-back.layout')
@section('content')
<div class="tb-content tb-style1">
  <div class="tb-padd-lr-30 tb-uikits-heading">
    <h2 class="tb-uikits-title">Master Kantor Wilayah</h2>
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
              <a href="#" class="tb-btn tb-style1 tb-small">View All</a>
            </div>
            <span style="float: right;">
                <a class="tb-btn tb-style1 tb-small">Add Item</a>
              </span>
          </div>
          <div class="tb-card-body">
            <div class="tb-table tb-style1 tb-type1 table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Kanwil</th>
                    <th>Alamat</th>
                    <th>No Telpon</th>
                    <th>Aksi</th>{{-- 
                    <th></th> --}}
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>ATR/BPN DKI Jakarta</td>
                    <td>Jakarta Pusat</td>
                    <td>021-7228901</td>
                    <td>
                        <a class="tb-solial-btn social-derault-color tb-radious50">
                            <i class="lni lni-trash"></i>
                        </a>
                        <a class="tb-solial-btn social-derault-color tb-radious50">
                            <i class="lni lni-pencil"></i>
                        </a>
                    </td>
                    {{-- <td>
                      <div class="tb-table-more-option text-center"><i class="material-icons-outlined">more_horiz</i></div>
                    </td> --}}
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>ATR/BPN Jawa Timur</td>
                    <td>Surabaya</td>
                    <td>(0231) 8290985</td>
                    <td>
                        <a class="tb-solial-btn social-derault-color tb-radious50">
                            <i class="lni lni-trash"></i>
                        </a>
                        <a class="tb-solial-btn social-derault-color tb-radious50">
                            <i class="lni lni-pencil"></i>
                        </a>
                    </td>
                    {{-- <td>
                      <div class="tb-table-more-option text-center"><i class="material-icons-outlined">more_horiz</i></div>
                    </td> --}}
                     <tr>
                    <td>3</td>
                    <td>ATR/BPN Jawa Tengah</td>
                    <td>Semarang</td>
                    <td>(024) 8310388</td>
                    <td>
                        <a class="tb-solial-btn social-derault-color tb-radious50">
                            <i class="lni lni-trash"></i>
                        </a>
                        <a class="tb-solial-btn social-derault-color tb-radious50">
                            <i class="lni lni-pencil"></i>
                        </a>
                    </td>
                    {{-- <td>
                      <div class="tb-table-more-option text-center"><i class="material-icons-outlined">more_horiz</i></div>
                    </td> --}}
                  </tr>
             
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
@endsection