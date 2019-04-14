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
			<div class="col-8 grid-margin">
				<div class="card">
					<div class="card-header ">
						<h3 class="card-title ">Projects</h3>
					</div>
					<div class="">
						<div class="d-flex table-responsive p-3">
							<div class="btn-group mr-2">
							  <button class="btn btn-sm btn-primary"><i class="mdi mdi-plus-circle-outline"></i> Add</button>
							</div>
							<div class="btn-group mr-2">
							  <button type="button" class="btn btn-light mr-2"><i class="mdi mdi-alert-circle-outline"></i></button>
							  <button type="button" class="btn btn-light"><i class="mdi mdi-delete-empty"></i></button>
							</div>
							<div class="btn-group mr-2">
							  <button type="button" class="btn btn-light"><i class="mdi mdi-printer"></i></button>
							</div>
							<div class="btn-group ml-auto mr-2 mt-1 border-0 d-none d-md-block">
							  <input type="text" class="form-control" placeholder="Search Here">
							</div>
							
						</div>
						<div class="table-responsive border-top">
							<table class="table card-table table-striped table-vcenter text-nowrap">
								<thead>
									<tr>
										<th>Id</th>
										<th>Project Name</th>
										<th >Team</th>
										<th>Feedback</th>
										<th>Date</th>
										<th>Preview</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>2345</td>
										<td>Megan Peters</td>
										<td><div class="avatar-list avatar-list-stacked">
											  <span class="avatar brround" style="background-image: url(/admin/images/faces/female/12.jpg)"></span>
											  <span class="avatar brround" style="background-image: url(/admin/images/faces/male/21.jpg)"></span>
											  <span class="avatar brround" style="background-image: url(/admin/images/faces/female/29.jpg)"></span>
											  <span class="avatar brround" style="background-image: url(/admin/images/faces/male/2.jpg)"></span>
											</div>
										</td>
										<td>please check pricing Info </td>
										<td class="text-nowrap">July 13, 2018</td>
										<td class="w-1"><a href="#" class="icon"><i class="fa fa-eye"></i></a></td>
									</tr>
									<tr>
										<td>4562</td>
										<td>Phil Vance</td>
										<td><div class="avatar-list avatar-list-stacked">
											  <span class="avatar brround" style="background-image: url(/admin/images/faces/male/12.jpg)"></span>
											  <span class="avatar brround" style="background-image: url(/admin/images/faces/female/21.jpg)"></span>
											  <span class="avatar brround" style="background-image: url(/admin/images/faces/male/29.jpg)"></span>
											  <span class="avatar brround" style="background-image: url(/admin/images/faces/female/2.jpg)"></span>
											</div>
										</td>
										<td>New stock</td>
										<td class="text-nowrap">June 15, 2018</td>
										<td><a href="#" class="icon"><i class="fa fa-eye"></i></a></td>
									</tr>
		
								</tbody>
							</table>
						</div>
					</div>
				</div>
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
										<td>{{ $user->created_at }}</td>
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