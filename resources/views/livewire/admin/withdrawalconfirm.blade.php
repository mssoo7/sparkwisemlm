<div>
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Confirmed Withdrawal</h4>
      </div>

       <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="table-wrapper">
            <div class="row mb-4">
              <div class="col form-inline">
                  Per Page: &nbsp;
                  <select wire:model="perPage" class="form-control">
                      <option>5</option>
                      <option>10</option>
                      <option>15</option>
                      <option>25</option>
                      <option>50</option>
                      <option>100</option>
                  </select>
              </div>
      
              
              <div class="col">
                <div style="width: 45%; float:right;">
                  <input wire:model.debounce.300ms="search" class="form-control" type="text" placeholder="Search...">
                </div>
              </div>
      
          </div>

            <table class="table table-bordered table-responsive">
              <thead class="thead-dark text-light">
                <tr class="font-weight-bold">
                  <td>#</td>
                  <td wire:click="sortBy('user_name')">User ID & Name
                    @include('partials.sort-icon',['field'=>'user_name'])
                  </td>
                  <td wire:click="sortBy('activation_amount')">Activation Amt.
                    @include('partials.sort-icon',['field'=>'activation_amount'])
                  </td>
                  <td wire:click="sortBy('active_by_name')">Activate By
                    @include('partials.sort-icon',['field'=>'active_by_name'])
                  </td>
                  <td wire:click="sortBy('active_date')">Activate Date
                    @include('partials.sort-icon',['field'=>'active_date'])
                  </td>
                  <td wire:click="sortBy('wallet_type')">Wallet Type
                    @include('partials.sort-icon',['field'=>'wallet_type'])
                  </td>
                </tr>
              </thead>
              <tbody>
              @php
                  $i=1
                
              @endphp
              @foreach ($kyc as $value)
        
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$value->user_name}}<br>{{$value->user_id}}</td>
                  <td>{{$value->activation_amount}}</td>
                  <td>{{$value->active_by_name}}<br>{{$value->active_by_user}}</td>
                  <td>{{$value->active_date}}</td>
                  <td>{{$value->wallet_type}}</td>
                </tr>
                
              @endforeach
            </tbody>  
            </table>
            <div>

              <p>
                  Showing {{$active_user->firstItem()}} to {{$active_user->lastItem()}} out of {{$active_user->total()}} items
              </p>
              <p>
      
                {{$active_user->links()}}
              </p>
          </div>
          </div>
          
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
</div>
