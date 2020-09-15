<div>
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">CMC Pool Enter Settings</h4>
      </div>
      <hr>
      <div class="br-pagebody">
        <div class="br-section-wrapper">

            <table class="table table-bordered text-center" style="background-color: rgb(52, 110, 52);">

              <thead class="thead-dark text-light font-weight-bold">
                    <tr>
                        <td colspan=2>CMC Settings</td>
                    </tr>
              </thead>
                    <tbody>
                    <tr>
                        <th class="text-light">
                            MINIMUM SPONSOR TO ENTER CMC-POOL</th>
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
                                    <span style="min-width: 50px" class="input-group-addon"><i class="fa fa-users"></i></span>    
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
                        <th class="text-light">MINIMUM GROUP MEMBERS TO ENTER CMC-POOL</th>
                        <td>     
                            <div class="form-group">
                                    <div style="display: inline-flex !important;" class="input-group">
                                        <span style="min-width: 50px" class="input-group-addon"><i class="fa fa-users"></i></span>    
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
                        <th class="text-light">MINIMUM DAYS TO ENTER CMC-POOL</th>
                        <td>     
                            <div class="form-group">
                                    <div style="display: inline-flex !important;" class="input-group">
                                        <span style="min-width: 50px" class="input-group-addon"><i class="fa fa-calendar"></i></span>    
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

                </tbody>
            </table>

        </div>
      </div>
</div>
        