@extends('customer.layout.default')
@section('title','Panel de Cliente')


@section('content')

    Bienvenido(a) <strong>{{\Auth::user()->full_name}}</strong>



@endsection