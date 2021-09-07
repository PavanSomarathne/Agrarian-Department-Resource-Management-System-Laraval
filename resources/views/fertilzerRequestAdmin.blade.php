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
    <br />
    <!--end breadcrumb-->

    <div class="col-sm-12 card p-4">
        <!-- Data table start here -->
        <h3>Requests Send By Farmers</h3>
        <br />
        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
            <thead>
                <tr>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>ID</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Division</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Cultivation Type</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Fertilization Type</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Acres</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Status</b></th>
                    <th style="color:rgb(34, 24, 119); font-size: 13px;"><b>Actions</b></th>

                </tr>
            </thead>

            <tbody>
                @if(is_array($requestList) || is_object($requestList))
                @foreach ($requestList as $item)
                {{-- --}}

                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->division}}</td>
                    <td>{{$item->cultivationType }}</td>
                    <td>{{$item->fertilizerType }}</td>
                    <td>{{$item->acres }}</td>
                    <td>{{$item->status }}</td>
                    @if($item->status == 'Pending')
                    <td>
                        <div class="row"> 
                        <form class="col-3" action="/fertilizerApprove" method="post">
                        {{ csrf_field() }}
                            <input class="btn btn-success" type="submit" value="Approve" />
                            <input hidden="true" name="id" value={{$item->id}} />
                        </form>
                        <form class="col" action="/fertilizerReject" method="post">
                        {{ csrf_field() }}
                            <input class="btn btn-danger" type="submit" value="Reject" />
                            <input hidden="true" name="id" value={{$item->id}} />
                        </form>
                        <div>
                    </td>
                    @else
                    <td>N/A</td>        
                    @endif
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

                // $(function() {
                //     $("#approveLink").on("click", function(e) {
                //         e.preventDefault(); // cancel the link itself
                //         $.post(this.href, function(data) {
                //             $("#someContainer").html(data);
                //         });
                //     });
                // });

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