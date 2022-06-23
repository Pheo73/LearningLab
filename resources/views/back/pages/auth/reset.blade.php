@include('layouts/.header')
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<?php $color = "yellow" ?>



@extends('layouts/.footer')


@extends('back.layouts.auth-layout')
@section('pageTitle',isset($pageTitle) ? $pageTitle : 'Reset Password')
@section('content')
@include('layouts/banner/.banner_reset_password')


@endsection
