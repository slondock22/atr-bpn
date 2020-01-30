 <div class="tb-main-header-right">
    <ul class="tb-ex-nav tb-style1 tb-flex tb-mp0">
    </ul>
    <ul class="tb-ex-nav tb-style1 tb-flex tb-mp0">
     {{--  <li>
        <div class="tb-toggle-body tb-message-area tb-style1">
          <span class="tb-toggle-btn tb-ex-nav-btn tb-message-btn">
            <i class="material-icons-outlined">email</i>
            <span class="tb-ex-nav-label">29</span>
          </span>
          <div class="tb-dropdown tb-notify-dropdown">
            <h2 class="tb-nofify-title">
              <span class="tb-nofify-title-left">Messages</span>
              <span class="tb-nofify-title-right"><a href="#">Mark All as Read</a></span>
            </h2>
            <ul class="tb-nofify-list tb-style1 tb-mp0">
              <li>
                <a href="#">
                  <div class="tb-nofify-thumb">
                    <img src="{{asset('/assets-back')}}/img/msg/msg1.png" alt="msg1" />
                  </div>
                  <div class="tb-nofify-text">
                    <h3 class="tb-nofify-text-head">
                      Bob Dylan
                      <span class="tb-online-status tb-live"></span>
                    </h3>
                    <div class="tb-msg">
                      Contrary to popular belief, Lorem Ipsum is...
                    </div>
                    <span class="tb-notify-time">12:23</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="active">
                  <div class="tb-nofify-thumb">
                    <img src="{{asset('/assets-back')}}/img/msg/msg2.png" alt="msg2" />
                  </div>
                  <div class="tb-nofify-text">
                    <h3 class="tb-nofify-text-head">
                      David Gilmour
                      <span class="tb-online-status"></span>
                    </h3>
                    <div class="tb-msg">
                      Contrary to popular belief, Lorem Ipsum is...
                    </div>
                    <span class="tb-notify-time">12:23</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="tb-nofify-thumb">
                    <img src="{{asset('/assets-back')}}/img/msg/msg3.png" alt="msg3" />
                  </div>
                  <div class="tb-nofify-text">
                    <h3 class="tb-nofify-text-head">
                      Jeff Beck
                      <span class="tb-online-status tb-live"></span>
                    </h3>
                    <div class="tb-msg">
                      Contrary to popular belief, Lorem Ipsum is...
                    </div>
                    <span class="tb-notify-time">12:23</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="tb-nofify-thumb">
                    <img src="{{asset('/assets-back')}}/img/msg/msg4.png" alt="msg4" />
                  </div>
                  <div class="tb-nofify-text">
                    <h3 class="tb-nofify-text-head">
                      Guthrie Govan
                      <span class="tb-online-status"></span>
                    </h3>
                    <div class="tb-msg">
                      Contrary to popular belief, Lorem Ipsum is...
                    </div>
                    <span class="tb-notify-time">12:23</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="tb-nofify-thumb">
                    <img src="{{asset('/assets-back')}}/img/msg/msg5.png" alt="msg5" />
                  </div>
                  <div class="tb-nofify-text">
                    <h3 class="tb-nofify-text-head">
                      Eric Johnson
                      <span class="tb-online-status"></span>
                    </h3>
                    <div class="tb-msg">
                      Contrary to popular belief, Lorem Ipsum is...
                    </div>
                    <span class="tb-notify-time">12:23</span>
                  </div>
                </a>
              </li>
            </ul>
            <a href="#" class="tb-btn tb-style2">SEE ALL <i class="material-icons-outlined">navigate_next</i></a>
          </div>
        </div>
      </li> --}}
      <li class="dropdown-notifications">
        <div class="tb-toggle-body tb-notice-area tb-style1">
          <span class="tb-toggle-btn tb-ex-nav-btn tb-notice-btn" id="notif-toogle">
            <i data-count="0" class="material-icons-outlined">notifications</i>
            <span class="tb-ex-nav-label notif-count">0</span>
          </span>
          <div class="tb-dropdown tb-notify-dropdown">
            <h2 class="tb-nofify-title">Notifications</h2>
            <ul class="tb-nofify-list tb-style1 tb-mp0" id="notif-dropdown-menu">
            </ul>
          {{--   <a href="#" class="tb-btn tb-style2">SEE ALL <i class="material-icons-outlined">navigate_next</i></a> --}}
          </div>
        </div>
      </li>
      <li>
        <div class="tb-toggle-body tb-profile-nav tb-style1">
          <div class="tb-toggle-btn tb-profile-nav-btn">
            <div class="tb-profile-nav-text">
              <span>Welcome,</span>
              <h4>{{request()->session()->get('USER_FULL_NAME')}}</h4>
            </div>
            <div class="tb-profile-nav-img">
              <img src="{{asset('/assets-back')}}/img/logo-mini-atr.jpg" alt="profile" />
            </div>
          </div>
          <ul class="tb-dropdown tb-style1">
            <li>
              <a href="{{route('profile')}}"><i class="material-icons-outlined">account_circle</i>My
                Profile</a>
            </li>
            <li>
              <a href="#"><i class="material-icons-outlined">help</i>Help</a>
            </li>
            <li class="tb-dropdown-cta"><a href="{{route('logout')}}">Sign Out</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://js.pusher.com/5.0/pusher.min.js"></script>
  <script type="text/javascript">
      var notificationsWrapper   = $('.dropdown-notifications');
      var notificationsToggle    = $('#notif-toogle')
      var notificationsCountElem = notificationsToggle.find('i[data-count]');
      var notificationsCount     = parseInt(notificationsCountElem.data('count'));
      // console.log(notificationsCount);
      var notifications          = $('#notif-dropdown-menu');

      if (notificationsCount <= 0) {
        notificationsWrapper.hide();
      }

      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;

      // Pusher.logToConsole = true;

      var pusher = new Pusher('b5354447af20620e3ad5', {
        cluster: 'ap1',
        forceTLS: true
      });

      // Subscribe to the channel we specified in our Laravel Event
      var channel = pusher.subscribe('aduan-notif');

      // Bind a function to a Event (the full Laravel class)
      channel.bind('App\\Events\\AduanNotif', function(data) {
        var existingNotifications = notifications.html();
        var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
        console.log(data.message);
        var newNotificationHtml = `
          <li class="notification active">
            <a href="`+base_url+`/aduan/`+data.type+`">
              <div class="tb-nofify-list-in">
                  <div class="tb-nofify-icon tb-icon-color2">
                    <img src="`+base_url+`/assets-back/img/logo-mini-atr.jpg" class="img-circle">
                  </div>
                  <div class="tb-nofify-text">
                    <h3 class="tb-nofify-text-head">`+data.message+`</h3>
                    <span class="tb-notify-time">A few minutes ago</span>
                  </div>
                </div>
              </a>
          </li>
        `;

        notifications.html(newNotificationHtml + existingNotifications);
        notificationsCount += 1;
        notificationsCountElem.attr('data-count', notificationsCount);
        notificationsWrapper.find('.notif-count').text(notificationsCount);
        notificationsWrapper.show();
      });
    </script>