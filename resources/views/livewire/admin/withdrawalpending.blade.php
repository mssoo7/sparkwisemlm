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
              @if (session()->has('success'))
              <script>
                  Swal.fire({
                  icon: 'success',
                  title: '{{session('success')}}'
              });
              </script>
               @endif
            
               @if (session()->has('error'))
               <script>
                   Swal.fire({
                   icon: 'error',
                   title: '{{session('error')}}'
               });
               </script>
            
               @endif
              
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
                  <td wire:click="sortBy('user_name')" style="" scope="col">Name & User ID
                    @include('partials.sort-icon',['field'=>'user_name'])
    
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
                @php
                    $i=1
                @endphp
                @forelse ($withdrawal_pending as $item)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$item->user_id}} - {{$item->user_name}}</td>
                  <td>{{$item->date}}</td>
                  <td>{{$item->req_amt}}</td>
                  <td>
                    <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#viewModal{{$item->id}}"><i class="fas fa-eye"></i> View </button>

                    {{-- model --}}
                    <div class="modal fade" id="viewModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Withdrawl Details</h5>
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
                                    <th>User Details</th>
                                    <th>Withdrawl Details</th> 
                                  </tr>
                                </thead> 
                                <tbody>
                                  <tr>
                                    <td>User ID: <b>{{$item->user_id}}</b><br>
                                      User Name: <b>{{$item->user_name}}</b><br>
                                      User Mobile: <b>{{$item->user_mobile}}</b><br>User Email: <b>{{$item->user_email}}</b></td>
                                    <td>Request Money: <b>{{$item->req_amt}}</b><br>Deduction: <b>{{$item->charge}}</b><br>
                                      Given Money: <b>{{$item->amount}}</b></td>
                                  </tr>
                                </tbody>                          
                                 </table> 
                              </div>
                              </div> 
                              <div class="row">
                                <div class="col-sm-12">
                                  <label class="form-group"><strong>Remarks:</strong></label>
                                   <textarea class="form-control" wire:model.lazy="remark" rows="3" required></textarea> 
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" wire:click="approved('{{$item->id}}','{{$item->userid}}','{{$item->req_amt}}')" class="btn btn-primary">Approved</button>&nbsp;&nbsp;
                            <button type="button" wire:click="rejected('{{$item->id}}','{{$item->userid}}','{{$item->req_amt}}')" class="btn btn-danger">Reject</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    {{-- /model --}}
                  </td> 
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
                  Showing {{$withdrawal_pending->firstItem()}} to {{$withdrawal_pending->lastItem()}} out of {{$withdrawal_pending->total()}} items
              </p>
              <p>
      
                  {{$withdrawal_pending->links()}}
              </p>
          </div>
          </div>

{{-- for modal test --}}

<!-- Modal -->


{{-- end test --}}

          
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
</div>
