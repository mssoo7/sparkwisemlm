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
                  <td wire:click="sortBy('req_amt')">Amount
                    @include('partials.sort-icon',['field'=>'req_amt'])
                  </td>
                  <td wire:click="sortBy('date')">Request Date
                    @include('partials.sort-icon',['field'=>'date'])
                  </td>
                  <td wire:click="sortBy('payment_date')">Approved Date
                    @include('partials.sort-icon',['field'=>'payment_date'])
                  </td>
                  <td wire:click="sortBy('remark')">Remark
                    @include('partials.sort-icon',['field'=>'remark'])
                  </td>
                </tr>
              </thead>
              <tbody>
              @php
                  $i=1
                
              @endphp
              @forelse ($confirmed as $value)
        
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$value->user_name}}<br>{{$value->user_id}}</td>
                  <td>{{$value->req_amt}}</td>
                  <td>{{$value->date}}</td>
                  <td>{{$value->payment_date}}</td>
                  <td>{{$value->remark}}</td>
                </tr>
                @empty
                  <tr>
                    <td colspan="6" class="text-center text-danger">No Records Here..</td>
                    </tr>
                
              @endforelse
            </tbody>  
            </table>
            <div>

              <p>
                  Showing {{$confirmed->firstItem()}} to {{$confirmed->lastItem()}} out of {{$confirmed->total()}} items
              </p>
              <p>
      
                {{$confirmed->links()}}
              </p>
          </div>
          </div>
          
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
</div>
