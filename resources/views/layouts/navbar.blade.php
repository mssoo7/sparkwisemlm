
{{-- Body Start Here.. --}}
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    {{-- <li class="nav-item d-none d-sm-inline-block">
      <a href="{{('/')}}" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{('/about')}}" class="nav-link">About</a>
    </li> --}}
  </ul>

  <!-- SEARCH FORM -->
  {{-- <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form> --}}

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
  {{-- new things --}}
  <div>
    <a href="https://ecomnetwork.thenwguru.com/" target="_blank" class="nav-link">
      <i class="nav-icon fas fa-store"><strong> STORE</strong></i>
    </a>
  </div>

  <div style="text-transform: uppercase;">
         
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-times-circle text-danger"><strong> Register</strong></i>
    </a>
        </div>

        {{-- end things --}}

    <!-- Notifications Dropdown Menu -->
    {{-- <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 4 new messages
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-users mr-2"></i> 8 friend requests
          <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-file mr-2"></i> 3 new reports
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li> --}}

    <div class="dropdown">
      <!-- Sidebar user (optional) -->
      <div class="user-panel d-flex" data-toggle="dropdown">
        
        <div class="info">
          <a style="text-transform: uppercase; color: #000 !important; font-weight: 600; text-align:center" href="#" class="d-block"> @if (session()->has('user_name'))
           {{ session('user_name')}}
            @endif
            <br>
            <small><i class="fa fa-rupee-sign"></i> 1300.00</small></a>
          
        </div>
        <div class="image" style="padding-left: 0;">
          <img style="width: 50px; height: 50px;" src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
      </div>
      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <a class="dropdown-item" href="profile.php">
          <i class="dropdown-icon fe fe-user"></i> Profile
        </a>
        <a class="dropdown-item" href="password.php">
          <i class="dropdown-icon fe fe-settings"></i> Change Password
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="logout.php" onclick="return confirm('Do you really want to log out?')">
          <i class="dropdown-icon fe fe-log-out"></i> Sign out
        </a>
      </div>
    </div>
  </ul>
