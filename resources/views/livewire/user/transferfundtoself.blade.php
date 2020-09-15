<div>
    <div class="row" style="justify-content: center;">
        <div class="col-md-6">
            <form method="post" id="form_fund_transfer" class="card">
              <div class="card-header" style="background-color: green; color: white">
                <h3 class="card-title" id="card-title-pin-request" > Transfer Fund to Main Wallet</h3>
              </div>
              <div class="card-body" id="card-body-pin-request">
                <div class="row">
                  <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                      <table class="table table-bordered">
                        <tr>
                          <th>Earning Wallet</th>
                          <td><i class="fa">&nbsp;</td>
                        </tr>
                        <tr>
                          <th>Main Wallet</th>
                          <td><i class="fa">&nbsp;</td>
                        </tr>
                      </table>
                    </div><!--/.form-group-->
                    
                      <div class="form-label">Amount you want to Transer to Main Wallet</div>
                      <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa"></i>
                        </span>
                        </div>
                        <input type="number" id="amount" name="amount" class="form-control" min="" required>
                      
                    </div><!--/.form-group-->
                    <div class="form-group">
                        <div class="form-label">Withdrawal Charge:@<span>&nbsp;&nbsp;</span></div>
                        <div><span id="wd_amt">Withdrawal Amount :<i class="fa"></i></span> <strong id="w_amount" name="w_amount"></strong></div>
                        <div><span id="total_amt">Main Wallet Amount :<i class="fa "></i></span> <strong id="total_amount" name="total_amount"></strong></div>
                      </div>
                    <div class="form-group">
                      <input type="hidden" name="referral_id" value="">
                      <input type="hidden" name="userid" value="">
                        <input style="float: right; width: 50%" type="submit" id="btn_submit" name="submit" class="btn btn-danger" value="Transfer Now">
                        <div class="loader" style="display:none"></div>
                    </div><!--.,form-group-->
                  </div><!--/.col-lg-4-->
                </div><!--/.row-->
              </div><!--/.card-body-->
            </form>
        </div><!---/.col-4-->
        
      </div>
</div>
