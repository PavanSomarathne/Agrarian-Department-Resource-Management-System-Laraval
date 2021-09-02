@extends('layouts.master')
@include('layouts/header')
<!--Inner Header Start-->
<style>
    table.dataTable.table-striped.DTFC_Cloned tbody tr:nth-of-type(odd) {
    background-color: #F3F3F3;
}
table.dataTable.table-striped.DTFC_Cloned tbody tr:nth-of-type(even) {
    background-color: white;
}
    </style>
     @section('content')
<section class=" p100 ">

    <div class="container d-flex justify-content-center align-items-center" style="height: 100%;">
        <!-- <div class="col-lg-4">
                     <div class="login-box">
                        <h3>Login Account</h3>
                        <form id="login-form" method="POST" action="{{ route('login') }}">
                        @csrf   
                        <div class="input-group">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Username/Email" name="email" value="{{ old('email') }}" required>
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                           </div>
                           <div class="input-group">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>
                              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                           </div>
                              
                             
                           <div class="input-group form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck2" {{ old('remember') ? 'checked' : '' }}>
                              <label class="form-check-label" for="exampleCheck2">Remember Me</label>
                              @if (Route::has('password.request'))
                                 <a href="{{ route('password.request') }}" class="fp">Forgot Password</a> 
                              @endif
                           </div>
                           <div class="input-group ">
                              <button class="login-btn btn" type="submit" onclick="event.preventDefault();
                                                     document.getElementById('login-form').submit();">Login Account</button>
                           </div>
                        </form>
                     </div>
                  </div> -->
        <!-- <table id="example" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                </tr>
                <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                </tr>
            </tbody>
        </table> -->
       
        <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
    </table>
  
    </div>

</section>
@endsection
   


@push('scripts')
<script>
$(function() {
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }   
        });
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush

