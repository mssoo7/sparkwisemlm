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
              <th wire:click="sortBy('name')">User ID & Name
                @include('partials.sort-icon',['field'=>'name'])
              </th>
              <th wire:click="sortBy('status')">Status
                @include('partials.sort-icon',['field'=>'status'])
              </th>
            </tr>
          </thead>
          <tbody>
          @php
              $i=1
            
          @endphp
          @foreach ($myteam as $value)
    
            <tr>
              <td>{{$i++}}</td>
              <td>{{$value->name}}</td>
              <td>{{$value->status}}</td>
             
            </tr>
            
          @endforeach
        </tbody>  
        </table>
        <div>
  
          <p>
              Showing {{$myteam->firstItem()}} to {{$myteam->lastItem()}} out of {{$myteam->total()}} items
          </p>
          <p>
  
            {{$myteam->links()}}
          </p>
      </div>
    </div>
</div>
