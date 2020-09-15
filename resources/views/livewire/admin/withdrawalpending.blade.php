<div>
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Pending Withdrawal</h4>
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
          
                  <td  wire:click="sortBy('date')" scope="col">Request Date
                    @include('partials.sort-icon',['field'=>'date'])
                  </td>
                         
                  <td wire:click="sortBy('req_amt')" scope="col">Amount
                    @include('partials.sort-icon',['field'=>'req_amt'])
                  </td>
                 
                  <td scope="col">Action
                  </td>
                </tr>
              </thead>
              <tbody>
                @foreach ($withdrawal_pending as $item)
                <tr>
                  <td>{{$item->userid}} - {{$item->name}}</td>
                  <td>{{$item->date}}</td>
                  <td>{{$item->req_amt}}</td>
                  <td>
                    <button class="btn btn-outline-success btn-sm" data-toggle="modal" wire:click='viewDetails("{{$item->id}}")' data-target="#viewModal"><i class="fas fa-eye"></i> View </button></td>
                </tr>
                @endforeach
              </tbody>
            </table>
    
            <div>
    
              <p>
                  Showing {{$withdrawal_pending->firstItem()}} to {{$withdrawal_pending->lastItem()}} out of {{$withdrawal_pending->total()}} items
              </p>
              <p>
      
                  {{$withdrawal_pending->links()}}
              </p>
          </div>
          </div>

{{-- for modal test --}}

<!-- Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <table class="table table-bordered">
            <thead>
              <tr>
                <th>User Id</th>
                <th>Name</th>
                <th>Transfer Mode</th>
                
              </tr>
            </thead> 
            <tbody>
              <tr>
                <td>{{$form_id}}</td>
                <td></td>
                <td></td>
                
              </tr>
            </tbody>                          
             </table> 
            
          </div>
          </div> 
          <div class="row">
            <div class="col-sm-12">
              <label class="form-group"><strong>Remarks:</strong></label>
               <textarea class="form-control" name="remark" rows="5" required></textarea> 
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="id" value="">
        <button type="submit" id="send" name="send" class="btn btn-primary">Approved</button>&nbsp;&nbsp;
        <button type="submit" id="cancel" name="cancel" class="btn btn-danger">Reject</button>
      </div>
    </div>
  </div>
</div>

{{-- end test --}}

          
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
</div>
