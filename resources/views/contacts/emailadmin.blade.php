@extends('layouts.emailmaster')

@section('content')
    <p>Dear {{ $adminname }}</p>
    <p>You have received an email from Stone Web Code Website from {{ $contactname }} - {{ $contactemail }}</p>
    <p>See below.</p>
    <p>Stone Web Code Web Team</p>
    <hr/>
    <p> {{ $contactmessage }} </p>
@endsection
