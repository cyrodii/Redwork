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

		<div class="row">
			<div class="col-6 col-sm-6 col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<div class="h1 m-0"><i class="mdi mdi-account-multiple-outline text-primary"></i><strong class="text-white"> 12</strong></div>
						<div class="mb-0"> Clients</div>
					</div>
				</div>
			</div>
			<div class="col-6 col-sm-6 col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<div class="h1 m-0"><i class="mdi mdi-cash-multiple text-red"></i><strong class="text-white"> 51</strong></div>
						<div class="mb-0"> Total Projects</div>
					</div>
				</div>
			</div>
			<div class="col-6 col-sm-6 col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<div class="h1 m-0"><i class="mdi mdi-chart-line text-yellow"></i><strong class="text-white"> 45</strong></div>
						<div class="mb-0"> New Quotes</div>
					</div>
				</div>
			</div>
			<div class="col-6 col-sm-6 col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<div class="h1 m-0"><i class="mdi mdi-account-outline text-cyan"></i><strong class="text-white"> 38</strong></div>
						<div class=" mb-0"> Invoices</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-deck">
			<div class="col-lg-8 col-sm-12">
				<div class="card ">
					<div class="card-header">
						<h3 class="card-title">Company Growth Yearly</h3>
					</div>
					<div class="card-body">
						<div id="echart1" class="chartsh"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-12">
				<div class="card ">
					<div class="card-header">
						<div class="card-title">Monthly View</div>
					</div>
					<div class="card-body p-4">
						<div class="chats-wrap">
							<div class="chat-details mb-1 p-3">
								<h4 class="mb-0">
									<span class="h5 font-weight-normal">Sales</span>
									<span class="float-right p-1 bg-primary btn btn-sm text-white">
									<b>70</b>%</span>
								</h4>
								<div class="progress progress-md mt-3">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 70%"></div>
								</div>
							</div>
							<div class="chat-details mb-1 p-3">
								<h4 class="mb-0">
									<span class="h5 font-weight-normal">Profit</span>
									<span class="float-right p-1 bg-secondary  btn btn-sm text-white">
										<b>60</b>%</span>
								</h4>
								<div class="progress progress-md mt-3">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 60%"></div>
								</div>
							</div>
							<div class="chat-details mb-1 p-3">
								<h4 class="mb-0">
									<span class="h5 font-weight-normal">Users</span>
									<span class="float-right p-1 bg-cyan btn btn-sm text-white">
										<b>47%</b>
									</span>
								</h4>
								<div class="progress progress-md mt-3">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-cyan" style="width: 47%"></div>
								</div>
							</div>
							<div class="chat-details mb-1 p-3">
								<h4 class="mb-0">
									<span class="h5 font-weight-normal">Growth</span>
									<span class="float-right p-1 bg-info btn btn-sm text-white">
										<b>25%</b>
									</span>
								</h4>
								<div class="progress progress-md mt-3">
									<div class="progress-bar progress-bar-striped progress-bar-animated  bg-info" style="width: 25%"></div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-cards">
			
		</div>
		<div class="row row-deck">
			<div class="col-lg-8 col-md-12 col-sm-12 ">
				<projects></projects>
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
	</div>
</div>
</div>
@endsection