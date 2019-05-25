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
					<progress-bar v-bind:type="'user'"></progress-bar>
					<totals-widget v-bind:type="'tips'"></totals-widget>
					{{-- <totals-widget v-bind:type="'paycheques'"></totals-widget> --}}
			</div>
		</div>
		<div class="row row-deck">
			<div class="col-lg-8 col-sm-12">
				<projects v-bind:user="user"></projects>
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