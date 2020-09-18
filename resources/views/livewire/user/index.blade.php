<div>
		
	{{-- <div class="row row-wallet p-3">
		<div class="col-lg-12 col-md-12 col-heading">
			<h3 style="font-weight: 600"> CMC Details</h3>
		</div>
		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2" style="border-radius: 8px;
		    border-left: .25rem solid #4e73df!important; text-align: center;">
				<div class="card-body">
					<div class="row no-gutters align-items-center" style="justify-content:space-around; display:flex;">
						<div class="col ">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total CMC Fund</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">&nbsp</i></div>
						</div>
						<div class="col ">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total CMC Achiever
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<a href="total_achiever.php" target="_blank">
									<i class="fa fa-users">&nbsp</i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer" style="justify-content:space-around;display:flex;">
					<div class="text-primary"><label>Next Closing</label></div>
					<div class="text-secondary">
						<i class="fa fa-calendar"></i>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<!-- Cmc And Achiever card -->

	<!-- home body top -->
	<div class="row row-wallet m-3">

		<!-- main Wallet -->
		<div class="col-lg-12 col-md-12 col-heading">
			<h3 style="font-weight: 600">Available Balance</h3>
		</div>
			<div class="col-lg-3 col-6">
			  <!-- small box -->
			  <div class="small-box bg-success">
				<div class="inner">

				  <h3> @if ($e_wallet == 0)
					  0.00
				  @else
				  {{$e_wallet}}
				  @endif
					<sup style="font-size: 20px"> <i class="fa {{$global_currency}}"></i></sup></h3>
  
				  <p>E-Wallet</p>
				</div>
				<div class="icon">
					<i class="fas fa-wallet"></i>
				</div>
				<a href="{{url('/ewallets')}}" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
			  <!-- small box -->
			  <div class="small-box bg-warning">
				<div class="inner">
					<h3> @if ($eh_wallet == 0)
						0.00
					@else
					{{$eh_wallet}}
					@endif
					  <sup style="font-size: 20px"> <i class="fa {{$global_currency}}"></i></sup></h3>
  
				  <p>EH-Wallet</p>
				</div>
				<div class="icon">
					<i class="fas fa-wallet"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
			  <!-- small box -->
			  <div class="small-box bg-warning">
				<div class="inner">
					<h3> @if ($h_wallet == 0)
						0.00
					@else
					{{$h_wallet}}
					@endif
					  <sup style="font-size: 20px"> <i class="fa {{$global_currency}}"></i></sup></h3>
  
				  <p>H-Wallet</p>
				</div>
				<div class="icon">
					<i class="fas fa-wallet"></i>
				</div>
				<a href="{{url('/hwallets')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
			  <!-- small box -->
			  <div class="small-box bg-danger">
				<div class="inner">
					<h3> @if ($lost_wallet == 0)
						0.00
					@else
					{{$lost_wallet}}
					@endif
					  <sup style="font-size: 20px"> <i class="fa {{$global_currency}}"></i></sup></h3>
  
				  <p>Lost Wallet</p>
				</div>
				<div class="icon">
					<i class="fas fa-wallet"></i>
				  {{-- <i class="ion ion-card"></i> --}}
				
				</div>
				<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			<!-- ./col -->
		  

	</div>
	<div class="row row-income m-3">

		<!-- main Wallet -->
		<div class="col-lg-12 col-md-12 col-heading">
			<h3 style="font-weight: 600">All Incomes</h3>
		</div>
		<!-- Total Income -->
		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2" style="border-radius: 8px;
		    border-left: .25rem solid #4e73df!important;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Income</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><i class="fa ">&nbsp;</i></div>
						</div>
						<div class="col-auto">
							<i class="fa fa-wallet fa-2x text-warning"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Direct Income -->
		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2" style="border-radius: 8px;
		    border-left: .25rem solid #4e73df!important;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Direct Income</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><i class="fa ">&nbsp;</i></div>
						</div>
						<div class="col-auto">
							<i class="fa fa-wallet fa-2x text-warning"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- TOTAL BINARY INCOME -->
		<!-- <div class="col-xl-4 col-md-6 mb-4">
		  <div class="card border-left-primary shadow h-100 py-2" style="border-radius: 8px;
		    border-left: .25rem solid #4e73df!important;">
		    <div class="card-body">
		      <div class="row no-gutters align-items-center">
		        <div class="col mr-2">
		          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Binary Income</div>
		          <div class="h5 mb-0 font-weight-bold text-gray-800"><i class="fa ">&nbsp</i></div>
	          	</div>
		        <div class="col-auto">
		        	<i class="fa fa-wallet fa-2x text-warning"></i>
		        </div>
	          </div>
		    </div>
		  </div>
		</div> -->

		<!-- TOTAL BINARY INCOME -->
		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2" style="border-radius: 8px;
		    border-left: .25rem solid #4e73df!important;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">TOTAL BINARY INCOME
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><i class="fa ">&nbsp</i></div>
						</div>
						<div class="col-auto">
							<i class="fa fa-wallet fa-2x text-warning"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- AUTOPOOL INCOME-->
		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2" style="border-radius: 8px;
		    border-left: .25rem solid #4e73df!important;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Autopool Income</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><i class="fa ">&nbsp</i></div>
						</div>
						<div class="col-auto">
							<i class="fa fa-wallet fa-2x text-warning"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- CMC INCOME-->
		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2" style="border-radius: 8px;
		    border-left: .25rem solid #4e73df!important;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">CMC Income</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><i class="fa ">&nbsp;</i></div>
						</div>
						<div class="col-auto">
							<i class="fa fa-wallet fa-2x text-warning"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Binary Upgrade Income -->
		<!-- <div class="col-xl-4 col-md-6 mb-4">
		  <div class="card border-left-primary shadow h-100 py-2" style="border-radius: 8px;
		    border-left: .25rem solid #4e73df!important;">
		    <div class="card-body">
		      <div class="row no-gutters align-items-center">
		        <div class="col mr-2">
		          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Binary Upgrade Income</div>
		          <div class="h5 mb-0 font-weight-bold text-gray-800"><i class="fa ">&nbsp</i></div>
	          	</div>
		        <div class="col-auto">
		        	<i class="fa fa-wallet fa-2x text-warning"></i>
		        </div>
	          </div>
		    </div>
		  </div>
		</div> -->

	</div>

	<div class="row row-direct m-3">

		<div class="col-lg-12 col-md-12 col-heading">
			<h3 style="font-weight: 600">Team Members</h3>
		</div>
		<!-- Total Direct -->
		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2" style="border-radius: 8px;
		    border-left: .25rem solid #4e73df!important;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Directs</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><i
									class="fa fa-users text-danger">&nbsp;</i></div>
						</div>
						<div class="col-auto">
							<i class="fa fa-users fa-2x text-danger"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Total Direct / TOTAL TEAM-->

		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2" style="border-radius: 8px;
		    border-left: .25rem solid #4e73df!important;">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Team</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><i
									class="fa fa-users text-success">&nbsp</i></div>
						</div>
						<div class="col-auto">
							<i class="fa fa-users fa-2x text-success"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>