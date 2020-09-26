
 <div class="br-logo"><a href=""><span>[</span>SparkWise<span>]</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
      <a href="{{url('/admin/dashboard')}}" class="br-menu-link {{Request::is('admin/dashboard')?'active':''}}">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
          <span class="menu-item-label">Dashboard</span>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      {{--
      <a href="mailbox.html" class="br-menu-link">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
          <span class="menu-item-label">Mailbox</span>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <a href="card-dashboard.html" class="br-menu-link">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Cards &amp; Widgets</span>
        </div><!-- menu-item -->
      </a><!-- br-menu-link --> --}}
      <a href="#" class="br-menu-link {{Request::is('activation/*')?'active':''}}">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
          <span class="menu-item-label">Activation</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        {{-- <li class="nav-item"><a href="{{url('activation/admin/newreq')}}" class="nav-link {{Request::is('activation/admin/newreq')?'active':''}}">New Request</a></li>
        <li class="nav-item"><a href="{{url('activation/admin/historytodayactive')}}" class="nav-link {{Request::is('activation/admin/historytodayactive')?'active':''}}">Today's Activation History</a></li> --}}
        <li class="nav-item"><a href="{{url('activation/admin/historyallactive')}}" class="nav-link {{Request::is('activation/admin/historyallactive')?'active':''}}">Activation History</a></li>
      </ul>
      {{-- <a href="{{url('/admin/transactionwallet')}}" class="br-menu-link {{Request::is('admin/transactionwallet')?'active':''}}">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
          <span class="menu-item-label">Wallet Transaction</span>
        </div>
      </a> --}}
      <a href="#" class="br-menu-link">
        <div class="br-menu-item">
          <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
          <span class="menu-item-label">Withdraw Request</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{url('/admin/withdrawalpending')}}" class="nav-link">Pending Withdrawal</a></li>
        <li class="nav-item"><a href="{{url('/admin/withdrawalconfirm')}}" class="nav-link">Confirm Withdrawal</a></li>
        <li class="nav-item"><a href="{{url('admin/withdrawalreject')}}" class="nav-link">Reject Withdrawal</a></li>
      </ul>
      {{-- <a href="#" class="br-menu-link">
        <div class="br-menu-item">
          <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
          <span class="menu-item-label">KYC</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{url('/admin/kycrequest')}}" class="nav-link">KYC Requests</a></li>
        <li class="nav-item"><a href="{{url('/admin/kycapproved')}}" class="nav-link">KYC Approved List</a></li>
        <li class="nav-item"><a href="{{url('/admin/kycunavailable')}}" class="nav-link">KYC Unavailable List</a></li>
      </ul> --}}
      <a href="#" class="br-menu-link">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
          <span class="menu-item-label">Income History</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{url('/admin/historydirectincome')}}" class="nav-link">Fast Start Income History</a></li>
        <li class="nav-item"><a href="{{url('/admin/historybinaryincome')}}" class="nav-link">Pass Up Income History</a></li>
        <li class="nav-item"><a href="{{url('/admin/historypointincome')}}" class="nav-link">Leadership Bonus History</a></li>
        <li class="nav-item"><a href="{{url('/admin/historypointincome')}}" class="nav-link">Team Size Bonus History</a></li>
      </ul>
      <a href="{{url('/admin/historytransactions')}}" class="br-menu-link">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
          <span class="menu-item-label">Transaction History</span>
        </div>
      </a>
      {{-- <a href="{{url('/admin/historyadmintransaction')}}" class="br-menu-link">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
          <span class="menu-item-label">Admin Transaction</span>
        </div>
      </a> --}}
      {{-- <a href="#" class="br-menu-link">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
          <span class="menu-item-label">User Wallet Transfer</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link --> --}}
      {{-- <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{url('/admin/transfertotheruser')}}" class="nav-link">To Other User</a></li>
        <li class="nav-item"><a href="{{url('/admin/transfertearningtomain')}}" class="nav-link">Earning To Main Wallet</a></li>
      </ul>
      <a href="{{url('/admin/cmclosing')}}" class="br-menu-link">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
          <span class="menu-item-label">CMC Closing Details</span>
        </div>
      </a> --}}
      <a href="#" class="br-menu-link">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
          <span class="menu-item-label">Affiliate Settings</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{url('/admin/settingswithdrawal')}}" class="nav-link">Withdrawal Charge</a></li>
        {{-- <li class="nav-item"><a href="{{url('/admin/settingsmintransferamt')}}" class="nav-link">Minimum Amount Transfer</a></li> --}}
        {{-- <li class="nav-item"><a href="{{url('/admin/settingspointwalletuse')}}" class="nav-link">Point Wallet Use Settings</a></li>
        <li class="nav-item"><a href="{{url('/admin/settingsautopool')}}" class="nav-link">Autopool Settings</a></li>
        <li class="nav-item"><a href="{{url('/admin/settingscmc')}}" class="nav-link">CMC Settings</a></li> --}}
        <li class="nav-item"><a href="{{url('/admin/settingsactivation')}}" class="nav-link">Membership Settings</a></li>
        <li class="nav-item"><a href="{{url('/admin/leadership-bonus')}}" class="nav-link">Leader Ship Bonus</a></li>
      </ul>
      <a href="#" class="br-menu-link">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-briefcase-outline tx-22"></i>
          <span class="menu-item-label">System Settings</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{url('/admin/settingsupdatesystem')}}" class="nav-link">Update System Settings</a></li>

      </ul>
      <a href="#" class="br-menu-link">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-briefcase-outline tx-22"></i>
          <span class="menu-item-label">User</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{url('/admin/users')}}" class="nav-link">All User</a></li>
        <li class="nav-item"><a href="{{url('/admin/usersearch')}}" class="nav-link">Search User</a></li>

      </ul>

    </div><!-- br-sideleft-menu -->




    <br>
