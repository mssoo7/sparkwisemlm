<div>
    <div class="row m-2">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="datatable1" class="table table-bordered table-striped">
                      <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                              <th>Wallet Type</th>
                              <th>Amount</th> 
                              <th>Date / Time</th>
                              <!-- <th>Process</th> -->
                              <th>Remark</th>
                              <th>Type</th>
                          </tr>
                      </thead>
                      @php
                        $i=1  
                      @endphp
                      @forelse ($transact as $item)
                          
                      <tr style="color: aliceblue; font-weight: 800; text-transform: capitalize;" class="@if ($item->trans_type=='credit') bg-success  
                      @else
                      bg-danger
                      @endif">
                        <td>{{$i++}}</td>
                        <td class="text-capitalize">{{str_replace("_"," ",$item->wallet_type)}}</td>
                        <td><i class="fas fa-rupee-sign"></i> {{$item->amount}}</td>
                        <td>{{date('M d, Y h:i A', strtotime($item->date))}}</td>
                        <td>
                            {{$item->remark}}
                        </td>
                        <td>{{$item->trans_type}}</td>
                    </tr>
                      @empty
                        <tr>
                            No data Found.
                        </tr>  

                      @endforelse 
                          
                
            
        
                  </table>
              </div><!--/.table-responsive-->
          </div>
      </div><!--/.row-->
      
<!-- /.content -->
</div>
