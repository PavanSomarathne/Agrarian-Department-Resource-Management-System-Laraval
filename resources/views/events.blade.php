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
								<li class="breadcrumb-item active" aria-current="page">Manage Events</Em></li>
							</ol>
						</nav>
					</div>
				</div>
                <br/>
                <div class="col mt-8">
						<h6 class="mb-0 text-uppercase">Add Events</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-success">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-time me-1 font-22 text-success"></i>
									</div>
									<h5 class="mb-0 text-success">Add New Event</h5>
								</div>
								<hr>
								<form class="row g-3" method="POST" action="/events" >
								@csrf
									<div class="col-md-6">
										<label for="inputFirstName" class="form-label">Select Date</label>
										<input type="date" class="form-control" id="date" name="date">
									</div>
                                    <div class="col-md-6">
										<label for="inputFirstName" class="form-label">Select Time</label>
										<input type="time" class="form-control" id="date" name="time">
									</div>
                                    <div class="col-md-6">
										<label for="inputLastName" class="form-label">Division</label>
                                        <select  class="form-control" id="division" name="division">
                                       <option> Division 1</option>
                                       <option> Division 2</option>
                                       <option> Division 3</option>
                                    </select>
									</div>
                                    <div class="col-md-6">
										<label for="inputFirstName" class="form-label">Title</label>
										<input type="text" class="form-control" id="date" name="title">
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
                        <div class="col-sm-12">
        <!-- Data table start here -->
        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
            <thead>
                <tr>
                    {{-- <h2 style="color: rgb(155, 104, 9);font-size: 38px;">{{$item->pName}}</span></h2> --}}
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>ID</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Event Title;</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Description</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Division</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Date</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Time</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Action</b></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($events as $item)
                {{-- @if($item->isActive =='1') --}}

                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description }}</td>
                    <td>{{$item->division}}</td>
                    <td>{{$item->date}}</td>
                    <td>{{$item->time}}</td>
                    <!--Button for edit form  -->
                    <td style="text-align:center">
                        <div class="btn-group">
                            <form action="" method="get">
                                @csrf
                                <button type="button" class="btn btn-success edit_btn">
                                    <i class="fa fa-edit"></I>
                                </button>
                            </form>

                            <!-- Button for Delete form -->
                            <form action="{{url('deletFarmer').$item->id}}" method="get">
                                @csrf
                                <button type="submit" class="btn btn-danger ">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                            <div>
                    </td>
                </tr>

                {{-- @endif   --}}
                @endforeach
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
                    $('#fid').val(data[0]);
                    $('#fName').val(data[1]);
                    $('#idNo').val(data[2]);
                    $('#age').val(data[3]);
                    $('#telNo').val(data[4]);
                    $('#address').val(data[5]);
                    $('#email').val(data[6]);
                    $('#acres').val(data[7]);
                    $('#typeOfTheLand').val(data[8]);

                });
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
                            title: 'table'
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
                            title: 'table'
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
					</div>
				</div>
				<!--end row-->
			</div>
@stop
	
	