<div>
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Minimum Amount Transfer</h4>
      </div>
      <hr>
      <div class="br-pagebody">
        <div class="br-section-wrapper">

            <table class="table table-bordered text-center" style="background-color: rgb(52, 110, 52);">

              <thead class="thead-dark text-light font-weight-bold">
                    <tr>
                        <td colspan=2>Minimum Amount Transfer Settings</td>
                    </tr>
              </thead>
                    <tbody>
                    <tr>
                        <th class="text-light">
                            Minimum Withdrawal Amount</th>
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
                                    <input type="number" class="form-control" wire:model='min_withd'>
                                    <div class="input-group-append">
                                        <button type="button" wire:click='min_withd_amt' class="btn btn-danger">Update</button>
                                    </div>
                                </div>
                                @error('min_withd') <span
                                class="error badge  badge-danger">{{ $message }}</span> @enderror

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-light">Minimum Wallet Transfer Other</th>
                        <td>     
                            <div class="form-group">
                                    <div style="display: inline-flex !important;" class="input-group">
                                        <span style="min-width: 50px" class="input-group-addon"><i class="fa {{$global_currency}}"></i></span>    
                                        <input type="number" class="form-control" wire:model='other_transfer_amt' step="0.01" >
                                        <div class="input-group-append">
                                            <button type="button" wire:click='other_transfer' class="btn btn-danger">Update</button>
                                        </div>
                                    </div>
                                    @error('other_transfer_amt') <span
                                    class="error badge  badge-danger">{{ $message }}</span> @enderror

                                </div>
                           
                        </td>
                    </tr>
                    <tr>
                        <th class="text-light">Minimum Amount Transfer Earning to Main</th>
                        <td>     
                            <div class="form-group">
                                    <div style="display: inline-flex !important;" class="input-group">
                                        <span style="min-width: 50px" class="input-group-addon"><i class="fa {{$global_currency}}"></i></span>    
                                        <input type="number" class="form-control" wire:model="self_transfer_amt" step="0.01" >
                                        <div class="input-group-append">
                                            <button type="button" wire:click='self_transfer' class="btn btn-danger">Update</button>
                                        </div>
                                    </div>
                                    @error('self_transfer_amt') <span
                                    class="error badge  badge-danger">{{ $message }}</span> @enderror

                                </div>
                           
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
      </div>
</div>
