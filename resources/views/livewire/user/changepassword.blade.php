<div>
    <div class="row" style="justify-content: center; margin-left: unset;margin-right: unset;">
        <!-- account login password -->
          <div class="col-md-5 col-lg-5">
            <form method="post" wire:submit.prevent='changePass' id="form_profile_password" class="card h-100">
              @csrf
              <div class="card-header">
                <h3 class="card-title" id="card-title-profile_password"><p>Change Profile Password</p></h3>
              </div>
              <div class="card-body" id="card-body-pin-request">
                <div class="row">
                  <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                      <div class="form-label">Current Profile Password</div>
                      <input type="password" wire:model='current_password' class="form-control" placeholder="Current Password">
                      @error('current_password') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div><!--/.form-group-->
                    <div class="form-group">
                      <div class="form-label">New Profile Password</div>
                      
                      <input type="password" wire:model='new_password' class="form-control"  placeholder="New Password">
                      @error('new_password') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div><!--/.form-group--> 
                    <div class="form-group">
                      <div class="form-label">Confirm Profile Password</div>
                      <input type="password" wire:model='confirm_password' class="form-control" placeholder="Confirm Password" >
                      @error('confirm_password') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div><!--/.form-group-->
  
                    <div class="form-group">
                        {{-- <input type="hidden" name="password_type" value="profile_password"> --}}
                        <input type="submit" id="btn_submit_profile" name="profile_password" class="btn btn-info" value="Change Password">
                        <div class="loader loader_profile" style="display:none"></div>
                    </div><!--.,form-group-->
                    </div><!--/.col-lg-4-->
                  </div><!--/.row-->
              </div><!--/.card-body-->
            </form>
            @if(session()->has('msgpasssucess'))
    <script>
        Swal.fire({
        icon: 'success',
        title: '{{session('msgpasssucess')}}'
    });
    </script>
     @endif
      @if(session()->has('msgpasserror'))
      <script>
        Swal.fire({
        icon: 'error',
        title: '{{session('msgpasserror')}}'
    });
    </script> 
      @endif
          </div><!---/.col-5-->

          <!-- account transaction password -->
          {{-- <div class="col-md-5 col-lg-5">
            <form method="post" wire:submit.prevent='transacPass' id="form_transaction_password" class="card h-100">
              <div class="card-header">
                <h3 class="card-title" id="card-title-transaction_password"><p style="color: orange">Change Transaction Password</p></h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 col-lg-12">
                      <div class="form-group">
                      <div class="form-label">Current Transaction Password</div>
                      <input type="password" class="form-control" name="current_tr_password"  placeholder="Current Password" required="">
                    </div>
                      <div class="form-group">
                      <div class="form-label">New Transaction Password</div>
                      
                      <input type="password" class="form-control" name="new_password"  placeholder="New Password" required="">
                      
                    </div>
                    <div class="form-group">
                      <div class="form-label">Confirm Transaction Password</div>
                      <input type="password" class="form-control" name="confirm_password"  placeholder="Confirm Password" required="">
                      
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="password_type" value="transaction_password">
                        <input type="submit" id="btn_submit_transaction" name="transaction_password" class="btn btn-info" value="Change Password">
                        <div class="loader loader_transaction" style="display:none"></div>
                    </div>
                    </div>
                  </div>
              </div>
            </form>
          </div> --}}
    </div>
</div>
