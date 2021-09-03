@extends('layouts.admin')
@section('content')
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Dashboard</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Manage Subsidies</li>
							</ol>
						</nav>
					</div>
				</div>
                <div class="col">
						<h6 class="mb-0 text-uppercase">Add Subsidies</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-success">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-bell me-1 font-22 text-success"></i>
									</div>
									<h5 class="mb-0 text-success">Add New Subsidie</h5>
								</div>
								<hr>
								<form class="row g-3" method="POST" action="/subsidies" >
								@csrf
									<div class="col-md-6">
										<label for="inputFirstName" class="form-label">Select Date</label>
										<input type="date" class="form-control" id="date" name="date">
									</div>
									<div class="col-md-6">
										<label for="inputLastName" class="form-label">Description</label>
										<input type="text" class="form-control" id="description" name="description">
									</div>
									
									<div class="col-12">
										<button type="submit" class="btn btn-success px-5">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col">
						<h6 class="mb-0 text-uppercase">View Subsidies</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<table class="table mb-0">
									<thead class="table-dark">
										<tr>
											<th scope="col">#</th>
											<th scope="col">Date</th>
											<th scope="col">Subsidie</th>
										</tr>
									</thead>
									<tbody>
				
                                        @foreach($subsidies as $subsidie) 
                                        <tr>
											<th scope="row">{{$subsidie['id']}}</th>
											<td>{{$subsidie['date']}}</td>
											<td>{{$subsidie['description']}}</td>
										</tr>
                                        @endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
@stop
	
	