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
                 {{--  <li>
                    <a href="#proliletab2">
                      <span class="tb-tab-icon"><i class="material-icons-outlined">layers</i></span>
                      <span class="tb-tab-title">Details</span>
                    </a>
                  </li> --}}
                </ul>
              </div>
              <div class="tb-tab-content">
                <div id="proliletab1" class="tb-tab tb-active">
                  <div class="tb-profile-setting-container">
                    <div class="tb-height-b45 tb-height-lg-b45"></div>
                    <div class="tb-profile-setting-heading">
                      <h2 class="tb-profile-setting-title">Profile Settingss</h2>
                      <div class="tb-profile-setting-subtitle">Add all your details and fill-up correctly. You can change settings later, too.</div>
                    </div>
                    <div class="tb-height-b15 tb-height-lg-b15"></div>
                    <div class="tb-form-field-wrap tb-style1">
                      <label class="tb-form-field-label">Profile Photo</label>
                      <div class="tb-form-field">
                        <div class="tb-setting-profile-pic">
                          <img src="{{asset('/assets-back')}}/img/logo-mini-atr.jpg" alt="" width="150px">
                          <a href="#" class="tb-profile-pic-edit-btn"><i class="material-icons-outlined">edit</i></a>
                        </div>
                      </div>
                    </div>
                    <div class="tb-height-b25 tb-height-lg-b25"></div>
                    <div class="tb-form-field-wrap tb-style1">
                      <label class="tb-form-field-label">Username</label>
                      <div class="tb-form-field tb-color1">
                        <input type="text" placeholder="Enter First Name" value="John" readonly disabled id="username">
                      </div>
                    </div>
                    <div class="tb-height-b25 tb-height-lg-b25"></div>
                    <div class="tb-form-field-wrap tb-style1">
                      <label class="tb-form-field-label">Fullname</label>
                      <div class="tb-form-field tb-color1">
                        <input type="text" placeholder="Enter First Name" value="John" readonly disabled id="fullname">
                      </div>
                    </div>
                    <div class="tb-height-b25 tb-height-lg-b25" style="display: none"></div>
                    <div class="tb-form-field-wrap tb-style1" style="display: none">
                      <label class="tb-form-field-label">Email</label>
                      <div class="tb-form-field tb-color1">
                        <input type="email" placeholder="Email" value="johndoe@gmail.com" readonly disabled id="email">
                      </div>
                    </div>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                    <div class="tb-form-field-wrap tb-style1">
                      <label class="tb-form-field-label">User Detail</label>
                      <div class="tb-form-field tb-color1">
                        <input type="text" placeholder="Enter First Name" value="John" readonly disabled id="detail">
                      </div>
                    </div>
                    <div class="tb-height-b25 tb-height-lg-b25"></div>
                    <div class="tb-form-field-wrap tb-style1">
                      <label class="tb-form-field-label">City</label>
                      <div class="tb-form-field tb-color1">
                        <input type="text" placeholder="Enter First Name" value="John" readonly disabled id="city">
                      </div>
                    </div>
                    <div class="tb-height-b25 tb-height-lg-b25"></div>
                    <div class="tb-form-field-wrap tb-style1">
                      <label class="tb-form-field-label">Ministry</label>
                      <div class="tb-form-field tb-color1">
                        <input type="text" placeholder="Enter First Name" value="John" readonly disabled id="ministry_name">
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


               {{--  <div id="proliletab2" class="tb-tab">
                  <div class="tb-profile-setting-container">
                    <div class="tb-height-b45 tb-height-lg-b45"></div>
                    <div class="tb-profile-setting-heading">
                      <h2 class="tb-profile-setting-title">User Details</h2>
                      <div class="tb-profile-setting-subtitle">Add all your details and fill-up correctly. You can change settings later, too.</div>
                    </div>
                    <div class="tb-height-b15 tb-height-lg-b15"></div>
                    <div class="tb-form-field-wrap tb-style2">
                      <label class="tb-form-field-label">Phone Number</label>
                      <div class="tb-form-field tb-color1">
                        <input type="text" placeholder="Enter Phone Number" value="+42345678">
                        <div class="tb-form-field-note">Please enter with country code</div>
                      </div>
                    </div>
                    <div class="tb-height-b15 tb-height-lg-b15"></div>
                    <div class="tb-form-field-wrap tb-style2">
                      <label class="tb-form-field-label">Address</label>
                      <div class="tb-form-field tb-color1">
                        <input type="text" placeholder="Line 1">
                      </div>
                      <div class="tb-height-b15 tb-height-lg-b15"></div>
                      <div class="tb-form-field tb-color1">
                        <input type="text" placeholder="Line 2">
                      </div>
                    </div>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="tb-form-field-wrap tb-style2">
                          <label class="tb-form-field-label">State</label>
                          <div class="tb-form-field tb-color1">
                            <div class="tb-custom-select-wrap tb-style2 tb-color1">
                              <select name="#" class="tb-custom-select">
                                <option value="classic-fit1">Choose state</option>
                                <option value="classic-fit2">Choose state</option>
                                <option value="classic-fit3">Choose state</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div><!-- .col -->
                      <div class="col-lg-6">
                        <div class="tb-form-field-wrap tb-style2">
                          <label class="tb-form-field-label">ZIP</label>
                          <div class="tb-form-field tb-color1">
                            <input type="text" placeholder="Enter code">
                          </div>
                        </div>
                      </div><!-- .col -->
                    </div>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                    <div class="tb-form-field-wrap tb-style2">
                      <label class="tb-form-field-label">Membership</label>
                      <div class="tb-form-field">
                        <div class="tb-radio-wrap tb-style1">
                          <label class="tb-radio">
                            <input type="radio" name="tb-radio" checked="checked">
                            <i></i>Regular
                          </label>
                          <label class="tb-radio">
                            <input type="radio" name="tb-radio">
                            <i></i>Exclusive
                          </label>
                          <label class="tb-radio">
                            <input type="radio" name="tb-radio">
                            <i></i>Pro
                          </label>
                        </div>
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
                </div> --}}
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
    getUser(1);  
  });

</script>