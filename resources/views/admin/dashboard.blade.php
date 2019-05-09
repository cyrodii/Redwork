@extends('admin.layout')
@section('title', 'Dashboard')
@section('content')
	
<div class="my-3 my-md-5">
	<div class="container">
		<div class="page-header">
			<h4 class="page-title">Dashboard</h4>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
			</ol>
		</div>

		<div class=" col-lg-12">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3">
					<progress-bar></progress-bar>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="card-value float-right stamp stamp-lg  bg-warning "><i class="fa fa-shopping-cart"></i></div>
							<h3 class="mb-1 text-white">567</h3>
							<div class="text-muted">Total Sales</div>
							<div class="progress progress-md mt-4">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 57%"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="card-value float-right bg-info stamp stamp-lg"><i class="fa fa-briefcase"></i></div>
							<h3 class="mb-1 text-white">56</h3>
							<div class="text-muted">Total Projects</div>
							<div class="progress progress-md mt-4">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 70%"></div>
							</div>
						</div>

					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="card-value float-right stamp stamp-lg bg-secondary"><i class="fa fa-usd"></i></div>
							<h3 class="mb-1 text-white">567</h3>
							<div class="text-muted">Today Income</div>
							<div class="progress progress-md mt-4">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 87%"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-deck">
			<div class="col-lg-8 col-sm-12">
				<projects></projects>
			</div>
			<div class="col-lg-4 col-sm-12">
				<weather></weather>
			</div>
		</div>
		<div class="row row-deck">
			<div class="col-lg-8 col-md-12 col-sm-12 ">
				<quotes></quotes>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12 ">
				<div class="card" >
					<div class="card-header border-bottom">
						<h5 class="card-title">Employees</h5>
					</div>
					<div class="emp-tab">
						<div class="table-responsive">
							<table class="table  table-hover table-striped">
								<thead class="text-primary">
									<tr>
										<th>Name</th>
										<th>Salary</th>
										<th>Country</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($users as $user)
									<tr>
										<td>{{ $user->username }}</td>
										<td>{{ $user->email }}</td>
										<td>{{ date_format($user->created_at, 'F, jS - Y') }}</td>
									</tr>								
									@endforeach

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-cards">
			<div class="col-lg-8 col-sm-12">
				<contact></contact>
			</div>					
		</div>		
	</div>
</div>
</div>
@endsection