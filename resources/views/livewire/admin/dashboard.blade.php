<div>
    <!-- ########## START: MAIN PANEL ########## -->
    
        <div class="pd-30">
          <h4 class="tx-gray-800 mg-b-5">Admin Dashboard</h4>
        </div><!-- d-flex -->
  
        <div class="br-pagebody mg-t-5 pd-x-30">
          <div class="row row-sm">
            <div class="col-sm-3 col-xl-3">
              <div class="bg-br-primary rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-ios-people tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Users</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$total_user}}</p>
                    <a href="#">
                      <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-3 col-xl-3 mg-t-20 mg-sm-t-0">
              <div class="bg-teal rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-ios-people tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Active Users</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$active_user}}</p>
                    <a href="#">
                      <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-3 col-xl-3 mg-t-20 mg-xl-t-0">
              <div class="bg-danger rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-ios-people tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Hold Users</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$hold_user}}</p>
                    <a href="#">
                      <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-3 col-xl-3 mg-t-20 mg-xl-t-0">
              <div class="bg-secondary rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-close-circled tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Block Users</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$blocked_user}}</p><a href="#">
                    <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-3 col-xl-3 mg-t-20 mg-xl-t-0">
              <div class="bg-primary rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-ios-bell tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Withdraw Requests</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$withdrawl_request}}</p><a href="#">
                    <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-3 col-xl-3 mg-t-20 mg-xl-t-0">
              <div class="bg-br-primary  rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-ios-bell tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Business Amount</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$total_purchase}}</p><a href="#">
                    <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-3 col-xl-3">
              <div class="bg-warning rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-trophy tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Income</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$total_income}}</p>
                    <a href="#">
                      <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            {{-- <div class="col-sm-3 col-xl-3 mg-t-20 mg-sm-t-0">
              <div class="bg-warning rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-trophy tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total CMC Achivers</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">250</p>
                    <a href="#">
                      <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 --> --}}
          </div><!-- row -->
        </div> <!-- br-pagebody -->
        <br>
        <div class="col-lg-12 col-sm-12 col-xl-12">
          <h3><i class="fa fa-google-wallet"> </i>Total Wallets</h3>
          <hr>
        </div>
        <div class="br-pagebody mg-t-5 pd-x-30">
          <div class="row row-sm">
            <div class="col-sm-3 col-xl-3">
              <div class="bg-teal rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-cash tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total E-Wallet</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$total_ewallet}}</p>
                    <a href="#">
                      <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-3 col-xl-3 mg-t-20 mg-sm-t-0">
              <div class="bg-warning rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-cash tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total H- Wallet</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$total_hold}}</p>
                    <a href="#">
                      <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-3 col-xl-3 mg-t-20 mg-xl-t-0">
              <div class="bg-warning rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-cash tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total EH-Wallet</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$total_ehwallet}}</p>
                    <a href="#">
                      <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-3 col-xl-3 mg-t-20 mg-xl-t-0">
              <div class="bg-danger rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-cash tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Lost Wallet</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$total_lost}}</p><a href="#">
                    <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            {{-- <div class="col-sm-6 col-xl-4 mg-t-20 mg-xl-t-0">
              <div class="bg-primary rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-cash tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total CMC Fund</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">32.16%</p><a href="#">
                    <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 --> --}}
          </div><!-- row -->
        </div> <!-- br-pagebody -->
        <br>
        {{-- <div class="col-lg-12 col-sm-12 col-xl-12">
          <h3><i class="fa fa-tree"> </i>Total Users in Upgraded Tree</h3>
          <hr>
        </div>
        <div class="br-pagebody mg-t-5 pd-x-30">
          <div class="row row-sm">
            <div class="col-sm-6 col-xl-3">
              <div class="bg-teal rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today's Visits</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">1,975,224</p>
                    <a href="#">
                      <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
              <div class="bg-danger rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today Sales</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">$329,291</p>
                    <a href="#">
                      <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
              <div class="bg-primary rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">% Unique Visits</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">54.45%</p>
                    <a href="#">
                      <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
              <div class="bg-br-primary rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Bounce Rate</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">32.16%</p><a href="#">
                    <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
              <div class="bg-br-primary rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Bounce Rate</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">32.16%</p><a href="#">
                    <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
              <div class="bg-br-primary rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Bounce Rate</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">32.16%</p><a href="#">
                    <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
              <div class="bg-br-primary rounded overflow-hidden mb-2">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Bounce Rate</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">32.16%</p><a href="#">
                    <span class="tx-11 tx-roboto tx-white-6">View More >></span></a>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
          </div><!-- row -->
        </div> <!-- br-pagebody --> --}}
      <!-- ########## END: MAIN PANEL ########## -->
</div>

