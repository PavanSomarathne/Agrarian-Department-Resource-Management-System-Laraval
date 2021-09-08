@extends('layouts.admin')
@section('content')
<link href="{{ asset('assets/css1/bootstrap.min.css') }}" rel="stylesheet">
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
		<hr />
		<div class="card border-top border-0 border-4 border-success">
			<div class="card-body p-5">
				<div class="card-title d-flex align-items-center">
					<div><i class="bx bxs-bell me-1 font-22 text-success"></i>
					</div>
					<h5 class="mb-0 text-success">Add New Subsidie</h5>
				</div>
				<hr>
				<form class="row g-3" method="POST" action="/subsidies">
					@csrf
					<div class="col-md-6">
						<label for="inputFirstName" class="form-label">Select Date</label>
						<input type="date" class="form-control @error('date') is-invalid @enderror"" id=" date" name="date">
						@error('date')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="col-md-6">
						<label for="inputLastName" class="form-label">Description</label>
						<input type="text" class="form-control @error('description') is-invalid @enderror"" id=" description" name="description">
						@error('description')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					<div class="col-12">
						<button type="submit" class="btn btn-success px-5">Submit</button>
					</div>
				</form>
			</div>
		</div>

	
	</div>
	<!--end breadcrumb-->

	<div class="modal fade" id="suppliereditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title mx-auto " id="exampleModalLabel" style="font-weight:400">
						Update Subsidies Details</h5>
					<button type="button" class="close position-absolute right-0" data-dismiss="modal" aria-label="Close" style="right: 20px;">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					{{-- <form id="editFormID"> --}}
					<form id="editFormID" method="POST" action="/subsidies" enctype="multipart/form-data">
						{{ csrf_field() }}
						{{method_field('PUT')}}

						<input type="hidden" name="id" id="fid" value="">


						<div class="form-group row">
							<label for="fName" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>
							<div class="col-md-7">
								<input type="date" id="dateUpdate" class="form-control" name="date" value="{{ old('date') }}" autofocus>
							</div>
						</div>

						<div class="form-group row">
							<label for="idNo" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
							<div class="col-md-7">
								<input type="text" id="descriptionUpdate" class="form-control" name="description" value="{{ old('description') }}" autofocus>
							</div>
						</div>


						<div class="modal-footer">
							<div class="btn-group">
								{{-- <button type="submit" class="btn btn-primary submit" style="font-weight: 650">UPDATE</button>  --}}
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary submit">Submit</button>
							</div>
						</div>
				</div>
				</form>
			</div>
		</div>
	</div>

	<div class="col-sm-12">
		<!-- Data table start here -->
		<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
			<thead>
				<tr>
					{{-- <h2 style="color: rgb(155, 104, 9);font-size: 38px;">{{$item->pName}}</span></h2> --}}
					<th style="width: 50px;"><b>Action</b></th>
					<th style="color:rgb(34, 24, 119); font-size: 13px;"><b>ID</b></th>
					<th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Date</b></th>
					<th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Description</b></th>

				</tr>
			</thead>

			<tbody>
				@if(is_array($subsidies) || is_object($subsidies))
				@foreach ($subsidies as $item)
				{{-- --}}

				<tr>
					<td style="text-align:center">
						<div class="btn-group">
							<form action="" method="get">
								@csrf
								<div class="btn p-2 edit_btn">
									<i class="fa fa-edit "></I>
								</div>
							</form>

							<!-- Button for Delete form -->
							<form action="/subsidies" method="post">
								{{ csrf_field() }}
								{{method_field('DELETE')}}
								<input type="hidden" name="id" value="{{$item->id}}" />
								<button class="btn p-2" type="submit">
									<i class=" fa fa-trash "></i>
								</button>
							</form>
							<div>
					</td>
					<td>{{$item->id}}</td>
					<td>{{$item->date}}</td>
					<td>{{$item->description }}</td>

				</tr>

				{{-- @endif   --}}
				@endforeach
				@endif
			</tbody>
		</table>


		<script>
			$(document).ready(function() {
				$("body").on("click", ".edit_btn", function(event) {
					$('#suppliereditModal').modal('show')

					$tr = $(this).closest('tr');
					var data = $tr.children("td").map(function() {
						return $(this).text();
					}).get();

					console.log(data);

					// alert(data);
					$('#fid').val(data[1]);
					$('#dateUpdate').val(data[2]);
					$('#descriptionUpdate').val(data[3]);
				});


				function selectElement(id, valueToSelect) {
					let element = document.getElementById(id);
					element.value = valueToSelect;
				}
				$("#example1").DataTable({
					responsive: true,
					dom: 'Bfrtip',
					buttons: [
						'copy',
						{
							extend: 'csv',
							text: 'csv',
							extension: '.csv',
							exportOptions: {
								modifier: {
									page: 'current'
								}
							},
							title: 'Farmers'
						},
						'pdf',
						'print',
						{
							extend: 'excel',
							text: 'excel',
							extension: '.xlsx',
							exportOptions: {
								modifier: {
									page: 'current'
								}
							},
							title: 'Farmers'
						}, 'colvis'
					]

				});

				// $('#editFormID').on('submit', function (e) {
				//     e.preventDefault();

				//     var id = $('#id').val();

				//     $.ajax({
				//         type: "PUT",
				//         url: "/UpdateSupplier/" + id,
				//         data: $('#editFormID').serialize(),
				//         success: function (response) {
				//             console.log(response);
				//             $('#suppliereditModal').modal('hide');
				//             alert("Data Updated");
				//         },
				//         error: function (error) {
				//             console.log(error);
				//         }
				//     })
				//     $('#exampleModal').modal('hide');
				//     window.location.reload();
				// })
			});
		</script>
	</div>
</div>
@stop