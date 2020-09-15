<div>
    <div class="row">
        <div class="col-md-3"></div>
          <div class="col-md-6">
            <form method="post" id="form_withdraw_request" class="card">
              <div class="card-header" style="background-color: green; color: white">
                <h3 class="card-title" id="card-title-pin-request" >Withdrawal Request</h3>
              </div>
              <div class="card-body" id="card-body-pin-request">
                <div class="row">
                  <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                        <table class="table">
                          <tr>
                            <th>Available Balance</th>
                            <td><i class="fa"></i><span id="avl_bal" name="avl_bal"></span></td>
                            <input type="hidden" name="main_wallet" value="">
                          </tr>
                          <tr>
                            <th>Bank Details</th>
                            <td>
                              <div class="form-group">
                                          <div class="input-group">
                                              <select class="form-control" name="bank_no" id="bank_no">
                                               <option value=""></option>
                                                    <option value="0">Select Bank</option>
                                                    <option value="upi">UPI ID</option>
                                                  <option value=""></option>
                                              </select>
                                          </div>
                                      </div>
                              </td>
                          </tr>
                          <tr>
                            <td>
                              <table class="table table-striped bg-info text-uppercase">
                                <tr>
                                <td>Name</td><td></td>
                                </tr>
                                <tr><td>Bank Name</td><td></td></tr>
                                <tr> <td>Account Number</td><td></td></tr>
                                <tr><td>Branch</td><td></td></tr>
                                <tr><td>IFSC</td><td></td></tr>
                              </table>
                              
                            </td>
                          </tr>
                        </table>
                        <div id="bank_info"></div>
                     </div><!--/.form-group-->
                      <div class="form-label">Amount, you want to Withdrawal</div>
                      <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa"></i>
                        </span>
                      </div>
                        <input type="number" name="amount" id="amount" class="form-control" min="" required="">
                      </div>
                    
                    <div class="form-group">
                      <div class="form-label">Withdrawal Charge:@<span>&nbsp;&nbsp;</span></div>
                      <div><span id="wd_amt">Withdrawal Amount :<i class="fa"></i></span> <strong id="w_amount" name="w_amount"></strong></div>
                      <div><span id="total_amt">Total Amount :<i class="fa "></i></span> <strong id="total_amount" name="total_amount"></strong></div>
                    </div>
    
                    <!--/.form-group-->
                    <div align="right" class="form-group">
                        <input type="submit" id="btn_submit" name="submit" class="btn btn-success" value="Submit Withdraw Request">
                        <div class="loader" style="display:none"></div>
                    </div><!--.,form-group-->
                  </div><!--/.col-lg-4-->
                </div><!--/.row-->
              </div><!--/.card-body-->
            </form>
          <center><p class='alert alert-danger'>Minimum Withdrawal Amount Is <strong><i class="fa"></i></strong><br>You Have <strong><i class="fa"></i></strong></p></center>
    
        </div><!---/.col-4-->
        
      </div><!--/.row-->
</div>
