@extends('management::layouts.master')
@section('title') @lang('management::translation.starter')  @endsection
@section('content')
@component('management::components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Starter  @endslot
@endcomponent
@endsection
@section('script')
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
