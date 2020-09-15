<div>
      <!-- Main content -->
      <div class="row" style="justify-content: center;">
        <div class="col-md-6">
            <form method="POST" id="form_fund_transfer" class="card">
              <div class="card-header" style="background-color: green; color: white">
                <h3 class="card-title" id="card-title-pin-request" > Fund Transfer (Wallet to Wallet)</h3>
              </div>
              <div class="card-body" id="card-body-pin-request">
                <div class="row">
                  <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                      <table class="table table-bordered">
                        <tr class="bg-success">
                          <th>Main Wallet</th>
                          <td>
                            <i class="fa">&nbsp;</i>
                          </td>
                        </tr>
                        <tr class="bg-danger">
                          <th>Earning Wallet</th>
                          <td>
                            <i class="fa">&nbsp;</i>
                          </td>
                        </tr>
                        
                      </table>
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
                      
                    </div><!--/.form-group-->
                    
                    <div class="form-label">Transfer To (USERID)</div>
                    <div class="input-group">         
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-user"></i>
                        </span>
                        </div>
                        <input type="text" name="transfer_user" id="transfer_user" class="form-control text-uppercase" placeholder="USERID" required>
                    </div>
                    <span id="user"></span>          
                      <br>          
                      <div class="form-label">Amount you want to Transfer</div>
                      <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa"></i>
                        </span>
                        </div>
                        <input type="number" id="amount" name="amount" class="form-control" required>
                      </div><!--/.form-group-->
                      <br>
                      <input type="hidden" id="user_id" value="">
                   
                    <div class="form-group">
                        <button style="float: right;width: 50%" type="submit" id="transfer" name="transfer" class="btn btn-danger">Transfer</button> <i class="fa fa-random fa-2x text-gray-300"></i>
                        <div class="loader" style="display:none"></div>
                    </div><!--.,form-group-->
                  </div><!--/.col-lg-4-->
                </div><!--/.row-->
              </div><!--/.card-body-->
            </form>
        </div><!---/.col-6-->
    
      </div><!---/.class row-->
</div>
