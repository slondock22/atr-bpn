@section('title','Profile')
@extends('layouts-back.layout')
@section('content') 
  <div class="tb-content tb-style1">
    <div class="tb-padd-lr-30 tb-uikits-heading">
      <h2 class="tb-uikits-title">Profile</h2>
    </div>
    <div class="tb-height-b30 tb-height-lg-b30"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="tb-card tb-style1">
            <div class="tb-fade-tabs tb-tabs tb-style3">
              <div class="tb-tab-links-wrap">
                <ul class="tb-tab-links">
                  <li class="tb-active">
                    <a href="#proliletab1">
                      <span class="tb-tab-icon"><i class="material-icons-outlined">account_circle</i></span>
                      <span class="tb-tab-title">Profile</span>
                    </a>
                  </li>
                 <li>
                    <a href="#proliletab2">
                      <span class="tb-tab-icon"><i class="material-icons-outlined">layers</i></span>
                      <span class="tb-tab-title">Password</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="tb-tab-content">
                <div id="proliletab1" class="tb-tab tb-active">
                  <div class="tb-profile-setting-container">
                    <div class="tb-height-b45 tb-height-lg-b45"></div>
                    <div class="tb-profile-setting-heading">
                      <h2 class="tb-profile-setting-title">Profile Settingss</h2>
                      
                    </div>
                    <div class="tb-height-b15 tb-height-lg-b15"></div>
                    <div class="tb-form-field-wrap tb-style1">
                      <label class="tb-form-field-label">Profile Photo</label>
                      <div class="tb-form-field">
                        <div class="tb-setting-profile-pic">
                          <img src="{{asset('/assets-back')}}/img/logo-mini-atr.jpg" alt="" width="150px">
                         <!-- <a href="#" class="tb-profile-pic-edit-btn"><i class="material-icons-outlined">edit</i></a>-->
                        </div>
                      </div>
                    </div>
                    <input type="hidden" id="user_id" value="{{request()->session()->get('USER_ID') }}">
                    <div class="tb-height-b25 tb-height-lg-b25"></div>
                    <div class="tb-form-field-wrap tb-style1">
                      <label class="tb-form-field-label">Username</label>
                      <div class="tb-form-field tb-color1">
                        <input type="text" placeholder="Enter First Name" value="" readonly disabled id="username">
                      </div>
                    </div>
                    <div class="tb-height-b25 tb-height-lg-b25"></div>
                    <div class="tb-form-field-wrap tb-style1">
                      <label class="tb-form-field-label">Fullname</label>
                      <div class="tb-form-field tb-color1">
                        <input type="text" placeholder="Enter First Name" value="" readonly disabled id="fullname">
                      </div>
                    </div>
                    <div class="tb-height-b25 tb-height-lg-b25" style="display: none"></div>
                    <div class="tb-form-field-wrap tb-style1" style="display: none">
                      <label class="tb-form-field-label">Email</label>
                      <div class="tb-form-field tb-color1">
                        <input type="email" placeholder="Email" value="" readonly disabled id="email">
                      </div>
                    </div>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                    <div class="tb-form-field-wrap tb-style1">
                      <label class="tb-form-field-label">User Detail</label>
                      <div class="tb-form-field tb-color1">
                        <input type="text" placeholder="" value="" readonly disabled id="detail">
                      </div>
                    </div>
                    <div class="tb-height-b25 tb-height-lg-b25"></div>
                    <div class="tb-form-field-wrap tb-style1">
                      <label class="tb-form-field-label">City</label>
                      <div class="tb-form-field tb-color1">
                        <input type="text" placeholder="Enter First Name" value="" readonly disabled id="city">
                      </div>
                    </div>
                    <div class="tb-height-b25 tb-height-lg-b25"></div>
                    <div class="tb-form-field-wrap tb-style1">
                      <label class="tb-form-field-label">Ministry</label>
                      <div class="tb-form-field tb-color1">
                        <input type="text" placeholder="Enter First Name" value="" readonly disabled id="ministry_name">
                      </div>
                    <div class="tb-height-b60 tb-height-lg-b60"></div>
                  </div><!-- .tb-profile-setting-container -->
                  <hr>
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="tb-profile-btn-group tb-style1" style="display: none">
                    <a href="#" class="tb-profile-btn tb-style1 tb-color1">Save</a>
                    <a href="#" class="tb-profile-btn tb-style1 tb-color2">Reset</a>
                  </div>
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                </div>


               <div id="proliletab2" class="tb-tab">
                  <div class="tb-profile-setting-container">
                    <div class="tb-height-b45 tb-height-lg-b45"></div>
                    <div class="tb-profile-setting-heading">
                      <h2 class="tb-profile-setting-title">Change Password</h2>
                     
                    </div>
                    <div class="tb-height-b15 tb-height-lg-b15"></div>
                    <div class="tb-form-field-wrap tb-style2">
                      <label class="tb-form-field-label">Old Password</label>
                      <div class="tb-form-field tb-color1">
                        <input type="text" placeholder="Enter Phone Number" value=>
                      </div>
                    </div>
					<div class="tb-height-b15 tb-height-lg-b15"></div>
                    <div class="tb-form-field-wrap tb-style2">
                      <label class="tb-form-field-label">New Password</label>
                      <div class="tb-form-field tb-color1">
                        <input type="text" placeholder="Enter Phone Number" value=>
                      </div>
                    </div>
					<div class="tb-height-b15 tb-height-lg-b15"></div>
                    <div class="tb-form-field-wrap tb-style2">
                      <label class="tb-form-field-label">Re-enter New Password</label>
                      <div class="tb-form-field tb-color1">
                        <input type="text" placeholder="Enter Phone Number" value=>
                      </div>
                    </div>
                
                    <div class="tb-height-b55 tb-height-lg-b55"></div>
                  </div><!-- .tb-profile-setting-container -->
                  <hr>
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="tb-profile-btn-group tb-style1">
                    <a href="#" class="tb-profile-btn tb-style1 tb-color2">Back</a>
                    <a href="#" class="tb-profile-btn tb-style1 tb-color1">Proceed</a>
                  </div>
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                </div>
				
              </div>
            </div><!-- .tb-tabs -->
          </div>
        </div>
      </div>
    </div>
    <div class="tb-height-b60 tb-height-lg-b60"></div>
  </div>
@endsection
<script src="{{asset('/assets-back')}}/js/vendor/jquery-1.12.4.min.js"></script>

<script>

  $(document).ready(function(){
    var user_id = $('#user_id').val();
    getUser(user_id);  
  });

</script>