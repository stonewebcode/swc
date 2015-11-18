@extends('layouts.emailmaster')

@section('content')

    <p>Dear {{ $contactname}} - {{$contactemail }}</p>

    <p>Thank you for contacting us.</p>

    <p>We will be in touch with you shortly.</p>

    <p>Kind regards</p>

    <p>Stone Web Code Website Team</p>

    <p>&nbsp;</p>

    <hr/>
    {{ $contactmessage }}

@endsection
