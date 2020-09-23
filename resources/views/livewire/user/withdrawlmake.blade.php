<div>

    <div class="row">
        <div class="col-md-3">
         
        </div>
          <div class="col-md-6 card">
            @if ($Ewallet >= $min_withdrawal)

            <div class="card-header" style="background-color: green; color: white">
              <h3 class="card-title" id="card-title-pin-request" >Withdrawal Request</h3>
            </div>
            <div class="card-body" id="card-body-pin-request">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <form wire:submit.prevent='widthdrawl'>
                  <div class="form-group">
                      <table class="table">
                        <tr>
                          <th>Available Balance</th>
                          <td><small><i class="fa {{$global_currency}}"></i></small> <span id="avl_bal" name="avl_bal">{{$Ewallet}}</span></td>
                        </tr>
                      </table>
                      <div id="bank_info"></div>
                   </div><!--/.form-group-->
                    <div class="form-label">Amount, you want to Withdrawal</div>
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa {{$global_currency}}"></i>
                      </span>
                    </div>
                      <input type="number" wire:model.debounce.500ms="amount" class="form-control" placeholder="Amount" min="150">
                    </div>
                    @error('amount') <span class="error text-danger">{{ $message }}</span> @enderror
                   
                  <div class="form-group">
                    @if($amount!=null)
                    <div class="form-label text-danger">Withdrawal Charge:@ {{$withdrawal_charge.'%'}}<span>&nbsp;&nbsp;</span></div>
                    <div><span class="text-success">Receiving Amount : <strong>{{$amount-($amount*($withdrawal_charge/100))}}</strong><small> <i class="fa {{$global_currency}}"></i></small></span></div>
                    @endif
                  </div>
                 
                  <!--/.form-group-->
                  <div align="right" class="form-group">
                      <input type="submit"  name="submit" class="btn btn-success" value="Submit Withdraw Request">
                      <div class="loader" style="display:none"></div>
                  </div><!--.,form-group-->
                </form>
                </div><!--/.col-lg-4-->
              </div><!--/.row-->
            </div><!--/.card-body-->  
         
            @else
                
            <center><p class='alert alert-danger'>Minimum Withdrawal Amount Is <strong>{{$min_withdrawal}}</strong> <small><i class="fa {{$global_currency}}"></i></small><br>You Have <strong>{{$Ewallet}}</strong> <small><i class="fa {{$global_currency}}"></i></small></p></center>
                
            @endif
             
        </div><!---/.col-4-->

        @if (session()->has('success'))
        <script>
            Swal.fire({
            icon: 'success',
            title: '{{session('success')}}'
        });
        </script>
         @endif
      
         @if (session()->has('error'))
         <script>
             Swal.fire({
             icon: 'error',
             title: '{{session('error')}}'
         });
         </script>
      
         @endif
        
      </div><!--/.row-->
</div>
