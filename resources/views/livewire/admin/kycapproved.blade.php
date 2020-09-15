<div>
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">KYC Approved</h4>
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

              <td wire:click="sortBy('name')" style="" scope="col">Name & User ID
                @include('partials.sort-icon',['field'=>'name'])

              </td>
             
              <td wire:click="sortBy('mobile')" scope="col">Mobile
                @include('partials.sort-icon',['field'=>'mobile'])
              </td>
              
              <td  wire:click="sortBy('join_date')" scope="col">Joining Date
                @include('partials.sort-icon',['field'=>'join_date'])
              </td>
             
              <td wire:click="sortBy('status')" scope="col">Status
                @include('partials.sort-icon',['field'=>'status'])
              </td>
            </tr>
          </thead>
          <tbody>
            @foreach ($kyc as $item)
            <tr>
              <td>{{$item->userid}} <br> {{$item->name}}</td>
              <td>{{$item->mobile}}</td>
              <td>{{$item->join_date}}</td>
              <td>{{$item->status}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <div>

          <p>
              Showing {{$kyc->firstItem()}} to {{$kyc->lastItem()}} out of {{$kyc->total()}} items
          </p>
          <p>
  
              {{$kyc->links()}}
          </p>
      </div>
          </div>
          
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
</div>
