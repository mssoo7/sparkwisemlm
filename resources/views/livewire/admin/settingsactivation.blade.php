<div>
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Activation Settings</h4>
      </div>
      <hr>
      <div class="br-pagebody">
        <div class="br-section-wrapper">

            <table class="table table-bordered text-center">

              <thead class="thead-dark text-light font-weight-bold">
                    <tr>
                        <td colspan=2>Income Settings</td>
                    </tr>
              </thead>
                    <tbody>
                    <tr>
                        <th class="font-weight-bold">
                            FAST START INCOME</th>
                            @if (session()->has('message'))
                            <script>
                                Swal.fire({
                                icon: 'success',
                                title: '{{session('message')}}'
                            });
                        </script>
                       
                        @endif
                        <td>
                            <div class="form-group">
                                <div style="display: inline-flex !important;" class="input-group">
                                    <span style="min-width: 50px" class="input-group-addon"><i class="fa fa-percent"></i></span>    
                                    <input type="number" class="form-control" wire:model='activation_amount'>
                                    <div class="input-group-append">
                                        <button type="button" wire:click='activationAmount' class="btn btn-danger">Update</button>
                                    </div>
                                </div>
                                @error('activation_amount') <span
                                class="error badge  badge-danger">{{ $message }}</span> @enderror

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="font-weight-bold">FRONTLINE INCOME</th>
                        <td>     
                            <div class="form-group">
                                    <div style="display: inline-flex !important;" class="input-group">
                                        <span style="min-width: 50px" class="input-group-addon"><i class="fa fa-percent"></i></span>    
                                        <input type="number" class="form-control" wire:model='point_wallet_topup' step="0.01" >
                                        <div class="input-group-append">
                                            <button type="button" wire:click='pointWalletTopup' class="btn btn-danger">Update</button>
                                        </div>
                                    </div>
                                    @error('point_wallet_topup') <span
                                    class="error badge  badge-danger">{{ $message }}</span> @enderror

                                </div>
                           
                        </td>
                    </tr>
                    <tr>
                        <th class="font-weight-bold">PASS UP INCOME</th>
                        <td>     
                            <div class="form-group">
                                    <div style="display: inline-flex !important;" class="input-group">
                                        <span style="min-width: 50px" class="input-group-addon"><i class="fa fa-percent"></i></span>    
                                        <input type="number" class="form-control" wire:model="sponsor_income_topup" step="1" >
                                        <div class="input-group-append">
                                            <button type="button"wire:click='sponsorIncomeTopup' class="btn btn-danger">Update</button>
                                        </div>
                                    </div>
                                    @error('sponsor_income_topup') <span
                                    class="error badge  badge-danger">{{ $message }}</span> @enderror
                                </div>
                        </td>
                    </tr>
                    {{-- <tr>
                        <th class="font-weight-bold">CMC Fund (TOP-UP ACTIVATION)</th>
                        <td>     
                            <div class="form-group">
                                    <div style="display: inline-flex !important;" class="input-group">
                                        <span style="min-width: 50px" class="input-group-addon"><i class="fa fa-percent"></i></span>    
                                        <input type="number" class="form-control" wire:model="cmc_fund" step="1" >
                                        <div class="input-group-append">
                                            <button type="button" wire:click='cmcFund' class="btn btn-danger">Update</button>
                                        </div>
                                    </div>
                                    @error('cmc_fund') <span
                                    class="error badge  badge-danger">{{ $message }}</span> @enderror

                                </div>
                           
                        </td>
                    </tr> --}}

                </tbody>
            </table>
            <br>
            <table class="table table-bordered text-center" style="background-color: rgb(52, 110, 52);">

                <thead class="thead-dark text-light font-weight-bold">
                      <tr>
                          <td colspan=2>Product Purchase Settings</td>
                      </tr>
                </thead>
                      <tbody>
                      <tr>
                          <th class="text-light">
                            SPONSOR INCOME (PRODUCT PURCHASE ACTIVATION)</th>
                              @if (session()->has('message'))
                              <script>
                                  Swal.fire({
                                  icon: 'success',
                                  title: '{{session('message')}}'
                              });
                          </script>
                         
                          @endif
                          <td>
                              <div class="form-group">
                                  <div style="display: inline-flex !important;" class="input-group">
                                      <span style="min-width: 50px" class="input-group-addon"><i class="fa fa-percent"></i></span>    
                                      <input type="number" class="form-control" wire:model='cmcpool_limit_sponser'>
                                      <div class="input-group-append">
                                          <button type="button" wire:click='cmcpooLimitSponser' class="btn btn-danger">Update</button>
                                      </div>
                                  </div>
                                  @error('cmcpool_limit_sponser') <span
                                  class="error badge  badge-danger">{{ $message }}</span> @enderror
  
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <th class="text-light">SPONSOR INCOME (PRODUCT RE-PURCHASE)</th>
                          <td>     
                              <div class="form-group">
                                      <div style="display: inline-flex !important;" class="input-group">
                                          <span style="min-width: 50px" class="input-group-addon"><i class="fa fa-percent"></i></span>    
                                          <input type="number" class="form-control" wire:model='cmcpool_limit_group' step="0.01" >
                                          <div class="input-group-append">
                                              <button type="button" wire:click='cmcpooLimitGroup' class="btn btn-danger">Update</button>
                                          </div>
                                      </div>
                                      @error('cmcpool_limit_group') <span
                                      class="error badge  badge-danger">{{ $message }}</span> @enderror
  
                                  </div>
                             
                          </td>
                      </tr>
                      <tr>
                          <th class="text-light">POINT WALLET (PRODUCT PURCHASE ACTIVATION)</th>
                          <td>     
                              <div class="form-group">
                                      <div style="display: inline-flex !important;" class="input-group">
                                          <span style="min-width: 50px" class="input-group-addon"><i class="fa fa-percent"></i></span>    
                                          <input type="number" class="form-control" wire:model="cmcpool_limit_day" step="1" >
                                          <div class="input-group-append">
                                              <button type="button" wire:click='cmcpooLimitDay' class="btn btn-danger">Update</button>
                                          </div>
                                      </div>
                                      @error('cmcpool_limit_day') <span
                                      class="error badge  badge-danger">{{ $message }}</span> @enderror
  
                                  </div>
                             
                          </td>
                      </tr>
                      <tr>
                        <th rowspan='2' class="text-light align-middle">POINT WALLET (PRODUCT RE-PURCHASE)</th>
                   
                        <td>     
                            <div class="form-group">
                                <b class="text-light">Minimum Amount </b>
                                    <div style="display: inline-flex !important;" class="input-group">
                                        <span style="min-width: 50px" class="input-group-addon"><i class="fa fa-percent"></i></span>    
                                        <input type="number" class="form-control" wire:model="cmcpool_limit_day" step="1" >
                                        <div class="input-group-append">
                                            <button type="button" wire:click='cmcpooLimitDay' class="btn btn-danger">Update </button>
                                        </div>
                                    </div>
                                    @error('cmcpool_limit_day') <span
                                    class="error badge  badge-danger">{{ $message }}</span> @enderror

                                </div>
                           
                        </td>
                       
                    </tr>
                    <tr>
                        <td style="border: 1px #F0FFFF solid ">     
                            <div class="form-group">
                                <b class="text-light">Maximum Amount </b>
                                    <div style="display: inline-flex !important;" class="input-group">
                                        <span style="min-width: 50px" class="input-group-addon"><i class="fa fa-percent"></i></span>    
                                        <input type="number" class="form-control" wire:model="cmcpool_limit_day" step="1" >
                                        <div class="input-group-append">
                                            <button type="button" wire:click='cmcpooLimitDay' class="btn btn-danger">Update </button>
                                        </div>
                                    </div>
                                    @error('cmcpool_limit_day') <span
                                    class="error badge  badge-danger">{{ $message }}</span> @enderror

                                </div>
                           
                        </td>
                    </tr>
                    <tr>
                        <th class="text-light">CMC FUND (PRODUCT PURCHASE ACTIVATION)</th>
                        <td>     
                            <div class="form-group">
                                    <div style="display: inline-flex !important;" class="input-group">
                                        <span style="min-width: 50px" class="input-group-addon"><i class="fa fa-percent"></i></span>    
                                        <input type="number" class="form-control" wire:model="cmcpool_limit_day" step="1" >
                                        <div class="input-group-append">
                                            <button type="button" wire:click='cmcpooLimitDay' class="btn btn-danger">Update </button>
                                        </div>
                                    </div>
                                    @error('cmcpool_limit_day') <span
                                    class="error badge  badge-danger">{{ $message }}</span> @enderror

                                </div>
                           
                        </td>
                    </tr>
                    <tr>
                        <th class="text-light">CMC FUND (PRODUCT RE-PURCHASE)</th>
                        <td>     
                            <div class="form-group">
                                    <div style="display: inline-flex !important;" class="input-group">
                                        <span style="min-width: 50px" class="input-group-addon"><i class="fa fa-percent"></i></span>    
                                        <input type="number" class="form-control" wire:model="cmcpool_limit_day" step="1" >
                                        <div class="input-group-append">
                                            <button type="button" wire:click='cmcpooLimitDay' class="btn btn-danger">Update </button>
                                        </div>
                                    </div>
                                    @error('cmcpool_limit_day') <span
                                    class="error badge  badge-danger">{{ $message }}</span> @enderror

                                </div>
                           
                        </td>
                    </tr>

  
                  </tbody>
              </table>


        </div>
      </div>
</div>
