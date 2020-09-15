<div>
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Withdrawal Charges</h4>
    </div>
    <hr>
    <div class="br-pagebody">
        <div class="br-section-wrapper">

            <table class="table table-bordered text-center" style="background-color: rgb(52, 110, 52);">

                <thead class="thead-dark text-light font-weight-bold">
                    <tr>
                        <td colspan=2>Withdrawal Settings</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-light">Amount Withdrawal Charge</th>

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
                                    <span style="min-width: 50px" class="input-group-addon"><i
                                            class="fa fa-percent"></i></span>
                                    <input type="number" class="form-control" wire:model.lazy='withd_charg' step="0.01">
                                    <div class="input-group-append">
                                        <button type="button" wire:click='withdrawal_charge'
                                            class="btn btn-danger">Update Charge</button>
                                    </div>
                                </div>
                                @error('withd_charg') <span class="error badge  badge-danger">{{ $message }}</span>
                                @enderror

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-light">Earning to main Wallet Transfer Charge</th>
                        <td>
                            <div class="form-group">
                                <div style="display: inline-flex !important;" class="input-group">
                                    <span style="min-width: 50px" class="input-group-addon"><i
                                            class="fa fa-percent"></i></span>
                                    <input type="number" class="form-control" wire:model="self_transfer_charge"
                                        step="0.01">
                                    <div class="input-group-append">
                                        <button type="button" wire:click='self_transfer' class="btn btn-danger">Update
                                            Charge</button>
                                    </div>
                                </div>
                                @error('self_transfer_charge') <span
                                    class="error badge  badge-danger">{{ $message }}</span> @enderror

                            </div>

                        </td>
                    </tr>
                    <!-- <tr>
                        <th>Amount Transfer To other Wallet Charge
                        </th>
                        <td>
                            
                            <form action="" method="post">
                                <div class="form-group">
                                    <div style="display: inline-flex !important;" class="input-group mb-3">
                                        <span style="min-width: 100px" class="input-group-addon"><i class="fa fa-percent"></i></span>    
                                        <input type="text" class="form-control" name="fund_trans_charge_other" step="0.01" value="" required>
                                        <div class="input-group-append">
                                            <button type="submit"  class="btn btn-danger">Update Charge</button>
                                        </div>
                                    </div>

                                </div>
                            </form> 
                        </td>
                    </tr> -->
                </tbody>
            </table>

        </div>
    </div>
</div>