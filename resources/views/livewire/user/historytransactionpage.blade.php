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
          <th wire:click="sortBy('wallet_type')">Wallet Type
            @include('partials.sort-icon',['field'=>'wallet_type'])
          </th>
          <th wire:click="sortBy('amount')">Amount
            @include('partials.sort-icon',['field'=>'amount'])
          </th>
          <th wire:click="sortBy('trans_type')">Transaction Type
            @include('partials.sort-icon',['field'=>'trans_type'])
          </th>
          <th wire:click="sortBy('Remark')">Remark
            @include('partials.sort-icon',['field'=>'Remark'])
          </th>
          <th wire:click="sortBy('date')">Date
            @include('partials.sort-icon',['field'=>'date'])
          </th>
        </tr>
      </thead>
      <tbody>
      @php
          $i=1
        
      @endphp
      @forelse ($transact as $value)

        <tr class="@if($value->wallet_type =='E-Wallet') bg-success @else bg-warning @endif ">
          <td>{{$i++}}</td>
          <td class="text-capitalize">{{str_replace("_"," ",$value->wallet_type)}}</td>
          <td>{{$value->amount}}</td>
          <td>{{$value->trans_type}}</td>
          <td>{{$value->Remark}}</td>
          <td>{{date('M d, Y h:i A', strtotime($value->date))}}</td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center text-danger">No Records Here..</td>
          </tr>
      @endforelse
    </tbody>  
    </table>
    <div>

      <p>
          Showing {{$transact->firstItem()}} to {{$transact->lastItem()}} out of {{$transact->total()}} items
      </p>
      <p>

        {{$transact->links()}}
      </p>
  </div>
</div>
