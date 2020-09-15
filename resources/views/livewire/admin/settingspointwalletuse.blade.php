<div>
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Product Purchase(Point Wallet Bonus)</h4>
      </div>
      <hr>
      <div class="br-pagebody">
        <div class="br-section-wrapper">

            <table class="table table-bordered text-center" style="background-color: rgb(52, 110, 52);">

              <thead class="thead-dark text-light font-weight-bold">
                    <tr>
                        <td colspan=2>
                            Point Wallet Bonus Settings</td>
                    </tr>
              </thead>
                    <tbody>
                    <tr>
                        <th class="text-light">Minimum amount required in point wallet</th>
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
                                    <span style="min-width: 50px" class="input-group-addon"><i class="fa {{$global_currency}}"></i></span>    
                                    <input type="number" class="form-control" wire:model='point_wallet_require' step="0.01">
                                    <div class="input-group-append">
                                        <button type="button" wire:click='point_wallet' class="btn btn-danger">Update</button>
                                    </div>
                                </div>
                                @error('point_wallet_require')<span
                                class="error badge  badge-danger">{{ $message }}</span> @enderror

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-light">maximum Amount Will Be Used (%)</th>
                        <td>     
                            <div class="form-group">
                                    <div style="display: inline-flex !important;" class="input-group">
                                        <span style="min-width: 50px" class="input-group-addon"><i class="fa fa-percent"></i></span>    
                                        <input type="number" class="form-control" wire:model="maximum_amt" step="0.01" >
                                        <div class="input-group-append">
                                            <button type="button" wire:click='maximaum_amt' class="btn btn-danger">Update</button>
                                        </div>
                                    </div>
                                    @error('maximum_amt') <span
                                    class="error badge  badge-danger">{{ $message }}</span> @enderror

                                </div>
                           
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
      </div>
</div>
