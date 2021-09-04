@extends('layouts.admin')
@section('content')
<link href="{{ asset('assets/css1/bootstrap.min.css') }}" rel="stylesheet">

			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Dashboard</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb" >
							<ol class="breadcrumb mb-0 p-0" style="background-color: #ffffff;">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">View Product</li>
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
                        Update Harvest Details</h5>
                    <button type="button" class="close position-absolute right-0" data-dismiss="modal" aria-label="Close" style="right: 20px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    {{-- <form id="editFormID"> --}}
                    <form id="editFormID" method="POST" action="{{ route('harvest.update') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}

                         <input type="hidden" name="hid" id="hid" value="" > 

                        
                        <div class="form-group row">
                            <label for="fName" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>
                            <div class="col-md-7">
                                <input type="text" id="harvest_name" class="form-control" name="harvest_name" value="{{ old('harvest_name') }}" required autocomplete="harvest_name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idNo" class="col-md-4 col-form-label text-md-right">{{ __('Product Quantity') }}</label>
                            <div class="col-md-7">
                                <input type="number" id="harvest_quantity" class="form-control" name="harvest_quantity" value="{{ old('harvest_quantity') }}" required autocomplete="harvest_quantity" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Seller Phone No') }}</label>
                            <div class="col-md-7">
                                <input type="text" id="harvest_phone" class="form-control" name="harvest_phone" value="{{ old('harvest_phone') }}" required autocomplete="harvest_phone" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telNo" class="col-md-4 col-form-label text-md-right">{{ __('Product Price Rs.') }}</label>
                            <div class="col-md-7">
                                <input type="number" id="harvest_price" class="form-control" name="harvest_price" value="{{ old('harvest_price') }}" required autocomplete="harvest_price" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Selling Type') }}</label>
                            <div class="col-md-7">
                                <select  id="harvest_selling_type" class="form-select" name="harvest_selling_type" value="{{ old('harvest_selling_type') }}" required autocomplete="harvest_selling_type" autofocus>
                                <option value="Wholesale">Wholesale</option>
                                <option value="Retail">Retail</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="typeOfTheLand" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                            <div class="col-md-7">
                                <textarea type="text" id="harvest_description" class="form-control" name="harvest_description" value="{{ old('harvest_description') }}" required autocomplete="harvest_description" autofocus>
                                </textarea>
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
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Image</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Product Name</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Product Quantity</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Selller Number</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Product Price</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Selling Type</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Description</b></th>
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
                            <form action="{{ route('harvest.delete')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$item->id}}"/>
                                <button class="btn p-2"  type="submit">
                                    <i  class=" fa fa-trash "></i>
                                </button>
                            </form>
                            <div>
                    </td>
                    <td>{{$item->id}}</td>
                    <td>
                    <div class="d-flex justify-content-center align-items-center" style="width: 100px;height: 100px;">
                        <div class="" style="object-fit: cover;">
                    <img width="100%" src="{{$item->harvest_image}}" alt="{{$item->harvest_image}}">
                    </div> 
                    </div>   
                </td>
                    <td>{{$item->harvest_name }}</td>
                    <td>{{$item->harvest_quantity}}</td>
                    <td>{{$item->harvest_phone}}</td>
                    <td>{{$item->harvest_price}}</td>
                    <td>{{$item->harvest_selling_type}}</td>
                    <td>{{$item->harvest_description}}</td>
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
                    $('#hid').val(data[1]);
                    $('#harvest_name').val(data[3]);
                    $('#harvest_quantity').val(data[4]);
                    $('#harvest_phone').val(data[5]);
                    $('#harvest_price').val(data[6]);
                    selectElement('harvest_selling_type',data[7])
       
                    $('#harvest_description').val(data[8]);


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
	
	