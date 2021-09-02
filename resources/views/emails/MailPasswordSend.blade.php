@component('mail::message')
# Hey {{$name}},

You Have Added to the Agro - Agrarian Department Resource Management System as an Agrarian Officer

Your Credentials are as follows:

Username : <b>{{$username}}</b><br>
Password : <b>{{$password}}</b>

Please Login to the System and Change your Password and Do not Share your Credentials with anyone.

@component('mail::button', ['url' => $url])
Click here to Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
