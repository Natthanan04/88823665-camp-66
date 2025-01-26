@extends('errors::minimal')

@section('title', __('404 Not Found'))
@section('code')
    <h2 class="headline text-warning"> 404</h2>
@endsection
@section('message')
    <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
@endsection
