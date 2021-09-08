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
                    <li class="breadcrumb-item " aria-current="page">Fertilizer Reques - Officer</Em></li>
                </ol>
            </nav>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-6 mt-8 ">
            <h6 class="mb-0 text-uppercase">Send Fertilizer Request</h6>
            <hr />
            <div class="card border-top border-0 border-4 border-success">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-send me-1 font-22 text-success"></i>
                        </div>
                        <h5 class="mb-0 text-success">Send Fertilizer Request</h5>
                    </div>
                    <hr>
                    <form class="row g-3" method="POST" action="/fertilizerOfficer">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputLastName" class="form-label @error('division') is-invalid @enderror"">Division</label>
                        <select class=" form-control" id="division" name="division">
                                <option> Division 1</option>
                                <option> Division 2</option>
                                <option> Division 3</option>
                                </select>

                        </div>
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">Cultivation Type</label>
                            <div class="row m-4 mt-0 mb-0">
                                <div class="col form-check">
                                    <input class="form-check-input" type="checkbox" name="cultivation[]" value="Padding Cultivation" id="invalidCheck2">
                                    <label class="form-check-label" for="invalidCheck2">Padding Cultivation</label>
                                </div>
                                <div class="col form-check">
                                    <input class="form-check-input" type="checkbox" name="cultivation[]" value="Additional Cultivation" id="invalidCheck2">
                                    <label class="form-check-label" for="invalidCheck2">Additional Cultivation</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">Total Acres</label>
                            <input type="text" class="form-control @error('acres') is-invalid @enderror"" id=" acres" name="acres">
                            @error('acres')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="inputFirstName" class="form-label">Fertilizer Type</label>
                            <div class="row m-4 mt-0 mb-0">
                                <div class="col form-check">
                                    <input class="form-check-input" type="checkbox" name="category[]" value="MOP" id="invalidCheck2">
                                    <label class="form-check-label" for="invalidCheck2">MOP</label>
                                </div>
                                <div class="col form-check">
                                    <input class="form-check-input" type="checkbox" name="category[]" value="TSP" id="invalidCheck2">
                                    <label class="form-check-label" for="invalidCheck2">TSP</label>
                                </div>
                                <div class="col form-check">
                                    <input class="form-check-input" type="checkbox" name="category[]" value="Urea" id="invalidCheck2">
                                    <label class="form-check-label" for="invalidCheck2">Urea</label>
                                </div>
                            </div>
                            <div class="row m-4 mt-0 mb-0">
                                <div class="col form-check">
                                    <input class="form-check-input" type="checkbox" name="category[]" value="Rock Pospate" id="invalidCheck2">
                                    <label class="form-check-label" for="invalidCheck2">Rock Pospate</label>
                                </div>
                                <div class="col form-check">
                                    <input class="form-check-input" type="checkbox" name="category[]" value="Dalamite" id="invalidCheck2">
                                    <label class="form-check-label" for="invalidCheck2">Dalamite</label>
                                </div>
                            </div>
                            <div class="row m-4 mt-0 mb-0">
                                <div class="col form-check">
                                    <input class="form-check-input" type="checkbox" name="category[]" value="YPM" id="invalidCheck2">
                                    <label class="form-check-label" for="invalidCheck2">YPM</label>
                                </div>
                                <div class="col form-check">
                                    <input class="form-check-input" type="checkbox" name="category[]" value="OPM" id="invalidCheck2">
                                    <label class="form-check-label" for="invalidCheck2">OPM</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success px-5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <h6 class="mb-0 text-uppercase">Requests Sent</h6>
            <hr />
            <div class="card p-4">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                    <thead>
                        <tr>
                            <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>ID</b></th>
                            <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Division</b></th>
                            <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Cultivation Type</b></th>
                            <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Fertilization Type</b></th>
                            <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Acres</b></th>
                            <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Status</b></th>


                        </tr>
                    </thead>

                    <tbody>
                        @if(is_array($requestList2) || is_object($requestList2))
                        @foreach ($requestList2 as $item)
                        {{-- --}}

                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->division}}</td>
                            <td>{{$item->cultivationType }}</td>
                            <td>{{$item->fertilizerType }}</td>
                            <td>{{$item->acres }}</td>
                            <td>{{$item->status }}</td>
                        </tr>

                        {{-- @endif   --}}
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="col-sm-12 card p-4">
        <!-- Data table start here -->
        <h3>Requests Send By Farmers</h3>
        <br />
        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
            <thead>
                <tr>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>ID</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Farmer Name</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Division</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Season</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Type</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Acres</b></th>

                </tr>
            </thead>

            <tbody>
                @if(is_array($requestList) || is_object($requestList))
                @foreach ($requestList as $item)
                {{-- --}}

                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->division }}</td>
                    <td>{{$item->season }}</td>
                    <td>{{$item->type }}</td>
                    <td>{{$item->acres }}</td>
                </tr>

                {{-- @endif   --}}
                @endforeach
                @endif
            </tbody>
        </table>


        <script>
            $(document).ready(function() {

                function selectElement(id, valueToSelect) {
                    let element = document.getElementById(id);
                    element.value = valueToSelect;
                }
                $("#example1").DataTable({
                    responsive: true,
                    dom: 'Bfrtip',
                    pageLength:4,
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
    <!--end row-->
</div>
@stop