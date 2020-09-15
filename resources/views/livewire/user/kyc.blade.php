<div>
    <div class="modal fade" id="myModalpass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Enter Your Transaction Password</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form class="form-inline" method="GET">
              <div class="form-group mb-2">
                <label for="staticEmail2" class="sr-only">Email</label>
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Transaction password ?">
              </div>
              <div class="form-group mx-sm-3 mb-2">
                <label  class="sr-only">Password</label>
                <input type="password" class="form-control" id="password_check" name="pass" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
            </div>
            
          </div>
        </div>
      </div>
      <!-- Content Wrapper. Contains page content -->
     
          <div class="container">
            <h3>Your KYC  Status : @if ($bank_status == 1 && $docs_status == 1)<span><i class="nav-icon fas fa-check-circle text-success"><strong> Completed</strong></i> </span> @else <span><i class="nav-icon fas fa-times-circle text-danger"><strong> Incomplete</strong></i> </span> @endif</h3>
           
         
            {{-- <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="background-color:green">
              </div>
            </div> --}}
          </div>
          <hr>

          <div class="row row-eq-height" style="justify-content: center;">
            

            <!-- documents -->
   @if ($bank_status == 1 && $docs_status == 1)    


    @else
    <div class="col-md-5 col-lg-5">
      <form method="post" wire:submit.prevent='docsKyc' class="card h-100">
        <div class="card-header bg-dark text-center">
          <h3 class="card-title" id="card-title-pin-request">POI and POA Details</h3>
        </div>
        <div class="card-body" id="card-body-pin-request">
            <div class="form-group">
                <div class="form-label">Choose Document</div>
               <select class="form-control" wire:model='docs_type'>
            <option value="">Select Document</option>
            @foreach ($doc_type as $item)
            <option value="{{$item->id}}"
            @foreach ($doc_check as $doc)
              @if ($doc->doc_type==$item->id)
                  hidden
              @endif
            @endforeach
              >{{$item->doc_name}}</option>
            @endforeach
            </select> 
            @error('docs_type') <span class="error text-danger">{{ $message }}</span> @enderror
              </div>
           

          <div class="form-group">
            <div class="form-label">Name On Document</div>
            <input type="text" class="form-control" wire:model="name_on_docs" placeholder="Name on document">  
            @error('name_on_docs') <span class="error text-danger">{{ $message }}</span> @enderror
          </div><!--/.form-group-->
          

          <div class="form-group">
            <div class="form-label">Document Number</div>
            <input type="text" class="form-control" wire:model="docs_number" placeholder="Document Number">
            @error('docs_number') <span class="error text-danger">{{ $message }}</span> @enderror  
          </div><!--/.form-group-->
         

          <div class="form-group">
            <div class="form-label">Scan Copy Of Document</div>
            <div class="pancard">
              <!-- User Profile Image -->
              <input class="upload form-control"  type="file" wire:model="scan_copy" accept="image/*" />
              @error('scan_copy') <span class="error text-danger">{{ $message }}</span> @enderror
            </div> 
           
          </div><!--/.form-group-->

          <hr>
          <div class="form-group" style="float: right !important;">
              <input style="background-color: " type="submit" class="btn btn-info action-btn"  value="Submit">
          </div><!--.,form-group-->
        </div><!--/.card-body-->
      </form>
      @if(session()->has('msgdocs'))
    <script>
        Swal.fire({
        icon: 'success',
        title: '{{session('msgdocs')}}'
    });
    </script>
     @endif
      @if(session()->has('msgdocserror'))
      <script>
        Swal.fire({
        icon: 'error',
        title: '{{session('msgdocserror')}}'
    });
    </script> 
      @endif
    </div><!---/.col-4-->
      
  <!-- bank -->
    <div class="col-md-5 col-lg-5">
        <form method="POST" wire:submit.prevent='bankKyc' class="card h-100" >
            <div class="card-header bg-dark text-center">
                <h3 class="card-title" id="card-title-pin-request">BANK Details</h3>
              </div>
            <div class="card-body" id="card-body-pin-request">
              
              <div class="form-group">
                <div class="form-label">Account Holder Name</div>
                <input type="text" class="form-control" wire:model="ac_holder_name" placeholder="Name on Passbook">  
                @error('ac_holder_name') <span class="error text-danger">{{ $message }}</span> @enderror
              </div><!--/.form-group-->

              <div class="form-group">
                <div class="form-label">Account Number</div>
                <input type="text" class="form-control" wire:model="ac_number" placeholder="Account Number">
                @error('ac_number') <span class="error text-danger">{{ $message }}</span> @enderror  
              </div><!--/.form-group-->
              <div class="form-group">
                <div class="form-label">Confirm Account Number</div>
                <input type="text" class="form-control" wire:model="confirm_ac_number" placeholder="Account Number">
                @error('confirm_ac_number') <span class="error text-danger">{{ $message }}</span> @enderror   
              </div><!--/.form-group-->

              <div class="form-group">
                <div class="form-label">Bank Name</div>
                <input type="text" class="form-control" wire:model="bank_name" placeholder="Bank Name">  
                @error('bank_name') <span class="error text-danger">{{ $message }}</span> @enderror  
              </div><!--/.form-group-->

              <div class="form-group">
                <div class="form-label">IFSC</div>
                <input type="text" class="form-control" wire:model="ifsc" placeholder="IFSC">  
                @error('ifsc') <span class="error text-danger">{{ $message }}</span> @enderror  
              </div><!--/.form-group-->
              
              <hr>
            <div class="form-group" style="float: right !important;">
              <input style="background-color:" type="submit" class="btn btn-info action-btn"  value="Submit">
          </div><!--.form-group-->
            </div><!--/.card-body-->
              
          </form>
      @if(session()->has('msgbank'))
      <script>
          Swal.fire({
          icon: 'success',
          title: '{{session('msgbank')}}'
      });
      </script>
      @endif
      @if(session()->has('msgbankerror'))
      <script>
        Swal.fire({
        icon: 'error',
        title: '{{session('msgbankerror')}}'
    });
    </script> 
      @endif
    </div><!---/.col-4-->


    @endif
       

            <!-- BANK Account Verification-->
            <div class="col-md-12 col-lg-12">
            
                <hr>
                
                    <div class="col-lg-12 col-md-12">
                        <div class="table-responsive">
                          @foreach ($bankdetails as $bank)
                            <table class="table table-striped table-bordered">
                                
                                  <!-- PANCARD -->
                                <tr>
                                    <td style="background: currentColor;" colspan="10"><div style="color: aliceblue">BANK DETAILS</div>
                                    </td>
                                </tr>
                                <tr>
                                  
                                    <td>NAME</td>
                                    <td>{{$bank->acc_holder_name}}</td>

                                </tr>
                                <tr>
                                    <td>A/C NO</td>
                                    <td>{{$bank->acc_number}}</td>
                                </tr>
                                <tr>
                                    <td>BANK</td>
                                    <td>{{$bank->bank_name}}</td>
                                </tr>
                                <tr>
                                    <td>IFSC</td>
                                    <td>{{$bank->IFSC}}</td>
                                </tr>

                            </table>
                            @endforeach
                        </div>
                    </div>
               
            </div>
            <!-- bank detail model-->
            
          </div><!--/.row-->

      </div><!-- /.content-wrapper -->
</div>
