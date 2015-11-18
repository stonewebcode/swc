<!--resources/views/contacts/create.blade.php -->
<!-- call the main.blade.php file in the layouts directory within the view dir from which this page is being called-->
@extends('layouts.main')

        <!-- this defines the content section which gets displayed with the yield in the calling  main.blade.php file -->
@section('content')
    @include('contacts.form')
@endsection

