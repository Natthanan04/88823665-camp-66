@extends('errors::minimal')

@section('title', __('500 Server Error'))
@section('code')
    <h2 class="headline text-danger">500</h2>
    @endsection
@section('message')
    <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Something went wrong.</h3>
    @endsection
