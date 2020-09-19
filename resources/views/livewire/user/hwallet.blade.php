<div>

    <div class="d-flex flex-row-reverse">
		<!-- main Wallet -->
		<div class="col-lg-4 col-md-4 col-heading bg-warning card" style="float: left">
			<h3 style="font-weight: 600"><small>Current H-Wallet: </small>{{$h_wallet}}<sup style="font-size: 15px"> <i class="fa {{$global_currency}}"></i></sup></h3>
		</div>
			{{-- <div class="col-lg-3 col-6">
			  <div class="small-box bg-warning">
				<div class="inner">
				  <h3>{{$FatsUp}}<sup style="font-size: 20px"> <i class="fa {{$global_currency}}"></i></sup></h3>
  
				  <p>Fast Start Income</p>
				</div>
				<div class="icon">
					<i class="fas fa-wallet"></i>
				</div>
				<a href="{{url('/hwalletfaststart')}}" class="small-box-footer">Show Details <i class="fas fa-arrow-circle-right"></i></a>
			  </div>
			</div>
		
			<div class="col-lg-3 col-6">
			
			  <div class="small-box bg-warning">
				<div class="inner">
					<h3>{{$PassUp}}<sup style="font-size: 20px"> <i class="fa {{$global_currency}}"></i></sup></h3>
  
				  <p>Pass Up Income</p>
				</div>
				<div class="icon">
					<i class="fas fa-wallet"></i>
				</div>
				<a href="{{url('/hwalletfaststart')}}" class="small-box-footer">Show Details <i class="fas fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			
			<div class="col-lg-3 col-6">
			
			  <div class="small-box bg-warning">
				<div class="inner">
					<h3>150<sup style="font-size: 20px"> <i class="fa {{$global_currency}}"></i></sup></h3>
  
				  <p>Leadership Bonus</p>
				</div>
				<div class="icon">
					<i class="fas fa-wallet"></i>
				</div>
				<a href="#" class="small-box-footer">Show Details <i class="fas fa-arrow-circle-right"></i></a>
			  </div>
			</div>
		
			<div class="col-lg-3 col-6">
			
			  <div class="small-box bg-warning">
				<div class="inner">
					<h3>150<sup style="font-size: 20px"> <i class="fa {{$global_currency}}"></i></sup></h3>
  
				  <p>Team Size Bonus</p>
				</div>
				<div class="icon">
					<i class="fas fa-wallet"></i>
			
				
				</div>
				<a href="#" class="small-box-footer">Show Details<i class="fas fa-arrow-circle-right"></i></a>
			  </div>
			</div> --}}		  
		</div>
	<br>
			<div class="table-wrapper container card">
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
					  <th wire:click="sortBy('wallet_type')">IN Wallet
						@include('partials.sort-icon',['field'=>'wallet_type'])
					  </th>
					  <th wire:click="sortBy('amount')">Amount
						@include('partials.sort-icon',['field'=>'amount'])
					  </th>
					  <th wire:click="sortBy('trans_status')">Type
						@include('partials.sort-icon',['field'=>'trans_status'])
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
				  @forelse ($businessIncome as $value)
			
					<tr class="@if($value->trans_status==0) bg-warning @else bg-success @endif">
					  <td>{{$i++}}</td>
					  <td>{{$value->wallet_type}}</td>
					  <td>{{$value->amount}}</td>
					  <td>@if($value->trans_status==0) Credit @else Debit @endif</td>
					  <td>{{$value->Remark}}</td>
					  <td>{{date('M d, Y h:i A', strtotime($value->date))}}</td>
					</tr>
					@empty
					<tr>
						<td colspan="6" class="text-center text-danger">No Records Here..</td>
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
