@extends('layouts.master')
@include('layouts/header')
<!--Inner Header Start-->

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 100%;">

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
                    <form id="editFormID" method="POST" action="/UpdateFarmer" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}

                        {{-- <input type="text" name="supID" id="supID" value="4" > --}}

                        <div class="form-group row">
                            <label for="fid" class="col-md-4 col-form-label text-md-right">{{ __('Farmer ID') }}</label>
                            <div class="col-md-7">
                                <input type="text" id="fid" class="form-control" name="fid" value="{{ old('fid') }}" required autocomplete="fid" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fName" class="col-md-4 col-form-label text-md-right">{{ __('Farmer Name') }}</label>
                            <div class="col-md-7">
                                <input type="text" id="fName" class="form-control" name="fName" value="{{ old('fName') }}" required autocomplete="fName" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idNo" class="col-md-4 col-form-label text-md-right">{{ __('ID Number') }}</label>
                            <div class="col-md-7">
                                <input type="idNo" id="idNo" class="form-control" name="idNo" value="{{ old('idNo') }}" required autocomplete="idNo" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>
                            <div class="col-md-7">
                                <input type="age" id="age" class="form-control" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telNo" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
                            <div class="col-md-7">
                                <input type="telNo" id="telNo" class="form-control" name="telNo" value="{{ old('telNo') }}" required autocomplete="telNo" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-7">
                                <input type="address" id="address" class="form-control" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-7">
                                <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="acres" class="col-md-4 col-form-label text-md-right">{{ __('Acres') }}</label>
                            <div class="col-md-7">
                                <input type="acres" id="acres" class="form-control" name="acres" value="{{ old('acres') }}" required autocomplete="acres" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="typeOfTheLand" class="col-md-4 col-form-label text-md-right">{{ __('Postal Code') }}</label>
                            <div class="col-md-7">
                                <input type="typeOfTheLand" id="typeOfTheLand" class="form-control" name="typeOfTheLand" value="{{ old('typeOfTheLand') }}" required autocomplete="typeOfTheLand" autofocus>
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
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>ID</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Farmers Name;</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Id Number</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Age</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Phone Number</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Address</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Email</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Acres</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Type Of The Land</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Action</b></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $item)
                {{-- @if($item->isActive =='1') --}}

                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email }}</td>
                    <td>{{$item->nic}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->dob}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->acres}}</td>
                    <td>{{$item->land_type}}</td>
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
@endSection