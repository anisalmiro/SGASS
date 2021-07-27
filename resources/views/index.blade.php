@extends('layouts.principal')


@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><apan aria-hidden="true">&times;</span></button>
    {{Session::get('message')}}
</div>

@endif

@section('content')
   
   @include('alerts.errors')

@endsection



