<div>
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">System Settings</h4>
      </div>
      <hr>
      <div class="br-pagebody">
        <div class="br-section-wrapper">
            <table class="table table-bordered text-center" style="background-color: rgb(52, 110, 52);">

                <thead class="thead-dark text-light font-weight-bold">
                      <tr>
                          <td colspan=3>System Update</td>
                      </tr>
                </thead>
                      <tbody>
                      <tr>
                          <th class="text-light">Company Phone</th>
                              @if (session()->has('message'))
                              <script>
                                  Swal.fire({
                                  icon: 'success',
                                  title: '{{session('message')}}'
                              });
                          </script>
                         
                          @endif
                          <td>
                            <div class="form-group input-group-sm">
                                <div style="display: inline-flex !important;" class="input-group">
                                    <span style="min-width: 50px" class="input-group-addon"><i class="fa fa-phone"></i></span>    
                                    <input type="text" class="form-control" wire:model='company_phone'>
                                </div>
                                @error('company_phone') <span
                                class="error badge  badge-danger">{{ $message }}</span> @enderror

                            </div>
                          </td>
                          <td>
                            <div class="input-group-append">
                                <button type="button" wire:click='companyPhone' class="btn btn-danger">Update</button>
                            </div>
                          </td>
                      </tr>
                      <tr>
                        <th class="text-light">Company Email</th>
                        <td>
                          <div class="form-group input-group-sm">
                              <div style="display: inline-flex !important;" class="input-group">
                                  <span style="min-width: 50px" class="input-group-addon"><i class="fa fa-envelope"></i></span>    
                                  <input type="text" class="form-control" wire:model='company_email'>
                              </div>
                              @error('company_email') <span
                              class="error badge  badge-danger">{{ $message }}</span> @enderror

                          </div>
                        </td>
                        <td>
                          <div class="input-group-append">
                              <button type="button" wire:click='companyEmail' class="btn btn-danger">Update</button>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-light">Company Address</th>
                        <td>
                          <div class="form-group">
                              <div style="justify-content:space-between;display:flex;" class="input-group">
                                <textarea class="form-control" row='2' wire:model='company_address' >
                                </textarea>
                              </div>
                              @error('company_address') <span
                              class="error badge  badge-danger">{{ $message }}</span> @enderror

                          </div>
                        </td>
                        <td>
                          <div class="input-group-append">
                              <button type="button" wire:click='companyAddress' class="btn btn-danger">Update</button>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-light">TRANSACTION ID PREFIX <small>EX: TRBH2020123 </small></th>
                            <td>
                          <div class="form-group input-group-sm">
                              <div style="display: inline-flex !important;" class="input-group">
                                  <span style="min-width: 50px" class="input-group-addon"><i class="fas fa-sync"></i></span>    
                                  <input type="text" class="form-control" wire:model='trans_code'>
                              </div>
                              @error('trans_code') <span
                              class="error badge  badge-danger">{{ $message }}</span> @enderror

                          </div>
                        </td>
                        <td>
                          <div class="input-group-append">
                              <button type="button" wire:click='transCode' class="btn btn-danger">Update</button>
                          </div>
                        </td>
                    </tr>
                    <tr>
                            <th class="text-light">USER CODE PREFIX(<small style="color:yellow">ONLY 2 CHAR</small>)<small> Ex: BH20201</small></th>
                        <td>
                          <div class="form-group input-group-sm">
                              <div style="display: inline-flex !important;" class="input-group">
                                  <span style="min-width: 50px" class="input-group-addon"><i class="fas fa-user-cog"></i></span>    
                                  <input type="text" class="form-control" wire:model='user_code'>
                              </div>
                              @error('user_code') <span
                              class="error badge  badge-danger">{{ $message }}</span> @enderror

                          </div>
                        </td>
                        <td>
                          <div class="input-group-append">
                              <button type="button" wire:click='userCode' class="btn btn-danger">Update</button>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-light">GLOBAL ADMIN REFERRAL<small style="color: yellow"> do not update</small></th>
                        <td>
                          <div class="form-group input-group-sm">
                              <div style="display: inline-flex !important;" class="input-group">
                                  <span style="min-width: 50px" class="input-group-addon"><i class="fas fa-user-tie"></i></span>    
                                  <input type="text" class="form-control" wire:model='admin_referral_id'>
                              </div>
                              @error('admin_referral_id') <span
                              class="error badge  badge-danger">{{ $message }}</span> @enderror

                          </div>
                        </td>
                        <td>
                          <div class="input-group-append">
                              <button type="button" wire:click='adminReferralId' class="btn btn-danger">Update</button>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-light">GLOBAL ADMIN NAME</th>
                            <td>
                          <div class="form-group input-group-sm">
                              <div style="display: inline-flex !important;" class="input-group">
                                  <span style="min-width: 50px" class="input-group-addon"><i class="far fa-smile"></i></span>    
                                  <input type="text" class="form-control" wire:model='global_admin_name'>
                              </div>
                              @error('global_admin_name') <span
                              class="error badge  badge-danger">{{ $message }}</span> @enderror

                          </div>
                        </td>
                        <td>
                          <div class="input-group-append">
                              <button type="button" wire:click='globalAdmiName' class="btn btn-danger">Update</button>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-light">GLOBAL AFFILIATE URL<small style="color: yellow"> do not update</small></th>
                        <td>
                          <div class="form-group input-group-sm">
                              <div style="display: inline-flex !important;" class="input-group">
                                  <span style="min-width: 50px" class="input-group-addon"><i class="fas fa-link"></i></span>    
                                  <input type="text" class="form-control" wire:model='global_url'>
                              </div>
                              @error('global_url') <span
                              class="error badge  badge-danger">{{ $message }}</span> @enderror

                          </div>
                        </td>
                        <td>
                          <div class="input-group-append">
                              <button type="button" wire:click='globalUrl' class="btn btn-danger">Update</button>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-light">STORE URL<small style="color: yellow"> do not update</small></th>
                        <td>
                          <div class="form-group input-group-sm">
                              <div style="display: inline-flex !important;" class="input-group">
                                  <span style="min-width: 50px" class="input-group-addon"><i class="fas fa-link"></i></span>    
                                  <input type="text" class="form-control" wire:model='store_url'>
                              </div>
                              @error('store_url') <span
                              class="error badge  badge-danger">{{ $message }}</span> @enderror

                          </div>
                        </td>
                        <td>
                          <div class="input-group-append">
                              <button type="button" wire:click='storeUrl' class="btn btn-danger">Update</button>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-light">NEWS TICKER</th>
                            <td>
                          <div class="form-group input-group-sm">
                            <div style="justify-content:space-between;display:flex;" class="input-group">
                                <textarea class="form-control" row='2' wire:model='news_ticker' >
                                </textarea>
                              </div>
                              @error('news_ticker') <span
                              class="error badge  badge-danger">{{ $message }}</span> @enderror

                          </div>
                        </td>
                        <td>
                          <div class="input-group-append">
                              <button type="button" wire:click='newsTicker' class="btn btn-danger">Update</button>
                          </div>
                        </td>
                    </tr>


                      </tbody>
            </table>
        </div>
      </div>
</div>
