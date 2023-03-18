@extends('layouts.mail')

@section('title','Verify Email Code')

@section('intro')
<p><strong> Hello, {{ $data['name'] }}</strong></p> <br>
<p>Thank you for signing up on our platform</p>
<br>
<p>To proceed with your registration, please copy the code below and paste in the field provided on our platform</p>
@endsection

@section('ctatext')
<p><strong> {{ $data['code'] }} </strong></p>
@endsection

@section('ending')
    <p>Thank you</p> <br>
    <p>Regards.</p> <br>
    <p>{{ config('app.name') }} Team</p>
@endsection