<div>
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Wallet Manage</h4>
      </div>
      <hr> 
<br>
      <div class="container">
      <div class="row wallet-div">
        <div class="col-lg-4 col-md-4 h-100">
          <div class="card">
            <div class="card-body">
              <h4 style="text-align:center">Check User</h4><hr>
                <!-- Page Content -->
                <form wire:submit.prevent='findUser' >
                        <div class="form-group">
                            <div style="display: inline-flex !important;" class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="ENTER USERID" wire:model="userid">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Find</button>
                                </div>
                               
                            </div>
                            @if (session()->has('msgerror'))
                            {{ session('msgerror')}} 
                         @endif
                        </div>
                    
                </form> 
            </div>
        </div>
      </div>
            <div class="col-lg-4 col-md-4 h-100">
         
                <div class="modal-content shadow">
                    <div class="modal-header" style="justify-content: space-between; display: flex;">
                        <div style="text-transform: uppercase;">
                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> <b>{{$showuserID}}</b></h4>
                        </div>
                        <div>
                            <span class="status label label-">{{$status}}</span>
                        </div>
                        
                    </div>
                    <div class="modal-body">
                        <center>
                            <img src="" name="aboutme" width="140" height="140" border="0" class="circle">
                            <h3 class="media-heading"> </h3>
                            
                            <span class="label label-info"><i class="fa fa-phone"></i>&nbsp {{$mobile}}</span>
                            <span class="label label-success"><i class="fa fa-envelope"></i>&nbsp {{$email}}</span><br>

                            <span class="label label-success"><big>
                                Main Wallet: <i class="fa fa-inr"></i>&nbsp {{$main_wallet}}</big>
                            </span>

                            <span class="label label-success"><big>
                                Earning Wallet: <i class="fa fa-inr"></i>&nbsp {{$earning_wallet}}</big>
                            </span>

                            <span class="label label-success"><big>
                                Point Wallet: <i class="fa fa-inr"></i>&nbsp {{$point_wallet}}</big>
                            </span>
                            
                        </center>
                        
                    </div>
                    <div class="modal-footer">
                        
                    </div>
                </div>
              
                
            </div>

            <div class="col-lg-4 col-md-4 h-100">
              <div class="card">
                <div class="card-body">
                  <h4 style="text-align:center">Wallet Management</h4><hr>
                <form action="" method="post" wire:submit.prevent='updateWallet("{{$showuserID}}")' >
                 
                        <div class="form-group">
                        <div style="display: inline-flex !important;" class="input-group">
                          
                        </div>
                        <div class="form-group">
                            <div class="card">
                                <label style="color: red" for="exampleFormControlSelect1"><b>SELECT WALLET TYPE</b></label>
                                
                                <select class="form-control" name="wallet_type" style="font-weight:bold" required="">
                                    <option value="main_wallet">MAIN WALLET</option>
                                    <option value="earning_wallet">EARNING WALLET</option>
                                    <option value="point_wallet">POINT WALLET</option>
                                
                                </select>
                            </div>
                            <br>
                            <div class="card">
                                <label style="color: red" for="exampleFormControlSelect1"><b>SELECT TRANSACTION TYPE</b></label>
                                <select class="form-control" name="trans_type" style="font-weight:bold" required="">
                                <option value="credit">CREDIT</option>
                                <option value="debit">DEBIT</option>
                                
                                </select>
                            </div>
                            
                        </div><br>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                                <input type="number" class="form-control"  name="amount" step="0.5" min="0.5" id="amount" value="100" placeholder="Enter Amount" required="required">
                                <input type="hidden" name="email" id="email" value="">

                                <input type='submit' style="min-width: 100px;" class="input-group-addon btn btn-danger" id="add-fund" value='UPDATE'>
                            </div>
                            <div class="loader_add"></div>
                        </div>


                    </div>
                        
                    </div>
                    <label id="opt-msg"></label>


                </form>
              </div>
            </div>
    
    </div><!--/.row-->
      </div>
</div>
