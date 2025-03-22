@extends('layout.sidenav-layout')

@section('content')
    @include('component.dashbord.invoice.invoice-delete')
    @include('component.dashbord.invoice.invoice-details')
    @include('component.dashbord.invoice.invoice-list')
@endsection