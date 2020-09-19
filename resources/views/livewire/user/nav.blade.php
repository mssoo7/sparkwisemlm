<div>
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
             @if ($renew_status==1)
             <i class="nav-icon fas fa-check-circle text-success"><strong> Active </strong></i> 
             <br>
          <small class="text-danger">Expire in:<strong> {{$leftDays}} days</small></strong>  
                 @else   
                 <i class="nav-icon fas fa-times-circle text-danger"><strong> Expired </strong></i>  
             @endif
            
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
                <a style="text-transform: uppercase; color: #000 !important; font-weight: 600; text-align:center" href="#" class="d-block">{{$name}}
                  <br>
                  <small><i class="fa {{$global_currency}}"></i> {{$Ewallet}}</small></a>
                
              </div>
              {{-- <div class="image" style="padding-left: 0;">
                <img style="width: 50px; height: 50px;" src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
              </div> --}}
            </div>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
              <a class="dropdown-item" href="profile.php">
                <i class="dropdown-icon fe fe-user"></i> Profile
              </a>
              <a class="dropdown-item" href="password.php">
                <i class="dropdown-icon fe fe-settings"></i> Change Password
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/user/logout')}}" onclick="return confirm('Do you really want to log out?')">
                <i class="dropdown-icon fe fe-log-out"></i> Sign out
              </a>
            </div>
          </div>
        </ul>
      </nav>
</div>
