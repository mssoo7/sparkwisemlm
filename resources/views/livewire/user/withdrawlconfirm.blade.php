<div>

  <div class="table-wrapper container">
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

    <table class="table table-bordered">
      <thead class="thead-dark ">
        <tr class="font-weight-bold">
          <th>#</th>
          <th wire:click="sortBy('req_amt')">Withdrawal Amount
            @include('partials.sort-icon',['field'=>'req_amt'])
          </th>
          <th wire:click="sortBy('charge')">Charges
            @include('partials.sort-icon',['field'=>'charge'])
          </th>
          <th wire:click="sortBy('amount')">Received Amount
            @include('partials.sort-icon',['field'=>'amount'])
          </th>
          <th wire:click="sortBy('date')">Withdrawal Date
            @include('partials.sort-icon',['field'=>'date'])
          </th>
          <th wire:click="sortBy('payment_date')">Payment Date
            @include('partials.sort-icon',['field'=>'payment_date'])
          </th>
          <th wire:click="sortBy('remark')">Remark
            @include('partials.sort-icon',['field'=>'remark'])
          </th>
        </tr>
      </thead>
      <tbody>
      @php
          $i=1
        
      @endphp
      @forelse ($confirmed as $value)

        <tr class="bg-success">
          <td>{{$i++}}</td>
          <td>{{$value->req_amt}}</td>
          <td>{{$value->charge}}</td>
          <td>{{$value->amount}}</td>
          <td>{{date('M d, Y h:i A', strtotime($value->date))}}</td>
          <td>{{date('M d, Y h:i A', strtotime($value->payment_date))}}</td>
          <td>{{$value->remark}}</td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="text-center text-danger">No Records Here..</td>
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
