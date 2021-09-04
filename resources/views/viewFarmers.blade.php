@extends('layouts.admin')
@section('content')
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Dashboard</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb" >
							<ol class="breadcrumb mb-0 p-0" style="background-color: #ffffff;">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">View Farmers</li>
							</ol>
						</nav>
					</div>
				</div>

                <div class="container-fluid">
@if(session('status'))
<center>
    <div class="alert alert-success  col-md-4 col-md-offset-4"  role="alert"  >
        {{session('status')}}
    </div>
</center>
    @endif
    @if(session('error'))
    <center>
    <div class="alert alert-danger  col-md-4 col-md-offset-4"  role="alert"  >
        {{session('error')}}
    </div>
    </center>
@endif
</div>
				
<div class=" card border-top border-0 border-4 p-3" style="height: 100%;">

    <div class="modal fade" id="suppliereditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mx-auto " id="exampleModalLabel" style="font-weight:400">
                        Update Farmer Details</h5>
                    <button type="button" class="close position-absolute right-0" data-dismiss="modal" aria-label="Close" style="right: 20px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    {{-- <form id="editFormID"> --}}
                    <form id="editFormID" method="POST" action="{{ route('update_farmer') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}

                         <input type="hidden" name="fid" id="fid" value="" > 

                        
                        <div class="form-group row">
                            <label for="fName" class="col-md-4 col-form-label text-md-right">{{ __('Farmer Name') }}</label>
                            <div class="col-md-7">
                                <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idNo" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-7">
                                <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Nic No') }}</label>
                            <div class="col-md-7">
                                <input type="text" id="nic" class="form-control" name="nic" value="{{ old('nic') }}" required autocomplete="nic" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telNo" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
                            <div class="col-md-7">
                                <input type="text" id="phone" class="form-control" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Acres') }}</label>
                            <div class="col-md-7">
                                <input type="number" id="acres" class="form-control" name="acres" value="{{ old('acres') }}" required autocomplete="acres" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Division') }}</label>
                            <div class="col-md-7">
                                <select id="division" class="form-select" name="division" value="{{ old('division') }}" required autocomplete="division" autofocus>
                                <option value="Gokarella North">Gokarella North</option>
                                    <option value="Gokarella West">Gokarella West</option>
                                    <option value="Gokarella South">Gokarella South</option>
                                    <option value="Gokarella East">Gokarella East</option>    
                            </select>
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="acres" class="col-md-4 col-form-label text-md-right">{{ __('Grama Division') }}</label>
                            <div class="col-md-7">
                                <input type="text" id="grama_division" class="form-control" name="grama_division" value="{{ old('grama_division') }}" required autocomplete="grama_division" autofocus>
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="typeOfTheLand" class="col-md-4 col-form-label text-md-right">{{ __('Land Type') }}</label>
                            <div class="col-md-7">
                                <select id="land_type" class="form-select" name="land_type" value="{{ old('land_type') }}" required autocomplete="land_type" autofocus>
                                <option value="Mud Land">Mud Land</option>
                                    <option value="Surface Land">Surface Land</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="typeOfTheLand" class="col-md-4 col-form-label text-md-right">{{ __('Farmer Type') }}</label>
                            <div class="col-md-7">
                                <select id="farmer_type" class="form-select" name="farmer_type" value="{{ old('farmer_type') }}" required autocomplete="farmer_type" >
                                <option value="Freeholder Landowner">Freeholder Landowner</option>
                                    <option value="Tenant Farmer">Tenant Farmer</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="typeOfTheLand" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                            <div class="col-md-7">
                                <input type="date" id="dob" class="form-control" name="dob" value="{{ old('dob') }}" required autocomplete="dob" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="typeOfTheLand" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-7">
                                <input type="text" id="address" class="form-control" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
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
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Farmers Name;</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Email</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>NIC Number</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Phone Number</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Acres</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Division</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Land Type</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Farmer Type</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Date of Birth</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Address</b></th>
                    
                </tr>
            </thead>

            <tbody>
            @if(is_array($data) || is_object($data))
                @foreach ($data as $item)
                {{--  --}}

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
                            <form action="{{ route('delete_farmer')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$item->id}}"/>
                                <button class="btn p-2"  type="submit">
                                    <i  class=" fa fa-trash "></i>
                                </button>
                            </form>
                            <div>
                    </td>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email }}</td>
                    <td>{{$item->nic}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->acres}}</td>
                    <td>{{$item->division}}</td>
                    <td>{{$item->land_type}}</td>
                    <td>{{$item->farmer_type}}</td>
                    <td>{{$item->dob}}</td>
                    <td>{{$item->address}}</td>
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
                    $('#name').val(data[2]);
                    $('#email').val(data[3]);
                    $('#nic').val(data[4]);
                    $('#phone').val(data[5]);
                    $('#acres').val(data[6]);
                    selectElement('division',data[7])
                    selectElement('land_type',data[8])
                    selectElement('farmer_type',data[9])
                    $('#dob').val(data[10]);
                    $('#address').val(data[11]);

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

				<!--end row-->
			</div>
@stop
	
	