</nav>
<!-- /.navbar --> 
 
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #000428;">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('dist/img/sparkwise.png')}}" alt="Spark Wise Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">{{$company_name}}</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
<nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             <li class="nav-header">DASHBOARD</li>
             <li class="nav-item">
               <a href="{{url('/dashboard')}}" class="nav-link {{Request::is('dashboard') ? 'active' : ''}}">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>Dashboard</p>
               </a>
             </li>
          <!-- Account setting -->
        <li class="nav-header">ACCOUNT SETTINGS</li>
        <li class="nav-item has-treeview">
          <span  class="nav-link text-white {{Request::is('account-setting/*') ? 'active' : ''}}">
            <i class="nav-icon fas fa-user-cog "></i>
            <p>
              Account Setting
              <i class="right fas fa-angle-left"></i>
            </p>
          </span>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('account-setting/user/profile')}}" class="nav-link {{Request::is('account-setting/user/profile') ? 'active' : ''}}">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Profile</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('account-setting/user/kyc')}}" class="nav-link {{Request::is('account-setting/user/kyc') ? 'active' : ''}}">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Kyc</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('account-setting/user/changepassword')}}" class="nav-link {{Request::is('account-setting/user/changepassword') ? 'active' : ''}}">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Change Password</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- Activate new user -->
        {{-- <li class="nav-header">USER ACTIVATION</li>
        <li class="nav-item has-treeview">
          <span  class="nav-link {{Request::is('activate-user/*')? 'active' : ''}} text-white">
            <i class="nav-icon fas fa-user-plus "></i>
            <p>
              Activate New User
              <i class="right fas fa-angle-left"></i>
            </p>
          </span>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('activate-user/user/useractivation')}}" class="nav-link {{Request::is('activate-user/user/useractivation')? 'active' : ''}}">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Make New Activation</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('activate-user/user/historyactivation')}}" class="nav-link {{Request::is('activate-user/user/historyactivation')? 'active' : ''}}">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Activation History</p>
              </a>
            </li>
          </ul>
        </li> --}}

        <!-- Wallet transfer -->
        {{-- <li class="nav-header">WALLET OPERATIONS</li>
        <li class="nav-item has-treeview">
          <span  class="nav-link {{Request::is('wallet-transfer/*')? 'active' : ''}} text-white">
            <i class="nav-icon fas fa-wallet "></i>
            <p>
              Wallet Transfer
              <i class="right fas fa-angle-left"></i>
            </p>
          </span>
          <ul class="nav nav-treeview">
            <li class="nav-item has-treeview">
              <span  class="nav-link {{Request::is('wallet-transfer/to-other/*')? 'active' : ''}} text-white">
                <i class="nav-icon fas fa-random text-info"></i>
                <p>
                  To Other User
                  <i class="right fas fa-angle-left"></i>
                </p>
              </span>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a 
                  href="{{url('wallet-transfer/to-other/user/transferwalletother')}}" 
                  class="nav-link {{Request::is('wallet-transfer/to-other/transferwalletother')? 'active' : ''}}">
                    <i class="nav-icon far fa-circle text-warning"></i>
                    <p>Make New Transaction</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('wallet-transfer/to-other/user/historywallettransaction')}}" class="nav-link {{Request::is('wallet-transfer/to-other/historywallettransaction')? 'active' : ''}}">
                    <i class="nav-icon far fa-circle text-warning"></i>
                    <p>Transaction History</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview">
              <span  class="nav-link {{Request::is('wallet-transfer/to-self/*')? 'active' : ''}} text-white">
                <i class="nav-icon fas fa-exchange-alt text-info "></i>
                <p>
                  To Self Wallet
                  <i class="right fas fa-angle-left"></i>
                </p>
              </span>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('wallet-transfer/to-self/user/transferfundtoself')}}" class="nav-link {{Request::is('wallet-transfer/to-self/transferfundtoself')? 'active' : ''}}">
                    <i class="nav-icon far fa-circle text-warning"></i>
                    <p>Earning To Main</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('wallet-transfer/to-self/user/historyfundtranstoself')}}" class="nav-link {{Request::is('wallet-transfer/to-self/historyfundtranstoself')? 'active' : ''}}">
                    <i class="nav-icon far fa-circle text-warning"></i>
                    <p>Transaction History</p>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </li> --}}

        <!-- Withdrawal -->
        <li class="nav-header">WITHDRAWAL OPERATIONS</li>
        <li class="nav-item has-treeview">
          <span  class="nav-link text-white" active>
            <i class="nav-icon fas fa-money-check-alt "></i>
            <p>
              Withdrawal
              <i class="right fas fa-angle-left"></i>
            </p>
          </span>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('withdrawl/user/withdrawlmake')}}" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Make New Withdrawal</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('withdrawl/user/withdrawlpending')}}" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Pending Withdrawals</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('withdrawl/user/withdrawlconfirm')}}" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Confirmed Withdrawals</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('withdrawl/user/withdrawlreject')}}" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Rejected Withdrawals</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Team Status -->
        <li class="nav-header">TEAM STATUS</li>
        <li class="nav-item has-treeview">
          <span  class="nav-link text-white">
            <i class="nav-icon fas fa-users "></i>
            <p>
              My Team
              <i class="right fas fa-angle-left"></i>
            </p>
          </span>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('my-team/user/directactiveuser')}}" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Active Directs</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('my-team/user/directinactiveuser')}}" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Inactive Directs</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('my-team/user/mydownline')}}" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>My Downline</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Binary Team -->
        {{-- <li class="nav-header">BINARY TEAM</li>
        <li class="nav-item has-treeview">
          <span  class="nav-link text-white">
            <i class="nav-icon fas fa-sitemap "></i>
            <p>
              Binary Tree
              <i class="right fas fa-angle-left"></i>
            </p>
          </span>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('tree/user/tree')}}" class="nav-link">
                <i class="nav-icon fas fa-balance-scale text-info"></i>
                <p>Dealer Tree</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('tree/user/tree')}}" class="nav-link">
                <i class="nav-icon fas fa-balance-scale text-info"></i>
                <p>Distributor Tree</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('tree/user/tree')}}" class="nav-link">
                <i class="nav-icon fas fa-balance-scale text-info"></i>
                <p>Sub-Franchise Tree</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('tree/user/tree')}}" class="nav-link">
                <i class="nav-icon fas fa-balance-scale text-info"></i>
                <p>Franchise Tree</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('tree/user/tree')}}" class="nav-link">
                <i class="nav-icon fas fa-balance-scale text-info"></i>
                <p>Manager Tree</p>
              </a>
            </li>
          </ul>
        </li> --}}
      <!-- CMC & Autopool -->
        {{-- <li class="nav-header">CMC & AUTOPOOL</li>
        <li class="nav-item has-treeview">
          <span  class="nav-link text-white">
            <i class="nav-icon fas fa-users "></i>
            <p>
              CMC & Autopool
              <i class="right fas fa-angle-left"></i>
            </p>
          </span>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('cmc-auto/user/autopool')}}" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Autopool</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('cmc-auto/user/cmc')}}" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>CMC</p>
              </a>
            </li>
          </ul>
        </li> --}}

        <!-- Income report -->
        <li class="nav-header">INCOME REPORTS</li>
        <li class="nav-item has-treeview">
          <span  class="nav-link text-white">
            <i class="nav-icon fas fa-folder-open "></i>
            <p>
              Income Report
              <i class="right fas fa-angle-left"></i>
            </p>
          </span>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('income/user/incomedirect')}}" class="nav-link">
                <i class="nav-icon fas fa-file-invoice text-warning"></i>
                <p>Fast Start Income</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('income/user/incomebinary')}}" class="nav-link">
                <i class="nav-icon fas fa-file-invoice text-warning"></i>
                <p>Pass Up Income</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('income/user/incomeautopool')}}" class="nav-link">
                <i class="nav-icon fas fa-file-invoice text-warning"></i>
                <p>Leadership Bouns</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('income/user/incomepoint')}}" class="nav-link">
                <i class="nav-icon fas fa-file-invoice text-warning"></i>
                <p>Team Size Bonus</p>
              </a>
            </li>
          </ul>
          {{-- <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('income/user/incomecmc')}}" class="nav-link">
                <i class="nav-icon fas fa-file-invoice text-warning"></i>
                <p>CMC Income</p>
              </a>
            </li>
          </ul> --}}
          <!-- <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file-invoice text-warning"></i>
                <p>Binary Upgrade Income</p>
              </a>
            </li>
          </ul> -->
        
        </li>
              <!-- Transaction History -->
              <li class="nav-header">TRANSACTION HISTORY</li>
              <!-- test Page -->
              <li class="nav-item">
                <a href="{{url('/user/historytransactionpage')}}" class="nav-link {{ Request::is('user/historytransactionpage') ? 'active' :'' }}">
                  <i class="fas fa-random nav-icon "></i>
                  <p>Transaction History</p>
                </a>
              </li>
    
              <!-- Support -->
              {{-- <li class="nav-header">SUPPORT</li> --}}
              <!-- test Page -->
              {{-- <li class="nav-item">
                <a href="#" target="_blank" class="nav-link">
                  <i class="fas fa-headset nav-icon "></i>
                  <p>Support</p>
                </a>
              </li> --}}
    
              <!-- Sign Out -->
              <li class="nav-header">SIGNOUT</li>
              <!-- test Page -->
              <li class="nav-item">
                <a href="{{url('/user/logout')}}" class="nav-link" title="Sign-out" onclick="return confirm('Do you really want to log out?')">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>Sign Out</p>
                </a>
              </li>
    
       
      </ul>
    </nav>
    </div>
  <!-- /.sidebar -->
</aside>
