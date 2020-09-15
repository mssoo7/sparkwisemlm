<div>
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Autopool Settings</h4>
      </div>
      <hr>
      <div class="br-pagebody">
        <div class="br-section-wrapper">

          @if (session()->has('message'))
          <script>
              Swal.fire({
              icon: 'success',
              title: '{{session('message')}}'
          });
      </script>
      @endif
      
      @error('autopool_limit')<span
      class="error badge  badge-danger">{{ $message }}</span> @enderror
      <table class="table-bordered" style="width: 100%; background: darkgray;color:black;">
        <tr>
          <td>
            <label class='pt-2 p-1'>Minimun Required Sponsor To Enter Into AUTO-POOL</label>
          </td>
          <td>
            <input type="number" class="form-control" wire:model="autopool_limit" min="0"> 
          </td>
          <td>
            <button  type="submit" class="btn btn-danger btn-block" wire:click="autopool_update">UPDATE</button>
          </td>  
    </tr>
      </table>
      
      <br>

      <table class="table table-bordered">
        <thead class="thead-dark text-light font-weight-bold">
         
         <td>LEVEL</td>
         <td>Income Per Id</td>
         <td>Require Team</td>
         <td>Action</td>
        </thead>
        <tbody>
         <tr>   
             <form method="POST">
                 
                 <input type="hidden" value="" name="id">
                 <td></td>
                 <td style="display: flex;"><i class="fa fa-inr" style="padding: 12px 4px 0 0;"></i> <input type="text" class="form-control" name="income_per_id" value="" min="0"></td>
                 <td><i class="fa fa-users"></i> </td>
                 <td><button type="submit" class="btn btn-danger btn-sm" name="update">Update</button></td>
             </form>                 
         </tr>
   
        </tbody>
     </table>
        </div>
      </div>

</div>
