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
              <th wire:click="sortBy('amount')">Amount
                @include('partials.sort-icon',['field'=>'amount'])
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
          @forelse ($businessIncome as $value)
    
            <tr class="@if($value->wallet_type=='e_wallet') bg-success @else bg-warning @endif">
              <td>{{$i++}}</td>
              <td>{{$value->amount}}</td>
              <td>{{$value->date}}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center text-danger">No Records Here..</td>
              </tr>
            
          @endforelse
        </tbody>  
        </table>
        <div>
  
          <p>
              Showing {{$businessIncome->firstItem()}} to {{$businessIncome->lastItem()}} out of {{$businessIncome->total()}} items
          </p>
          <p>
  
            {{$businessIncome->links()}}
          </p>
      </div>
    </div>
</div>
