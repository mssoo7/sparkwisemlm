<div>
    
    <div class="row row-eq-height m-3" style="justify-content: center;">
       
                      <div class="col-md-6 col-lg-6">
                    <form method="post" id="form_activate_member" class="card">
                                <div class="card-header" style="background-color: green; color: white">
                                 <center>Activate Member's Account</center>
                                </div>
                                <div class="card-body" id="card-body-pin-request">
                                    <div class="row">
                                          <div class="col-md-12 col-lg-12">
                                            <div class="form-group">
                                                  <table class="table table-bordered">
                                                
                                                    <tr class="bg-danger">
                                                      <th>Main Wallet </th>
                                                      <td>-444.81</td>
                                                    </tr >
                                              
                                                    <tr class="bg-success">
                                                      <th>Earning Wallet </th>
                                                      <td>16611.00</td>
                                                    </tr>
                                                </table>
                                            </div><!--/.form-group-->
                                            
                                            <!-- ------------- -->
                                            <label style="text-transform: uppercase;padding-top: 20px" class="form-label">Select Wallet</label>
                                            <div class="input-group input-group-lg">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-wallet"></i></span>
                                              </div>
                                                <select name="wallet_type" id="wallet_type" class="form-control">
                                                  <option value="main_wallet">Main Wallet</option>
                                                  <option value="current_bal">Earning Wallet</option>
                                                </select>
                                            </div>
                                            <!-- ---------------- -->

                                            <!-- ------------- -->
                                            <label style="text-transform: uppercase;padding-top: 20px" class="form-label">Activate Member (USERID)</label>
                                            <div class="input-group input-group-lg">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                              </div>
                                              <input style="text-transform: uppercase;padding-top: 20px" type="text"  id="referral_id" name="referral_id" class="form-control" required>
                                                  
                                            </div>
                                            <div>
                                                <span id="referral_name" name="referral_name"></span> 
                                            </div>
                                            
                                            <!-- ---------------- -->

                                            <!-- ------------- -->
                                            <label style="text-transform: uppercase;padding-top: 20px" class="form-label">Activation Amount</label>

                                            <div class="input-group input-group-lg">

                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa"></i></span>
                                              </div>
                                              <input type="number" class="form-control" value="" disabled>
                                            </div>
                                                    <div>
                                                    <label  id="user1" class="form-label text-info text-capitalize"></label>
                                                    </div>
                                            
                                        </div><!--/.col-lg-4-->
                                    </div><!--/.row-->
                                </div><!--/.card-body-->
                                <div class="card-footer">
                                <input type="hidden" name="activate_by_id" value="">
                                  <input style="float: right;width: 50%" type="submit" id="activate" name="activate" class="btn btn-danger" value="Activate" disabled> <i  id="icon_power" class=""></i>
                                  <div class="loader" style="display:none"></div>
                                </div><!--.,form-group-->
                            </form>
                      </div>	
               
                                        
                         <div class="col-md-6 col-lg-6">
                                     		 
                                       <form method="post" id="form_activate_self" class="card">
                                        <div class="card-header bg-danger">
                                        
                                        <center> Account Is Not Active!</center>
                                        </div>
                                        
                                        <div class="bg-danger"><a href="#"><i class="fa fa-angle-double-left text-warning" ></i> <span class="text-warning">Activate Account By Purchase Product. </span></a></div>	
                                        <div class="card-body" id="card-body-pin-request">
                                            <div class="row">
                                              <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                          <table class="table table-bordered">
                                                        
                                                            <tr class="bg-success">
                                                              <th>Main Wallet </th>
                                                              <td>
                                                                <i class="fa">&nbsp;</i>
                                                              </td>
                                                            </tr >
                                                      
                                                            <tr class="bg-success">
                                                              <th>Earning Wallet </th>
                                                              <td>
                                                               
                                                              </td>
                                                            </tr>
                                                            </table>
                                                    </div><!--/.form-group-->
                                                    
                                                    <!-- ------------- -->
                                                    <label style="text-transform: uppercase;padding-top: 20px" class="form-label">Select Wallet</label>
                                                    <div class="input-group input-group-lg">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-wallet"></i></span>
                                                      </div>
                                                        <select name="wallet_type" id="wallet_type" class="form-control">
                                                          <option value="main_wallet">Main Wallet</option>
                                                          <option value="current_bal">Earning Wallet</option>
                                                        </select>
                                                    </div>
                                                    <!-- ---------------- -->

                                                    <!-- ------------- -->
                                                    
                                                    
                                                    <div>
                                                        <span id="referral_name" name="referral_name"></span> 
                                                    </div>
                                                    
                                                    <!-- ---------------- -->

                                                    <!-- ------------- -->
                                                    <label style="text-transform: uppercase;padding-top: 20px" class="form-label">Activation Amount</label>

                                                    <div class="input-group input-group-lg">

                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa"></i></span>
                                                      </div>
                                                      <input type="number" class="form-control" value="" disabled>
                                                    </div>
                                                            <div>
                                                    <label style="text-transform: capitalize;padding-top: 10px" class="form-label text-info">You Will get:&nbsp;<i class="fa fa-bolt"></i> in your Point Wallet</label>
                                                    </div>
                                                    
                                                </div><!--/.col-lg-4-->
                                            </div><!--/.row-->
                                        </div><!--/.card-body-->
                                        <div class="card-footer">
                                        <input type="hidden" name="activate_by_id" value="">
                                        <input type="hidden" name="referral_id" value="">

                                          <input style="width: 100%;" type="submit" class="btn btn-success btn-lg" id="activate_account" name="activate_account" value="Activate Account">
                                          <div class="loader" style="display:none"></div>
                                        </div><!--.,form-group-->
                                    </form>
                          </div>
    </div><!--/.row-->
   
</div>