</div>

  <div class="br-header">
    <div class="br-header-left">
      <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
      <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    </div><!-- br-header-left -->
    <div class="br-header-right">
      <nav class="nav">
        {{-- <div class="dropdown">
          <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
            <i class="icon ion-ios-email-outline tx-24"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
            <!-- end: if statement -->
          </a>
          <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
            <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
              <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Messages</label>
              <a href="" class="tx-11">+ Add New Message</a>
            </div><!-- d-flex -->

            <div class="media-list">
              <!-- loop starts here -->
              <a href="" class="media-list-link">
                <div class="media pd-x-20 pd-y-15">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                      <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Donna Seay</p>
                      <span class="tx-11 tx-gray-500">2 minutes ago</span>
                    </div><!-- d-flex -->
                    <p class="tx-12 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                  </div>
                </div><!-- media -->
              </a>
              <!-- loop ends here -->
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                      <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Samantha Francis</p>
                      <span class="tx-11 tx-gray-500">3 hours ago</span>
                    </div><!-- d-flex -->
                    <p class="tx-12 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                  </div>
                </div><!-- media -->
              </a>
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                      <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Robert Walker</p>
                      <span class="tx-11 tx-gray-500">5 hours ago</span>
                    </div><!-- d-flex -->
                    <p class="tx-12 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                  </div>
                </div><!-- media -->
              </a>
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                      <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Larry Smith</p>
                      <span class="tx-11 tx-gray-500">Yesterday</span>
                    </div><!-- d-flex -->
                    <p class="tx-12 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                  </div>
                </div><!-- media -->
              </a>
              <div class="pd-y-10 tx-center bd-t">
                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Messages</a>
              </div>
            </div><!-- media-list -->
          </div><!-- dropdown-menu -->
        </div><!-- dropdown --> --}}
        {{-- <div class="dropdown">
          <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
            <i class="icon ion-ios-bell-outline tx-24"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
            <!-- end: if statement -->
          </a>
          <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
            <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
              <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>
              <a href="" class="tx-11">Mark All as Read</a>
            </div><!-- d-flex -->

            <div class="media-list">
              <!-- loop starts here -->
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                    <span class="tx-12">October 03, 2017 8:45am</span>
                  </div>
                </div><!-- media -->
              </a>
              <!-- loop ends here -->
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                    <span class="tx-12">October 02, 2017 12:44am</span>
                  </div>
                </div><!-- media -->
              </a>
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                    <span class="tx-12">October 01, 2017 10:20pm</span>
                  </div>
                </div><!-- media -->
              </a>
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                    <span class="tx-12">October 01, 2017 6:08pm</span>
                  </div>
                </div><!-- media -->
              </a>
              <div class="pd-y-10 tx-center bd-t">
                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
              </div>
            </div><!-- media-list -->
          </div><!-- dropdown-menu -->
        </div><!-- dropdown --> --}}
        {{-- <div class="dropdown">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <span class="logged-name hidden-md-down">Katherine</span>
            <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
            <span class="square-10 bg-success"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-header wd-200">
            <ul class="list-unstyled user-profile-nav">
              <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
              <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
              <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
              <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
              <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li>
              <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown --> --}}
      </nav>
     <!-- navicon-right -->
    </div><!-- br-header-right -->
  </div>

  <div class="br-mainpanel">
