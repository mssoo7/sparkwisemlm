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
            <th wire:click="sortBy('user_name')">User ID & Name
              @include('partials.sort-icon',['field'=>'user_name'])
            </th>
            <th wire:click="sortBy('sponser_name')">Sponser Name
              @include('partials.sort-icon',['field'=>'sponser_name'])
            </th>
            <th wire:click="sortBy('amount')">Product Amt
              @include('partials.sort-icon',['field'=>'amount'])
            </th>
            <th wire:click="sortBy('comission')">Income Amt
              @include('partials.sort-icon',['field'=>'comission'])
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
        @foreach ($shoppingincome as $value)
  
          <tr>
            <td>{{$i++}}</td>
            <td>{{$value->user_name}}</td>
            <td>{{$value->sponser_name}}</td>
            <td>{{$value->amount}}</td>
            <td>{{$value->comission}}</td>
            <td>{{$value->date}}</td>
          </tr>
          
        @endforeach
      </tbody>  
      </table>
      <div>

        <p>
            Showing {{$shoppingincome->firstItem()}} to {{$shoppingincome->lastItem()}} out of {{$shoppingincome->total()}} items
        </p>
        <p>

          {{$shoppingincome->links()}}
        </p>
    </div>
  </div>

    {{-- <table>
        <tr>
            <th>User Name</th>
            <th>Sponser Name</th>
            <th>Purchase Amt</th>
            <th>Comission</th>
            <th>Date</th>
        </tr>
        
        <tr>
          @forelse ($shoppingincome as $item)
  
            <td>{{$item->user_name}}</td>
            <td>{{$item->sponser_name}}</td>
            <td>{{$item->amount}}</td>
            <td>{{$item->comission}}</td>
            <td>{{$item->date}}</td>
        @empty
        
          <td colspan="2">No Records Here..</td>
          
        @endforelse
        </tr>
    </table> --}}
        
</div>
